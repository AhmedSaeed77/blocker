<?php

namespace App\Models;

use App\Localization\Locale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    public $table = 'projects';
    public $fillable = [
        'name',
        'name_ar',
        'name_fr',
        'description',
        'description_fr',
        'description_ar',
        'code',
        'dev_id',
        'area',
        'location',
        'pdf',
        'price',
        'pay_plan',
        'region_id',
        'area_id',
        'vedio_link',
        'status_id',
        'type_id',
        'bedrooms',
        'rooms',
        'plan',
        'bath',
        'garage'

    ];
    public $transcodeColumns = [
        'name',
        'description',
    ];

    public function image()
    {
        return $this->hasMany(ProjectImage::class, 'project_id');
    }
    public function name()
    {
        $locale = new Locale;
        if ($locale->locale == 'ar') {
            return $this->name_ar;
        } elseif ($locale->locale = 'fr') {
            return $this->name_fr;
        } else {
            return $this->name;
        }
    }
    public function description()
    {
        $locale = new Locale;
        if ($locale->locale == 'ar') {
            return $this->description_ar;
        } elseif ($locale->locale = 'fr') {
            return $this->description_fr;
        } else {
            return $this->description;
        }
    }

    public function place()
    {
        return $this->belongsTo(Location::class, 'region_id');
    }

    public function plans()
    {
        //$this->hasMany(Template::class, 'project_id')

        return $this->hasMany(Template::class, 'project_id');
    }

    public function amenitie()
    {
        return $this->hasMany(AP::class, 'project_id');
    }



    public function advgarr()
    {
        $advantegs = $this->amenitie->toArray();
        $advantegsarr=[];
        foreach($advantegs as $advanteg)
        {
            $advantegsarr[]=$advanteg['amenitie_id'];
        }
        return $advantegsarr;
    }

    public function devolper()
    {

        return $this->belongsTo(Developer::class, 'dev_id');
    }

    protected static function booted()
    {
        self::deleting(function ($hotel) {
            $hotel->image()->each(function ($image) {
                deleteMedia($image->image, 'projects/');
                $image->delete();
            });
            $hotel->plans()->each(function ($p) {
                deleteMedia($p->image, 'projects/plan/');
                $p->delete();
            });
        });
    }


}
