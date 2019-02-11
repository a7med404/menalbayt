<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\customer;
use \App\Models\provider;
use \App\Models\department;
use \App\Models\offer;
use \DB;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(department $department, customer $customer, provider $provider, offer $offer){
        $customerGander = DB::table('customers')
            ->join('offers', 'customers.id', '=', 'offers.customer_id')
            ->get();
        // dd($customerGander);
        // $dd = $customer->orderBy('id', 'desc')->get();
        // dd($dd->offer);


        // $offerAll2 = $offer->with('departments')->groupBy('department_id')->get();
        // $offerDept = $department->groupBy('department_id')->get();
        // $offerAll = DB::table('offers')->groupBy('status')->get();//->take(5)->max('max_price');//->get();
        $offerAll = DB::table('offers')
                     ->select(DB::raw('count(*) as offer_count, department_id'))
                    //  ->join('departments', 'departments.id', '=', 'offers.department_id')
                    //  ->whereBetween('department_id', '<>', 1)
                     ->groupBy('department_id')
                     ->orderBy('offer_count', 'desc')
                     //->join('departments', 'departments.id', '=', 'offers.department_id')
                     ->get();
                    // $topdepartments = department::whereIn('id', $offerAll->toArray())->limit(5)->get();

        // $departmentIds = [];
        // $departmentOfferNumber = [];
        // foreach($offerAll->toArray() as $offer){
        //     $departmentIds[] = $offer->department_id;
        //     $departmentOfferNumber[] = $offer->offer_count;
        // }
        // dd($departmentOfferNumber, $departmentIds);

        $offernNew = $offer->where('level', '!=', 4)->get();
        $offernDone = $offer->where('level',  4)->get();

        $offernDoneMonth1 = DB::table('offers')->whereMonth('created_at', '1')->where('level', '=', 4)->count();
        $offernDoneMonth2 = DB::table('offers')->whereMonth('created_at', '2')->where('level', '=', 4)->count();
        $offernDoneMonth3 = DB::table('offers')->whereMonth('created_at', '3')->where('level', '=', 4)->count();
        $offernDoneMonth4 = DB::table('offers')->whereMonth('created_at', '4')->where('level', '=', 4)->count();
        $offernDoneMonth5 = DB::table('offers')->whereMonth('created_at', '5')->where('level', '=', 4)->count();
        $offernDoneMonth6 = DB::table('offers')->whereMonth('created_at', '6')->where('level', '=', 4)->count();
        $offernDoneMonth7 = DB::table('offers')->whereMonth('created_at', '7')->where('level', '=', 4)->count();
        $offernDoneMonth8 = DB::table('offers')->whereMonth('created_at', '8')->where('level', '=', 4)->count();
        $offernDoneMonth9 = DB::table('offers')->whereMonth('created_at', '9')->where('level', '=', 4)->count();
        $offernDoneMonth10 = DB::table('offers')->whereMonth('created_at', '10')->where('level', '=', 4)->count();
        $offernDoneMonth11 = DB::table('offers')->whereMonth('created_at', '11')->where('level', '=', 4)->count();
        $offernDoneMonth12 = DB::table('offers')->whereMonth('created_at', '12')->where('level', '=', 4)->count();
        $offerDoneOfTheMonth = [$offernDoneMonth1, $offernDoneMonth2, $offernDoneMonth3, $offernDoneMonth4, $offernDoneMonth5, $offernDoneMonth6, $offernDoneMonth7, $offernDoneMonth8, $offernDoneMonth9, $offernDoneMonth10, $offernDoneMonth11, $offernDoneMonth12];

        $offernNewMonth1 = DB::table('offers')->whereMonth('created_at', '1')->where('level', '!=', 4)->count();
        $offernNewMonth2 = DB::table('offers')->whereMonth('created_at', '2')->where('level', '!=', 4)->count();
        $offernNewMonth3 = DB::table('offers')->whereMonth('created_at', '3')->where('level', '!=', 4)->count();
        $offernNewMonth4 = DB::table('offers')->whereMonth('created_at', '4')->where('level', '!=', 4)->count();
        $offernNewMonth5 = DB::table('offers')->whereMonth('created_at', '5')->where('level', '!=', 4)->count();
        $offernNewMonth6 = DB::table('offers')->whereMonth('created_at', '6')->where('level', '!=', 4)->count();
        $offernNewMonth7 = DB::table('offers')->whereMonth('created_at', '7')->where('level', '!=', 4)->count();
        $offernNewMonth8 = DB::table('offers')->whereMonth('created_at', '8')->where('level', '!=', 4)->count();
        $offernNewMonth9 = DB::table('offers')->whereMonth('created_at', '9')->where('level', '!=', 4)->count();
        $offernNewMonth10 = DB::table('offers')->whereMonth('created_at', '10')->where('level', '!=', 4)->count();
        $offernNewMonth11 = DB::table('offers')->whereMonth('created_at', '11')->where('level', '!=', 4)->count();
        $offernNewMonth12 = DB::table('offers')->whereMonth('created_at', '12')->where('level', '!=', 4)->count();
        $offerNewOfTheMonth = [$offernNewMonth1, $offernNewMonth2, $offernNewMonth3, $offernNewMonth4, $offernNewMonth5, $offernNewMonth6, $offernNewMonth7, $offernNewMonth8, $offernNewMonth9, $offernNewMonth10, $offernNewMonth11, $offernNewMonth12];



        $customerFemale = $customer->where('gender', '0')->orderBy('id', 'desc')->get();
        $customerMale = $customer->where('gender', '1')->orderBy('id', 'desc')->get();

        $totalProviders = $provider->where('account_status', '1')->get();
        $newProviders = $provider->where('account_status', '0')->get();
        $topProviders = $provider->orderBy('id', 'desc')->limit(5)->get();
        $topCustomers = $customer->orderBy('id', 'desc')->limit(5)->get();
        $topDepartments = $department->orderBy('id', 'desc')->limit(5)->get();

        $data = [
            'topProviders' => $topProviders, 
            'topCustomers' => $topCustomers, 
            'topDepartments' => $topDepartments, 
            'customerFemale' => $customerFemale, 
            'customerMale' => $customerMale,
            'offernNew' => $offernNew,
            'offernDone' => $offernDone,
            'totalProviders' => $totalProviders,
            'newProviders' => $newProviders,


            'offerDoneOfTheMonth' => $offerDoneOfTheMonth,
            'offerNewOfTheMonth' => $offerNewOfTheMonth,
            // 'departmentOfferNumber' => $departmentOfferNumber,
        ];
        // dd($topProviders);
        return view('admin.home.index', $data);
    }



}
 