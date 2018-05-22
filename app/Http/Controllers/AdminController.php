<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\customer;
use \App\Models\provider;

class AdminController extends Controller
{
    public function index(customer $customer){
        $customerFemale = $customer->where('gender', '0')->orderBy('id', 'desc')->get();
        $customerMale = $customer->where('gender', '1')->orderBy('id', 'desc')->get();
        $topProviders = provider::orderBy('id', 'desc')->limit(5)->get();
        // dd($topProviders);
        return view('admin.home.index', ['topProviders' => $topProviders, 'customerFemale' => $customerFemale, 'customerMale' => $customerMale]);
    }
}
 