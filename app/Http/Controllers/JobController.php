<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\job;
use \App\Models\offersjob;
use App\Helper\UploadFile;
use \App\Http\Requests\jobRequest;
use \Session;

class JobController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = job::orderBy('id', 'desc')->get();
        return view('admin.jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newNameForImage = new UploadFile();
        $newNameForImage = $newNameForImage->uploadOne($request, 'image', 'public/uploads/images/jobs');

        $data = [
            'name'          => $request->name,
            'description'   => $request->description,
            'status'        => $request->status,
            'image'         => $newNameForImage,
        ];
        $job->create($data);
        Session::flash('flash_massage_type', 1);
        return redirect('cpanel/jobs')->withFlashMassage('Job Addjobed Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobInfo = job::findOrFail($id);
        return view('admin.jobs.show', ['jobInfo' => $jobInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobInfo = job::findOrFail($id);
        return view('admin.jobs.edit', ['jobInfo' => $jobInfo]);
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
        $jobInfo = job::findOrFail($id);
        $newObjectForImage = new UploadFile();
        if ($request->has('delete_image')) {
            $newNameForImage = $newObjectForImage->deleteOneFile('storage/uploads/images/jobs/', $jobInfo->image);
        }
        $newNameForImage = $newObjectForImage->uploadOne($request, 'image', 'public/uploads/images/jobs/', $jobInfo->image, 'storage/uploads/images/jobs/');
        
        $data = [
            'name'          => $request->name,
            'description'   => $request->description,
            'status'        => $request->status,
            'image'         => $newNameForImage,
        ];
        $jobInfo->fill($data)->save();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Job Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobForjobDelete = Job::findOrFail($id);
        $jobForjobDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('job Deleted Susscefully');
    }




    /**
     * @param
     */

    public function getDataAllJobsJson()
    { 
        header('Content-Type: application/josn');
        $jobs = job::orderBy('id', 'desc')->select('jobs.id', 'jobs.name')->get();
        if($jobs == "[]"){
            return "No Data To show...";
        }
        return response()->json($jobs);
    }




    

}
