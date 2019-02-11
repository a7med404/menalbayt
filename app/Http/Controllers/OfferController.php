<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\OfferRequest;;
use \App\Models\offer;
use \App\Models\job;
use \App\Models\provider;
use \App\Models\offersjob;
use App\Helper\UploadFile;
use \App\Models\offersImages;
use \App\Models\comment;
use \Session;

class OfferController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'getDataOneJson', 
            'getDataOfferDoneForCustomerJson', 
            'getDataOfferApprovedForCustomerJson', 
            'getAcceptProviderJson',
            'getCommentsOfferJson',
            'getDataOfferProvidersApprovedForCustomerJson',
            'getDataNewRequestForProviderJson',
            'getDataHasWorkForProviderJson',
            'setDataNewOfferJson',
            'setProviderIdDataJson',
            'setOfferLevelDataJson',
            'getDataDoneForProviderJson'
            ]]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = offer::orderBy('id', 'desc')->get();
        return view('admin.offers.index', ['offers' => $offers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request, offer $offer, offersImages $offersImages)
    {
        $budget = explode(';', $request->budget, 2);
        $dateTime = explode(' - ', $request->dateTime, 2);
        $data = [
            'title'            => $request->title,
            'offer_start_date' => $dateTime[0],
            'offer_end_date'   => $dateTime[1],
            'min_price'        => $budget[0],
            'max_price'        => $budget[1],
            'description'      => $request->description, 
            'status'           => 1,
            'level'            => 1,
            'department_id'    => 1,
            'customer_id'      => 1,
        ];
        $offerGetId = $offer->create($data);

        Session::flash('flash_massage_type');
        return redirect('cpanel/offers')->withFlashMassage('Offer Added Susscefully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offerInfo = offer::findOrFail($id);
        return view('admin.offers.show', ['offerInfo' => $offerInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offerInfo = offer::findOrFail($id);
        return view('admin.offers.edit', ['offerInfo' => $offerInfo]);
    }

    /*      $jobs = offersjob::where('offer_id', $id)
        ->join("jobs", 'offer_job.job_id', 'jobs.id')
        // ->join("offer_job", 'offers.id', 'offer_job.offer_id')

        // ->join("customers", 'offers.customer_id', 'customers.id')
        ->select('offer_job.job_id', 'jobs.name')->get();
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, OfferRequest $request)
    {
        $offerModel =  offer::findOrFail($id);
        $budget = explode(';', $request->budget, 2);
        $dateTime = explode(' - ', $request->dateTime, 2);
        $data = [
            'title'            => $request->title,
            'offer_start_date' => $dateTime[0],
            'offer_end_date'   => $dateTime[1],
            'min_price'        => $budget[0],
            'max_price'        => $budget[1],
            'description'      => $request->description,
            'status'           => 1,
        ];
        $offerSeved = $offerModel->fill($data)->save();
        if($offerSeved){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('Offer Updated Susscefully');
        }else {
            Session::flash('flash_massage_type', 3);
            return redirect()->back()->withFlashMassage('Offer Update Fialuer');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offerForDelete = offer::findOrFail($id);
        $offerForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Offer Deleted Successfully');
    }





    public function repport()
    {
        $offers = offer::orderBy('id', 'desc')->get();
        return view('admin.offers.repport', ['offers' => $offers]);
    }









    /**
     * @param
     */

    public function getDataOneJson()
    {
        Header("Content-Type: application/json"); 
        $id = $_POST['id'];
        $offer = offer::with('department')->where('status', 1)->find($id);
        if($offer == null){
            return "No Data To show...";
        }
        return $offer;
    }







    /**
     * @param
     */

    public function getAcceptProviderJson($offer_id, $provider_id)
    {
        $offerModel =  offer::find($offer_id);
        $data = [
            'provider_id'            => $provider_id,
            'level'            => 2,
        ];
        $offerSeved = $offerModel->fill($data)->save();

        $message = ['Code' => "0"];
        if($offerSeved == true){
            $message = ['Code' => "1"];
        }
        $message =  json_encode($message);

        return $offerModel;
        return $message;
    }
    
    
    /**
     * @param
     */

    public function getDataOfferApprovedForCustomerJson($id)
    {
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('customer')->where('customer_id', $id)->orderBy('id', 'DESC')->where('level',  '<', 4)->where('status', 1)->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }




    /**
     * @param
     */

    public function getDataOfferDoneForCustomerJson($id)
    {
        $customer_id = $id;
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('customer')->where('customer_id', $customer_id)->orderBy('id', 'DESC')->where('level', 4)->where('status', 1)->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }





    /**
     * @param
     */

    public function getCommentsOfferJson($id)
    {
        $offer_id = $id;
        header('Content-Type: application/josn');
        $offer = comment::where('offer_id', $offer_id)->with('profile.department')->with('provider')->orderBy('id', 'DESC')->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }



        
    /**
     * @param
     */

    public function getDataOfferProvidersApprovedForCustomerJson($id)
    {
        header('Content-Type: application/josn');
        $offer = offer::with('department')->where('customer_id', $id)->where('level', 1)->orderBy('id', 'DESC')->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }


        

    
    /**
     * @param
     */

    public function getDataNewRequestForProviderJson($id)
    {
        $department_id = $id;
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('customer')->where('provider_id', null)->where('department_id', $department_id)->where('level', 1)->orderBy('id', 'DESC')->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }



                
    /**
     * @param
     */

    public function getDataHasWorkForProviderJson($id)
    {
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('customer')->where('provider_id', $id)->where('level', 2)->orderBy('id', 'DESC')->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }




        
    /**
     * @param
     */

    public function getDataDoneForProviderJson($id)
    {
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('customer')->where('provider_id', $id)->where('level', 4)->orderBy('id', 'DESC')->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }




    

    /**
     * @param
     */

    public function setDataNewOfferJson()
    { 
        $budget = explode('-', $_POST['budget'], 2);
        // $budget = [];
        // if($_POST['budget']){
        // }else{
        //     $budget[0] = "Open Budget";
        //     $budget[1] = "Open Budget";
        // }
        $data = [
            'title'            => $_POST['title'],
            'offer_start_date' => $_POST['offer_start_date'],
            'offer_end_date'   => $_POST['offer_end_date'],
            'min_price'        => $budget[0],
            'max_price'        => $budget[1],
            'description'      => $_POST['description'],
            'status'           => 1,
            'level'            => 1,
            'department_id'    => $_POST['department_id'],
            'customer_id'      => $_POST['customer_id'],
        ];
        $code = [];
        $offer = offer::create($data);
        if($offer == true){
            $code = ["code" => "1"];
            return json_encode($code);
        }else{
            $code = ["code" => "0"];
            return json_encode($code);
        }
    }



    // /**
    //  * @param
    //  */

    // public function setProviderIdDataJson()
    // { 
    //     $offerModel =  offer::findOrFail($_POST['offer_id']);
    //     $providerModel =  provider::findOrFail($_POST['provider_id']);
    //     $offerModel->provider_id = $providerModel->id;
    //     $offerModel->level = $_POST['level'];
    //     $offerSeved = $offerModel->save();
    //     $code = [];
    //     if($offerSeved == true){
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

    public function setOfferLevelDataJson($offer_id, $level)
    { 
        $offerModel =  offer::findOrFail($offer_id);
        $offerSeved = $offerModel->fill(['level' => $level])->save();
        $code = [];
        if($offerSeved == true){
            $code = ["code" => "1"];
            return json_encode($code);
        }else{
            $code = ["code" => "0"];
            return json_encode($code);
        }
    }
}
