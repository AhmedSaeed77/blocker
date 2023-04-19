<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;

    public $table = 'project_images';
    public $fillable = [
        'project_id',
        'name',
    ];


    public function project()
    {

        return $this->belongsTo(Project::class, 'project_id');
    }

    
}
