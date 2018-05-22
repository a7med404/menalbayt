<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    #id 	title 	description 	longitude 	latitude 	max_price 	min_price 	offer_start_date 	offer_end_date 	status 	level 	department_id 	customer_id
    protected $table = "offers";
    protected $fillable = [
        'id', 'title', 'description', 'longitude', 'latitude', 'max_price', 'min_price', 'offer_start_date', 'offer_end_date', 'status', 'level', 'department_id', 'customer_id',
    ];


    public function customer(){
        return $this->BelongsTo('App\Models\customer');
    }

    public function provider(){
        return $this->BelongsTo('App\Models\provider');
    }

    public function offersImages(){
        return $this->HasMany('App\Models\offersImages');
    }

    public function department(){
        return $this->BelongsTo('App\Models\department');
    }

    public function jobs(){
        return $this->BelongsToMany('App\Models\job', 'offer_job');
    }
}
