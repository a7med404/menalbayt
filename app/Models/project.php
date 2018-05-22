<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    # 	id 	title 	short_description 	date 	protfolio_id 
    protected $table = "projects";
    protected $fillable = [
        'id', 'title', 'short_description', 'date', 'protfolio_id',
    ];

    public function protfolios(){
        return $this->BelongsTo('App\Models\protfolio');
    } 

    public function projects_images(){
        return $this->BelongsTo('App\Models\projectsImages');
    } 
}
