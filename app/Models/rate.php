<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    # 	id 	value 	customer_id 	provider_id 
    protected $table = "rates";
    protected $fillable = [
        'id', 'value', 'customer_id', 'provider_id',
    ];
}
