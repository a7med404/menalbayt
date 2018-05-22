<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job extends Model 
{
    # id 	name 	description 	status
    protected $table = "jobs";
    protected $fillable = [
        'id', 'name', 'description', 'department_id', 'status',
    ];

    public function department(){
        return $this->BelongsTo('App\Models\department');
    }

    public function profiles(){
        return $this->BelongsToMany('App\Models\profile', 'profile_job');
    }

    public function offers(){
        return $this->BelongsToMany('App\Models\offer', 'offer_job');
    }
}
