<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\customer;
use \App\Models\provider;
use \App\Models\offer;
use \DB;

class AdminController extends Controller
{
    public function index(customer $customer, offer $offer){
        $customerGander = DB::table('customers')
            ->join('offers', 'customers.id', '=', 'offers.customer_id')
            ->get();
        // dd($customerGander);
        // $dd = $customer->orderBy('id', 'desc')->get();
        // dd($dd->offer);


        // $offerAll = $offer->groupBy('provider_id')->get();
        // $offerAll = DB::table('offers')->groupBy('status')->get();//->take(5)->max('max_price');//->get();
        $offerAll = DB::table('offers')
                     ->select(DB::raw('count(*) as offer_count, provider_id'))
                     ->join('providers', 'providers.id', '=', 'offers.provider_id')
                    //  ->whereBetween('provider_id', '<>', 1)
                     ->groupBy('provider_id')
                     ->orderBy('offer_count', 'desc')
                     //->join('providers', 'providers.id', '=', 'offers.provider_id')
                     ->limit(5)->get();
                    // $topProviders = provider::whereIn('id', $offerAll->toArray())->limit(5)->get();

        // dd($offerAll);

        $offernNew = $offer->where('level', '!=', 4)->get();
        $offernDone = $offer->where('level',  4)->get();
        // dd($offernNew, $offernDone);

        $customerFemale = $customer->where('gender', '0')->orderBy('id', 'desc')->get();
        $customerMale = $customer->where('gender', '1')->orderBy('id', 'desc')->get();
        $topProviders = provider::orderBy('id', 'desc')->limit(5)->get();

        $data = [
            'topProviders' => $topProviders, 
            'customerFemale' => $customerFemale, 
            'customerMale' => $customerMale,
            'offernNew' => $offernNew,
            'offernDone' => $offernDone,
        ];
        // dd($topProviders);
        return view('admin.home.index', $data);
    }
}
 