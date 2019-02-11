<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\department;
use App\Helper\UploadFile;
use \App\Models\provider;
use \App\Models\profile;
use \App\Http\Requests\DepartmentRequest;;
use \Session;

class DepartmentController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['getDataAllDepartmentsJson', 'getProviderDept']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = department::orderBy('id', 'desc')->get();
        return view('admin.departments.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request, department $department)
    {
        $newNameForImage = new UploadFile();
        $newNameForImage = $newNameForImage->uploadOne($request, 'image', 'public/uploads/images/departments');

        $data = [
            'name'   => $request->name,
            'description'   => $request->description,
            'status'        => $request->status,
            'image'         => $newNameForImage,
        ];
        $department->create($data);
        Session::flash('flash_massage_type', 1);
        return redirect('cpanel/departments')->withFlashMassage('Department Added Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departmentInfo = department::findOrFail($id);
        return view('admin.departments.show', ['departmentInfo' => $departmentInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departmentInfo = department::findOrFail($id);
        return view('admin.departments.edit', ['departmentInfo' => $departmentInfo]);
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
        $departmentInfo = department::findOrFail($id);
        $newObjectForImage = new UploadFile();
        if ($request->has('delete_image')) {
            $newNameForImage = $newObjectForImage->deleteOneFile('storage/uploads/images/departments/', $departmentInfo->image);
        }
        $newNameForImage = $newObjectForImage->uploadOne($request, 'image', 'public/uploads/images/departments/', $departmentInfo->image, 'storage/uploads/images/departments/');
        
        $data = [
            'name'          => $request->name,
            'description'   => $request->description,
            'status'        => $request->status,
            'image'         => $newNameForImage,
        ];
        $departmentInfo->fill($data)->save();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Department Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $departmentForDelete = department::findOrFail($id);
        $departmentForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Department Deleted Susscefully');    
    }



    public function repport()
    {
        $departments = department::orderBy('id', 'desc')->get();
        return view('admin.departments.repport', ['departments' => $departments]);
    }











    /**
     * @param
     */

    public function getDataAllDepartmentsJson()
    { 
        header('Content-Type: application/josn');
        $departments = department::orderBy('id', 'desc')->select('departments.id', 'departments.name')->get();
        if($departments == "[]"){
            return "No Data To show...";
        }
        return $departments;
    }



    /**
     * @param
     */

    public function getProviderDept()
    { 
        $id = $_POST['provider_id'];
        header('Content-Type: application/josn');
        $departments = profile::where('id', $id)->first();
        if($departments == "[]"){
            return "No Data To show...";
        }
        return $departments; 
    }

}


