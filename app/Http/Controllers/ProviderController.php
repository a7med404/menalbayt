<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provider;
use \App\Models\job;
use \App\Models\department;
use \App\Models\profile;
use \App\Models\profilesJobs;
use App\Helper\UploadFile;
use Illuminate\Support\Facades\Hash;
use \App\Http\Requests\ProviderRequest;
use \Session;


class ProviderController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'getDataAllProvidersJson', 
            'getDataOneJson', 
            'getDataLoginJson', 
            'setDataJson',
            'getDataForProviderJobsJson',
            'getDataOffOnJson'
            ]]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = provider::orderBy('id', 'desc')->get();
        return view('admin.providers.index', ['providers' => $providers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, provider $provider, profile $profile)
    {
        # first_name 	last_name 	username 	email 	gender 	pio 	protfolios 	identifier_number 	identifier_type 	identifier_image 	trusted 	department_id
        $newObjectForImage = new UploadFile();
        $newNameForIdentifierImage = $newObjectForImage->uploadOne($request, 'identifier_image', 'public/uploads/images/identifiers');
        
        $providerData = [
            'phone_number' => $request->phone_number,
            'account_status' => $request->account_status,
            'password' => "password",
            'last_seen' => now()
        ];
        $providerId = $provider->create($providerData);
        if($providerId->id){
            $profileData = [
                'id'  => $providerId->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'gender' => $request->gender,
                'protfolios' => "protfolios",
                'pio' => $request->pio,
                'identifier_type' => $request->identifier_type,
                'identifier_number' => $request->identifier_number,
                'identifier_image' => $newNameForIdentifierImage,
                'trusted' => $request->trusted,
                'department_id' => $request->department_id,
            ];

            $profileId = $profile->create($profileData);
        }
        
        Session::flash('flash_massage_type', 4);
        return redirect('cpanel/providers')->withFlashMassage('Provider Dose\'t Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $providerInfo = provider::findOrFail($id);
        return view('admin.providers.show', ['providerInfo' => $providerInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $providerInfo = provider::findOrFail($id);
        $profileInfo = profile::findOrFail($id);
        
        $allInfo = array_merge($providerInfo->toArray(), $profileInfo->toArray());
        $allInfoCollect = collect($allInfo);
        return view('admin.providers.edit', ['allInfoCollect' => $allInfoCollect, 'providerInfo' => $providerInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $providerInfo = provider::findOrFail($id);
        $profileInfo = profile::findOrFail($id);
        // dd($request->all());

        $newObjectForIdentifierImage = new UploadFile();
        $newNameForIdentifierImage = $newObjectForIdentifierImage->uploadOne($request, 'identifier_image', 'public/uploads/images/identifiers', $profileInfo->identifier_image, 'storage/uploads/images/identifiers/');
        if ($request->has('identifier_image_delete')) {
            $newNameForIdentifierImage = $newObjectForIdentifierImage->deleteOneFile('storage/uploads/images/identifiers/', $profileInfo->identifier_image);
        }
        $providerData = [
            'phone_number' => $request->phone_number,
            'account_status' => $request->account_status,
            'last_seen' => now()
        ];
        $providerSaved = $providerInfo->fill($providerData)->save();
        if($providerSaved){
            $profileData = [
                'first_name'        =>        $request->first_name,
                'last_name'         =>         $request->last_name,
                'username'          =>          $request->username,
                'email'             =>             $request->email,
                'gender'            =>            $request->gender,
                'protfolios'        =>        $request->protfolios,
                'pio'               =>               $request->pio,
                'identifier_type'   =>   $request->identifier_type,
                'identifier_number' => $request->identifier_number,
                'identifier_image'  =>  $newNameForIdentifierImage,
                'trusted'           =>           $request->trusted,
                'department_id'     =>     $request->department_id
            ];

            // dd($profileInfo->id);
            $profileSaved = $profileInfo->fill($profileData)->save();
            if($profileSaved){
                Session::flash('flash_massage_type');
                return redirect('cpanel/providers')->withFlashMassage('Provider Updated Successfully');
            } 
        }
        
        Session::flash('flash_massage_type', 4);
        return redirect('cpanel/providers')->withFlashMassage('Provider Dose\'t Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $providerForDelete = provider::findOrFail($id);
        $providerForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Deleted Successfully');
    }









    public function repport()
    {
        $providers = provider::orderBy('id', 'desc')->get();
        return view('admin.providers.repport', ['providers' => $providers]);
    }













    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDataAllProvidersJson()
    {
        Header("Content-Type: application/json"); 
        $providerInfo = provider::with('profile')->get();
        if($providerInfo == null){
            return "No Data To show...";
        }
        return $providerInfo;
    }



    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDataOneJson($id)
    {
        Header("Content-Type: application/json"); 
        $providerInfo = provider::with('profile')->find($id);
        if($providerInfo == null){
            return "No Data To show...";
        }
        return $providerInfo;
     }




    /**
     * @param
     */

    public function getDataLoginJson()
    {
        
        Header("Content-Type: application/json"); 
        $phone_number = $_POST['phone_number'];  
        $password = $_POST['password']; //"+2970062752979";// 
        $providerInfo = provider::with('profile')->with('profile.department')->where('account_status', 1)->where('phone_number', $phone_number)->first();
 
        if($providerInfo != null){
            if (Hash::check($password, $providerInfo->password)) {
                return $providerInfo;
            }
        }
        else{
            return "0";
        }
    }



    // /**
    //  * @param
    //  */

    // public function getDataLoginJson()
    // {
        
    //     Header("Content-Type: application/json"); 
    //     $phone_number = $_POST['phone_number']; //"+2970062752979";// 
    //     $password = $_POST['password']; //"+2970062752979";// 
    //     $providerInfo = provider::with('profile')->with('profile.department')->where('phone_number', $phone_number)
 
    //     // $pID = $providerInfo->id;
    //     // $department = department::where('id', 41)

    //     ->join('departments', 'departments.id', '=', 'provider.department_id')->first();

    //     if($providerInfo != null){
    //         if (Hash::check($password, $providerInfo->password)) {
    //             return $providerInfo;
    //             // return $pID;
    //         }
    //     }
    //     else{
    //         return "0";
    //     }
    // }






    /**
     * @param
     */
    public function setDataJson()
    {
        $code = []; 
        $provider = provider::where('phone_number', $_POST['phone_number'])->first();
        if($provider != null){
            $code = ["code" => "3"];
            return json_encode($code);
        }
        $providerData = [
            'phone_number'  =>    $_POST['phone_number'],
            'password'  =>           Hash::make($_POST['password']),
            'account_status' => 0,
            'last_seen' => now()
        ];
        
        $providerSaved = provider::create($providerData);
        if($providerSaved->id){
            $profileData = [
                'id'  => $providerSaved->id,
                'first_name'    =>      $_POST['first_name'],
                'last_name'     =>       $_POST['last_name'],
                'username' => "none",
                'email' => "none",
                'gender' => 0,
                'protfolios' => "none",
                'pio' => "none",
                'identifier_type' => 0,
                'identifier_number' => 0,
                'identifier_image' => "none",
                'trusted' => 0,
                'department_id' => 1,
            ];
            $createDone = profile::create($profileData);
            if($createDone == true){
                $code = ["code" => "1"];
                return json_encode($code);
            }else{
                $code = ["code" => "0"];
                return json_encode($code);
            }
            $profileId = $profile->create($profileData);
        }

    }



    



    /**
     * @param
     */

    public function getDataOffOnJson($onOff, $provider_id)
    {
        $providerModel =  provider::find($provider_id);
        $data = [
            'is_available'            => $onOff,
        ];
        $Seved = $providerModel->fill($data)->save();

        $message = ['Code' => "0"];
        if($Seved == true){
            $message = ['Code' => "1"];
        }
        $message =  json_encode($message);
        return $message;
    }



}
