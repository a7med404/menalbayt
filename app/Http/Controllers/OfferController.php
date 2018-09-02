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
use \Session;

class OfferController extends Controller
{


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
            'longitude'        => 22213.222,
            'latitude'         => 342.4211111,
            'description'      => $request->description,
            'status'           => 1,
            'level'            => 1,
            'department_id'    => 1,
            'customer_id'      => 1,
        ];
        $offerGetId = $offer->create($data);
        $uploadObject = new UploadFile();
        $names = $uploadObject->uploadMulti($request, 'image', 'public/uploads/images/offers');

        if ($names) {
            foreach ($names as $name) {
                $offersImages->create([
                    'offer_id' => $offerGetId->id,
                    'image' =>  $name,
                ]);
            }
        }
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
            'longitude'        => 22213.222,
            'latitude'         => 342.4211111,
            'description'      => $request->description,
            'status'           => 1,
        ];
        $offerSeved = $offerModel->fill($data)->save();
        if($offerSeved){
            $uploadObject = new UploadFile();
            $names = $uploadObject->uploadMulti($request, 'image', 'public/uploads/images/offers');

            if ($names) {
                foreach ($names as $name) {
                    offersImages::create([
                        'offer_id' => $offerModel->id,
                        'image' =>  $name,
                    ]);
                }
            }
            if($request->has('delete_image')){
                $offersImages = offersImages::where('offer_id', $id)->findOrFail($request->delete_image);
                foreach ($offersImages as $image) {
                    $image->delete();
                }
                // $offersImages->delete(array_pluck($offersImages, 'image'));
                $uploadObject->deleteMultiFile('storage/images/offers/', array_pluck($offersImages, 'image'));
                
            }

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
        //
    }











    /**
     * @param
     */

    public function getDataOneJson()
    {
        Header("Content-Type: application/json"); 
        $id = $_POST['id'];
        $offer = offer::with('department')->with('jobs')->find($id);
        if($offer == null){
            return "No Data To show...";
        }
        return $offer;
    }



    /**
     * @param
     */

    public function getDataOfferNotApprovedForCustomerJson()
    {
        $customer_id = $_POST['customer_id'];
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('jobs')->where('customer_id', $customer_id)->where('level', 1)->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }




    
    /**
     * @param
     */

    public function getDataOfferApprovedForCustomerJson()
    {
        $customer_id = $_POST['customer_id'];
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('jobs')->where('customer_id', $customer_id)->where('level', '!=', 1)->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }



        
    /**
     * @param
     */

    public function getDataOfferProviderApprovedForCustomerJson()
    {
        $customer_id = $_POST['customer_id'];
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('provider.profile')->with('jobs')->where('customer_id', $customer_id)->whereNotNull('provider_id')->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }


        
    /**
     * @param
     */

    public function getDataOfferForProviderJson()
    {
        $department_id = $_POST['department_id'];
        header('Content-Type: application/josn');
        $offer = offer::with('department')->with('customer')->with('jobs')->where('provider_id', null)->where('department_id', $department_id)->get();
        if($offer == "[]"){
            return "No Data To show...";
        }
        return $offer;
    }







     /**
     * @param
     */
/*
    public function getDataJobsOfTheOfferJson()
    {
        $id = 1; # $_GET['id'] #offer ID
        header('Content-Type: application/josn');
        $jobs = offersjob::where('offer_id', $id)
        ->join("jobs", 'offer_job.job_id', 'jobs.id')
        // ->join("offer_job", 'offers.id', 'offer_job.offer_id')

        // ->join("customers", 'offers.customer_id', 'customers.id')
        ->select('offer_job.job_id', 'jobs.name')->get();
        // dd($offer);
        if($jobs == "[]"){
            return "No Data To show...";
        }
        return $jobs;
    }
 */








    /**
     * @param
     */

    public function setDataNewOfferJson()
    { 
        $budget = explode('-', $_POST['budget'], 2);
        $data = [
            'title'            => $_POST['title'],
            'offer_start_date' => $_POST['offer_start_date'],
            'offer_end_date'   => $_POST['offer_end_date'],
            'min_price'        => $budget[0],
            'max_price'        => $budget[1],
            'longitude'        => $_POST['longitude'],
            'latitude'         => $_POST['latitude'],
            'description'      => $_POST['description'],
            'status'           => 1,
            'level'            => 1,
            'department_id'    => $_POST['department_id'],
            'customer_id'      => $_POST['customer_id'],
        ];
        $offer = offer::create($data);
        if ($offer) {
            $offerDone = $offer->jobs()->attach($_POST['jobs']);
            if($offerDone){
                return "1";
            }
        }
        return "0";
    }



    /**
     * @param
     */

    public function setProviderIdDataJson()
    { 
        $offerModel =  offer::findOrFail($_POST['id']);
        $providerModel =  provider::findOrFail($_POST['provider_id']);
        $offerModel->provider_id = $providerModel->id;
        $offerModel->level = $_POST['level'];
        $offerSeved = $offerModel->save();
        if($offerSeved){
            return "1";
        }
        return "0";
    }

    /**
     * @param
     */

    public function setOfferLevelDataJson()
    { 
        $offerModel =  offer::findOrFail($_POST['id']);
        $offerSeved = $offerModel->fill(['level' => $_POST['level']])->save();
        if($offerSeved){
            return "1";
        }
        return "0";
    }
}
