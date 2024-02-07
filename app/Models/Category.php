<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class, 'category_id', 'id');   //each category has a translation
    }
    public function translation()
    {
        return $this->hasOne(CategoryTranslation::class, 'category_id', 'id');   //each category has a translation
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class,'category_id', 'id' );
    }

    public function blog()
    {
        return $this->hasOne(Blog::class,'category_id', 'id' );
    }
}
