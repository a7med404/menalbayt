<?php

namespace App\Http\Controllers;

use App\Helper\UploadFile;
use App\Http\Requests\CustomerRequest;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \DB;
use Session;
use Carbon\Carbon;

class CustomerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['getDataJson', 'setDataJson', 'getDataLoginJson']]);
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::orderBy('id', 'desc')->get();
        return view('admin.customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request, customer $customer)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'password'  => Hash::make('password'),
        ];
        $customer->create($data);
        Session::flash('flash_massage_type', 1);
        return redirect('cpanel/customers')->withFlashMassage('Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            $customerInfo = customer::findOrFail($id);
            return view('admin.customers.show', ['customerInfo' => $customerInfo]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerInfo = customer::findOrFail($id);
        return view('admin.customers.edit', ['customerInfo' => $customerInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CustomerRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $customerInfo = customer::findOrFail($id);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
        ];
        $customerInfo->fill($data)->save();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Updated Successfully');
    }



    /**
     * For set null When Delete Parent
     */
    // public function setNull($field_name) 
    // {
    //     $this->$field_name = NULL; 
    //     $this->save(); 
    // }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerForDelete = customer::findOrFail($id);
        // $customerForDelete->offers()->detach();
        // $customerForDelete->offers->setNull('customer_id');
        $customerForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Deleted Successfully');
    }


    public function repport()
    {
        // $customers = customer::orderBy('id', 'desc')->get();
        $customers = customer::orderBy('id', 'desc')->get();
        return view('admin.customers.repport', ['customers' => $customers]);
    }

    


    public function searchForCustmoer(Request $request, customer $build)
    {
        $requestAll = array_except($request->toArray(), ['_token', 'submit', 'page']);
        $query      = DB::table('customers')->select('*');
        
        foreach ($requestAll as $key => $req) {
            if (!($req == "" || null)) {
                $query->where($key, $req);
            }
        }
        $customers = $query->orderBy('id','desc')->get();
        return view('admin.customers.index', ['customers' => $customers]);

    }

















    // public function setDataUpdateJson(){
    //     $data = [
    //         'first_name'    =>      $_POST['first_name'],
    //         'last_name'     =>       $_POST['last_name'],
    //         'phone_number'  =>    $_POST['phone_number'],
    //         'password'      =>      Hash::make($_POST['password']),
    //         'gender'        =>          $_POST['gender'],
    //     ];

    //     $code = [];
    //     $customer = customer::where('phone_number', $_POST['phone_number'])->first();
    //     if($customer != null){
    //         $code = ["code" => "3"];
    //         return json_encode($code);
    //     }
    //     $createDone = customer::create($data);
    //     if($createDone == true){
    //         $code = ["code" => "1"];
    //         return json_encode($code);
    //     }else{
    //         $code = ["code" => "0"];
    //         return json_encode($code);
    //     }
    // }



    /**
     * @param
     */

    public function getDataJson()
    {
        $id = $_POST['id'];
        header('Content-Type: application/josn');
        $customers = customer::where('id', $id)->first();
        return $customers == true ? $customers : "0";
    }


    /**
     * @param
     */
    public function setDataJson()
    {
        $data = [
            'first_name'    =>      $_POST['first_name'],
            'last_name'     =>       $_POST['last_name'],
            'phone_number'  =>    $_POST['phone_number'],
            'password'  =>            Hash::make($_POST['password']),
            'gender'        =>          1,//$_POST['gender'],
        ];
        $code = [];
        $customer = customer::where('phone_number', $_POST['phone_number'])->first();
        if($customer != null){
            $code = ["code" => "3"];
            return json_encode($code);
        }
        $createDone = customer::create($data);
        if($createDone == true){
            $code = ["code" => "1"];
            return json_encode($code);
        }else{
            $code = ["code" => "0"];
            return json_encode($code);
        }
    }


    /**
     * @param
     */

    public function getDataLoginJson()
    {
        $phone_number = $_POST['phone_number']; //"+1201454412280";// 
        $password  =          $_POST['password'];
        header('Content-Type: application/josn');
        $customer = customer::where('phone_number', $phone_number)->first();
        $code = [];
        if($customer != null){     
            if (Hash::check($password, $customer->password)) {
                return $customer;
            }
        }else{
            return "0";
        }
    }



    



}
