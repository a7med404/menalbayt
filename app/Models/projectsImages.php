<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projectsImages extends Model
{
    # id 	image 	project_id
    protected $table = "projects_images";
    protected $fillable = [
        'id', 'image', 'project_id',
    ];

    public function projects(){
        return $this->BelongsTo('App\Models\project');
    } 
}
