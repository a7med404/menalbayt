<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offersjob extends Model
{
    #	id 	offer_id 	job_id 
    protected $table = "offer_job";
    protected $fillable = [
       'id', 'offer_id', 'job_id',
    ];
}
