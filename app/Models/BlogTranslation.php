<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    use HasFactory;

//    public function blog()
//    {
//        return $this->belongsTo(Blog::class, 'blog_id','id');   //is not essential
//    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id','id');   //is not essential
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id','id');   //is not essential
    }

    protected $fillable = [
        'blog_id',
        'language_id',
        'title',
        'description'
    ];
}
