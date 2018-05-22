<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class protfolio extends Model
{
    # 	id 	max_project_number 	provider_id 
    protected $table = "protfolios";
    public $timestamps = false;
    protected $fillable = [
        'id', 'max_project_number', 'provider_id',
    ];

    public function profiles(){
        return $this->BelongsTo('App\Models\profile');
    } 

    public function projects(){
        return $this->hasOneOrMany('App\Models\project');
    } 
}
