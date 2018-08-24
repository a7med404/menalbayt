<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    # 	id 	vaule 	customer_id 	provider_id 
    protected $table = "rates";
    protected $fillable = [
        'id', 'vaule', 'customer_id', 'provider_id',
    ];
}
