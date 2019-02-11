<?php
function changeLocale()
{
	// if(\Session::has('locale'))
    // {
    //    \Session::put('locale', \App::getLocale());
    // }


    // App::setLocale($locale);
    // $locale = App::getLocale();

    // if (App::isLocale('en')) {
    //     if(\Session::get('locale') == 'en'){
    //         \Session::put('locale', 'ar');
    //     }else {
    //         \Session::put('locale', 'en');
    //     }
    // }
    if (App::isLocale('en')) {
        App::setLocale('ar');
         \Session::put('locale', 'ar');
    }else {
    return "aaaaaaaaaaaa";
        App::setLocale('en');
         \Session::put('locale', 'en');
    }

    // $d = 'en';
    // if(isset($_SESSION["defalut-lang"]) && $_SESSION['defalut-lang'] == "$d"){
    //     $_SESSION['defalut-lang'] = 'ar'; 
    // }else {
    //     $_SESSION['defalut-lang'] = 'en'; 
    // }


    return \Session::get('locale');
    // Session::set('locale', 'en');
	// return Redirect::back();

    // app()->setLocale(\Session::get('locale'));



    // return $next($request);
}

function maleOrfemale(){
    return [
        '0' => 'Female',
        '1' => 'Male',
    ];
}
function toggleOneZeroClass(){
    return [
        '0' => 'label label-default',
        '1' => 'label label-success',
    ];
}
function status(){
    return [
        '0' => 'Disable',
        '1' => 'Enable',
    ];
}
function trusted(){
    return [
        '0' => 'Not Trusted',
        '1' => 'Trusted',
    ];
}
function toggleTrusted(){
    return [
        '0' => 'label label-danger',
        '1' => 'label label-success',
    ];
}
function level(){
    return [
        '1' => 'Expectant',
        '2' => 'Acceped/Rejected',
        '3' => 'Job Ended',
        '4' => 'Job Done',
    ];
}

function identifierType(){
    return [
        '1' => 'Public Card',
        '2' => 'Passprot',
        '3' => 'National Number',
        '4' => 'Diver License',
    ];
}
function toggleLevelClass(){
    return [
        '1' => 'label label-default',
        '2' => 'label label-info',
        '3' => 'label label-primary',
        '4' => 'label label-success',
    ];
}
function getSelect($tableName){

    switch ($tableName) {
        case 'department':
            $list = \DB::table('departments')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        
        case 'job':
            $list = \DB::table('jobs')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        default:
            $list = \App\Models\department::where('status', 1)->get();
            break;
    }
    // $arrayList = [];
    // foreach ($list->toArray() as $key => $value) {
    //     $arrayList[$key] = $value;
    // }
    // return $arrayList;
}

function getDefaultImage($imageName){
    
    return $imageName == null ? "default_customer_image.png" : "$imageName";
}
function getCustomerImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/customers/'.$imageName))){
            return asset('storage/uploads/images/customers/'.$imageName);
        }
    return asset('storage/uploads/images/customers/default_customer_image.png');
    }
}
function getDepartmentImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/departments/'.$imageName))){
            return asset('storage/uploads/images/departments/'.$imageName);
        }
    return asset('storage/uploads/images/departments/default_department_image.png');
    }
}
function getJobImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/jobs/'.$imageName))){
            return asset('storage/uploads/images/jobs/'.$imageName);
        }
    return asset('storage/uploads/images/jobs/default_job_image.png');
    }
}
function getOfferImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/offers/'.$imageName))){
            return asset('storage/uploads/images/offers/'.$imageName);
        }
    return asset('storage/uploads/images/offers/default_offer_image.png');
    }
}
function getProviderImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/providers/'.$imageName))){
            return asset('storage/uploads/images/providers/'.$imageName);
        }
    return asset('storage/uploads/images/providers/default_provider_image.png');
    }
}


function getProviderIdentifierImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/identifiers/'.$imageName))){
            return asset('storage/uploads/images/identifiers/'.$imageName);
        }
    return asset('storage/uploads/images/providers/default_provider_image.png');
    }
}


function customDate($date){
    return $date;
}


function getBalance($max_price, $min_price){
    return (($max_price + $min_price)/2)/10;
}
function getOfferPrice($max_price, $min_price){
    return ($max_price + $min_price)/2;
}



/**
 * To set null when delete
 */