<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    # 	id 	name 	image 	description 	status 
    protected $table = "departments";
    protected $fillable = [
        'id', 'name', 'image', 'description', 'status',
    ];

    public function offers(){
        return $this->HasMany('App\Models\offer');
    } 

    public function jobs(){
        return $this->HasMany('App\Models\job');
    } 

    public function profiles(){
        return $this->HasMany('App\Models\profile');
    } 
}
