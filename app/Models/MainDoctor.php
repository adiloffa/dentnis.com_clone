<?php

namespace App\Models;

use App\Http\Controllers\Admin\MainDoctorTranslationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDoctor extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(MainDoctorTranslation::class, 'main_doctor_id', 'id');   //each category has a translation
    }
    public function translation()
    {
        return $this->hasOne(MainDoctorTranslation::class, 'main_doctor_id', 'id');   //each category has a translation
    }
}
