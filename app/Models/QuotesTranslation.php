<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotesTranslation extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id','id');   //is not essential
    }

    protected $fillable = [
        'quote_id',
        'language_id',
        'title',
        'description'
    ];


//    public function quote()
//    {
//        return $this->belongsTo(Quotes::class, 'quote_id','id');   //is not essential
//    }
}
