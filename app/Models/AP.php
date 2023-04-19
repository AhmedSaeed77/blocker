<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AP extends Model
{
    use HasFactory;

    public $table = 'amenitieprojects';

    public $fillable = ['project_id', 'amenitie_id'];

    public function project()
    {

        return $this->belongsTo(Project::class, 'project_id');
    }
    public function amenitie()
    {
        return $this->belongsTo(Amenitie::class, 'amenitie_id');
    }
}
