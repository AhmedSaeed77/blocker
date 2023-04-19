<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public $table = 'locations';

    public $fillable = ['location', 'image'];

    public $transcodeColumns = ['location'];

    public function area()
    {
        return $this->hasMany(Area::class, 'region_id');
    }
}
