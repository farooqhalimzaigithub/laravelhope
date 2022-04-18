<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeClass extends Model
{
    use HasFactory;
     protected $guarded=[];



     public function students()
    {
        return $this->hasMany(Student::class,'current_class_id','id');
        // return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
    }
}
