<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public $table = 'area';

    public $fillable = ['area', 'region_id'];

    public $transcodeColumns = [
        'area',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'region_id');
    }
}
