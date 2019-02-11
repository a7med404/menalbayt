<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\UploadFile;
use \App\Models\rate;


class RateController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'setDataJson', 
            'getDataJson'
            ]]);
    }


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

    public function getDataJson()
    {
        $jsonValue = [];
        $provider_id = $_POST['provider_id'];
        header('Content-Type: application/josn');
        $rate2  = rate::select('value')->where('provider_id', $provider_id)->where('value', 2) ->get();
        $rate4  = rate::select('value')->where('provider_id', $provider_id)->where('value', 4) ->get();
        $rate6  = rate::select('value')->where('provider_id', $provider_id)->where('value', 6) ->get();
        $rate8  = rate::select('value')->where('provider_id', $provider_id)->where('value', 8) ->get();
        $rate10 = rate::select('value')->where('provider_id', $provider_id)->where('value', 10)->get();

        $rate2 =   ($rate2->count()*10)/5;
        $rate4 =   ($rate4->count()*10)/4;
        $rate6 =   ($rate6->count()*10)/3;
        $rate8 =   ($rate8->count()*10)/2;
        $rate10 =  ($rate10->count()*10)/1;


        $jsonValue['provider_value'] = ($rate2 + $rate4 + $rate6 + $rate8 + $rate10)/5;
        
        return json_encode($jsonValue);
    }


    /**
     * @param
     */

    public function setDataJson()
    {
        # value	customer_id	provider_id
        $data = [
            'customer_id'   => $_POST['customer_id'],
            'provider_id'   => $_POST['provider_id'],
            'value'         => $_POST['value'],
        ]; 
        $rateDone =  rate::updateOrCreate($data);
        return $rateDone == true ? "1" : "0";
    }
}
