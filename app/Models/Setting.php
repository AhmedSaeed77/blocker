<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;


    public $table = 'setting';

    public $fillable = ['key', 'value', 'value_ar', 'value_fr'];


}
