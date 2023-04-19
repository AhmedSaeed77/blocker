<?php

namespace App\Models;

use App\Localization\Locale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenitie extends Model
{
    use HasFactory;

    public $table = 'amenities';

    public $fillable = ['name_ar', 'name', 'name_fr'];

    public function Ap()
    {
        return $this->hasMany(AP::class, 'amenitie_id');
    }

    public function name()
    {
        $locale = new Locale;
        if ($locale->locale == 'ar') {
            return $this->name_ar;
        } elseif ($locale->locale = 'fr') {
            return $this->name_fr;
        } else {
            return $this->name_en;
        }
    }
}
