<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public $table = 'type';

    public $fillable = ['type'];

    public $transcodeColumns = [
        'type',
    ];
}
