<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');   //is not essential
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id','id');   //is not essential
    }

    protected $fillable = [
        'name',
        'language_id',
        'category_id'
    ];
}
