<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    #  id 	first_name 	last_name 	username 	email 	address_longitude 	address_latitude 	image 	
    #  cover_image 	gender 	pio 	identifier_number 	identifier_type 	identifier_image 	trusted 	department_id
    protected $table = 'profiles';
    public $timestamps = false;
    protected $fillable = ['id', 'first_name', 'last_name', 'username', 'email', 'address_longitude', 'address_latitude', 'image', 'cover_image', 'gender', 'pio', 'identifier_number', 'identifier_type', 'identifier_image', 'trusted', 'department_id'];

    public function provider(){
        return $this->BelongsTo('App\Models\provider');
    }

    public function protfolio(){
        return $this->hasOne('App\Models\protfolio');
    } 

    public function jobs(){
        return $this->BelongsToMany('App\Models\job', 'profile_job');
    } 

    public function department(){
        return $this->BelongsTo('App\Models\department');
    }
    
}
