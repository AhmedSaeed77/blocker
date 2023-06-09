<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public $table = 'requests';

    public $fillable = [
        'name',
        'phone',
        'email',
        'msg',
        'country',
        'city',
    ];
}
