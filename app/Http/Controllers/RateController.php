<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\UploadFile;
use \App\Models\rate;


class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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






    /**rate
     * @param
     */

    public function getDataJson(rate $rate)
    {
        $provider_id = $_GET['provider_id'];
        header('Content-Type: application/josn');
        $rate = rate::where('provider_id', $provider_id)->get();

        return $rate;
    }


    /**
     * @param
     */

    public function setDataJson(rate $rate)
    {
        # value	customer_id	provider_id
        $data = [
            'customer_id'   => $_POST['customer_id'],
            'provider_id'   => $_POST['provider_id'],
            'value'         => $_POST['value'],
        ]; 
        $rateDone =  $rate->updateOrCreate($data);
        return $rateDone == true ? "1" : "0";
    }
}
