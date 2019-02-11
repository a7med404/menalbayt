<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comments";
    protected $fillable = [
        'id', 'comment', 'profile_id', 'offer_id'
    ]; 

    public function customer(){
        return $this->BelongsTo('App\Models\offer');
    }

    public function profile(){
        return $this->BelongsTo('App\Models\profile');
    }
    public function provider(){
        return $this->BelongsTo('App\Models\provider', 'profile_id', 'id');
    }


    
}
