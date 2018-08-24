<?php

namespace App\Http\Controllers;

use App\Helper\UploadFile;
use App\Http\Requests\CustomerRequest;
use App\Models\customer;
use Illuminate\Http\Request;
use \DB;
use Session;
use Carbon\Carbon;

class CustomerController extends Controller
{
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
        $newNameForImage = new UploadFile();
        $newNameForImage = $newNameForImage->uploadOne($request, 'image', 'public/uploads/images/customers');
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'image' => $newNameForImage,
            'last_seen' => now()
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

        $newObjectForImage = new UploadFile();
        $newNameForImage = $newObjectForImage->uploadOne($request, 'image', 'public/uploads/images/customers/', $customerInfo->image, 'storage/uploads/images/customers/');
        if ($request->has('delete_image')) {
            $newNameForImage = $newObjectForImage->deleteOneFile('storage/uploads/images/customers/', $customerInfo->image);
        }
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'image' => $newNameForImage,
        ];
        $customerInfo->fill($data)->save();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerForDelete = customer::findOrFail($id);
        $customerForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Deleted Successfully');
    }


    public function repport()
    {
        // $customers = customer::orderBy('id', 'desc')->get();
        return view('admin.customers.repport');//', ['customers' => $customers]);
    }


    /**
     * @param
     */

    public function ajaxData()
    {
        $customers = customer::orderBy('id', 'desc')->get();
        header('Content-Type: application/josn');
        return json_encode($customers);
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

}
