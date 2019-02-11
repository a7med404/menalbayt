<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    # id 	first_name 	last_name 	phone_number 	image 	gender 	last_seen 
    protected $table = "customers";
    protected $fillable = [
        'id', 'first_name', 'last_name', 'phone_number', 'image', 'gender', 'last_seen', 'password'
    ]; 

    public function offers(){
        return $this->hasMany('App\Models\offer');
    }
}
