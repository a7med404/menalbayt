<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offersImages extends Model
{
    # 	id 	image 	offer_id 
    protected $table = "offers_images";
    protected $fillable = [
        'id', 'image', 'offer_id',
    ];

    public function offers(){
        return $this->BelongsTo('App\Models\offer');
    }
}
