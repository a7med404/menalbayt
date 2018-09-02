<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provider;
use \App\Models\job;
use \App\Models\profile;
use \App\Models\profilesJobs;
use App\Helper\UploadFile;
use \App\Http\Requests\ProviderRequest;
use \Session;


class ProviderController extends Controller
{
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
    public function store(Request $request, provider $provider, profile $profile)//, profilesJobs $profilesJobs)
    {
        // dd($request->all());
        $newObjectForImage = new UploadFile();
        $newNameForImage = $newObjectForImage->uploadOne($request, 'image', 'public/uploads/images/providers');
        $newNameForCoverImage = $newObjectForImage->uploadOne($request, 'cover_image', 'public/uploads/images/providers');
        $newNameForIdentifierImage = $newObjectForImage->uploadOne($request, 'identifier_image', 'public/uploads/images/identifiers');
        $providerData = [
            'phone_number' => $request->phone_number,
            'account_status' => $request->account_status,
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
                'image' => $newNameForImage,
                'cover_image' => $newNameForCoverImage,
                'pio' => $request->pio,
                'identifier_type' => $request->identifier_type,
                'identifier_number' => $request->identifier_number,
                'identifier_image' => $newNameForIdentifierImage,
                'trusted' => $request->trusted,
                'department_id' => $request->department_id,
            ];

            $profileId = $profile->create($profileData);
            /* if($profileId->id){
                foreach ($jobs as $job) {
                    $profilesJobs->create([
                        'profile_id'  => $providerId->id,
                        'job_id' => $request->job,
                    ]);
                }
                Session::flash('flash_massage_type', 1);
                return redirect('cpanel/providers')->withFlashMassage('Provider Added Successfully');
            } */
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

        $newObjectForImage = new UploadFile();
        $newNameForImage = $newObjectForImage->uploadOne($request, 'image', 'public/uploads/images/providers', $profileInfo->image, 'storage/uploads/images/providers/');
        if ($request->has('image_delete')) {
            $newNameForImage = $newObjectForImage->deleteOneFile('storage/uploads/images/providers/', $profileInfo->image);
        }
         
        $newObjectForCoverImage = new UploadFile();
        $newNameForCoverImage = $newObjectForCoverImage->uploadOne($request, 'cover_image', 'public/uploads/images/providers', $profileInfo->cover_image, 'storage/uploads/images/providers/');
        if ($request->has('cover_image_delete')) {
            $newNameForCoverImage = $newObjectForCoverImage->deleteOneFile('storage/uploads/images/providers/', $profileInfo->cover_image);
        }
       

        $newObjectForIdentifierImage = new UploadFile();
        $newNameForIdentifierImage = $newObjectForIdentifierImage->uploadOne($request, 'identifier_image', 'public/uploads/images/identifiers', $profileInfo->identifier_image, 'storage/uploads/images/identifiers/');
        if ($request->has('identifier_image_delete')) {
            $newNameForIdentifierImage = $newObjectForIdentifierImage->deleteOneFile('storage/uploads/images/identifiers/', $profileInfo->identifier_image);
        }
        // dd($newNameForImage, $newNameForCoverImage, $newNameForIdentifierImage);
        
        $providerData = [
            'phone_number' => $request->phone_number,
            'account_status' => $request->account_status,
            'last_seen' => now()
        ];
        $providerSaved = $providerInfo->fill($providerData)->save();
        if($providerSaved){
            $profileData = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'gender' => $request->gender,
                'image' => $newNameForImage,
                'cover_image' => $newNameForCoverImage,
                'pio' => $request->pio,
                'identifier_type' => $request->identifier_type,
                'identifier_number' => $request->identifier_number,
                'identifier_image' => $newNameForIdentifierImage,
                'trusted' => $request->trusted,
                'department_id' => $request->department_id,
            ];

            // dd($profileInfo->id);
            $profileSaved = $profileInfo->fill($profileData)->save();
            if($profileSaved){
                /*
                foreach ($jobs as $job) {
                    $profilesJobs->create([
                        'profile_id'  => $providerId->id,
                        'job_id' => $request->job,
                    ]);
                }
            }*/

                
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
        //
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
        $providerInfo = provider::with('profile')->with('profile.jobs')->get();
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
    public function getDataOneJson()
    {
        Header("Content-Type: application/json"); 
        $id = $_POST['id'];
        $providerInfo = provider::with('profile')->with('profile.jobs')->find($id);
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
        $phone_number = $_POST['phone_number']; //"+2970062752979";// 
        $providerInfo = provider::with('profile')->with('profile.jobs')->where('phone_number', $phone_number)->first();
        if($providerInfo == null){
            return "0";
        }
        return $providerInfo;
        // $profileInfo = profile::where('id', $providerInfo->id)->first();//findOrFail($providerInfo->id);
        // // $jobsInfo = job::where('profile_id', $providerInfo->id)->get(); //::findOrFail($profileInfo);
        // $jobsInfo = profilesJobs::where('profile_id', $providerInfo->id)
        // ->join("jobs", 'profile_job.job_id', 'jobs.id')
        // ->select('profile_job.job_id', 'jobs.name')->get();
        // $allInfo = array_merge($providerInfo->toArray(), $profileInfo->toArray(), $jobsInfo->toArray());
        
        // $allInfoCollect = collect($allInfo);
        // dd($allInfo);
        // $jsonArray[] = $allInfoCollect->toJson();
        // return $allInfo;
        // if($allInfo == null){
        //     return "0";
        // }
    }






    /**
     * @param
     */

    public function getDataForProviderJobsJson()
    {
        Header("Content-Type: application/json"); 
        $phone_number = $_POST['phone_number']; //"+2970062752979";
        $providerInfo = provider::with('profile')->with('profile.jobs')->where('phone_number', $phone_number)->first();
        if($providerInfo == null){
            return "0";
        }
        return $providerInfo;
    }
}
