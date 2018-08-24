<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\UploadFile;
use \App\Models\customer;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = customer::orderBy('id', 'desc')->get();
        // header('Content-Type: application/json');
        // $data =  json_decode($customers, JSON_PRETTY_PRINT);
        // return $data;

        return view('test');
        
        
    }
    public function data()
    {
        // return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request->image);
        $object = new UploadFile();
        // dd($object->deleteFile('image_jpeg_1526203764_hav_u3qk7mhj.vwzaude.jpg', 'storage/uploads/'));
        // dd($object->uploadMulti($request, 'image',  'public/uploads/'));
        $a  = [
            0 => "image_jpeg_1526219968_eoydsnkhsnvrnkyq0zgw.jpg",
            1 => "image_png_1526219968_f01lvek6yh8qgg_eow9k.png"        
        ];
        $object->deleteMultiFile('storage/uploads/', $a);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
