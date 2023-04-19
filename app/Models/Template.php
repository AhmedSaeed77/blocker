<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public $table = 'templates';
    public $fillable = [
        'project_id',
        'name',
        'image'
    ];
}
