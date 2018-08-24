<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profilesJobs extends Model
{
    # id 	profile_job 	job_id 
    protected $table = "profile_job";
    protected $fillable = [
        'id', 'profile_id', 'job_id',
    ];

     


}
