<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    protected $table = "providers";
    protected $fillable = [
        'id', 'phone_number', 'balance', 'is_available', 'account_status', 'trusted', 'last_seen',
    ];

    public function profile(){
        return $this->HasOne('App\Models\profile', 'id', 'id');
    }

    public function offers(){
        return $this->hasMany('App\Models\offer');
    } 
}
