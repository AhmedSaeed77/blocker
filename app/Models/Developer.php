<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    public $table = 'developers';

    public $fillable = [
        'name',
        'logo',
        'phone',
        'fax',
        'site',
    ];

    public function project()
    {
        return $this->hasMany(Project::class, 'dev_id');
    }
}


// projects
// name
// image
// des
// code
// price
// status
// payment_count
// location
// area


// -apartment plans
// title
// des
// image

// payments_plan
// project_id
// pres

// atttachments
// name

// units
// project_id
// count
// price
//             images
//             name

//             futu - many to many


// unit_id - f_id

// info

// key - val

// phone - 01524
// fax - 5454
// whats - 54545
// face - 46545
// logo 545
