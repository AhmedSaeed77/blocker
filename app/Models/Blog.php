<?php

namespace App\Models;

use App\Localization\Locale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    public $table = 'blogs';

    public $fillable = [
        'title',
        'title_ar',
        'title_fr',
        'article',
        'article_ar',
        'article_fr',
        'image',
    ];

    public $transcodeColumns = [
        'title',
        'article',
    ];

    public function title()
    {
        $locale = new Locale;
        if ($locale->locale == 'ar') {
            return $this->title_ar;
        } elseif ($locale->locale = 'fr') {
            return $this->title_fr;
        } else {
            return $this->title;
        }
    }
    public function article()
    {
        $locale = new Locale;
        if ($locale->locale == 'ar') {
            return $this->article_ar;
        } elseif ($locale->locale = 'fr') {
            return $this->article_fr;
        } else {
            return $this->article;
        }
    }

    protected static function booted()
    {
        self::deleting(function ($blog) {
            deleteMedia($blog->image, 'blog/');
        });
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }
}
