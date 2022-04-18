<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\FreeClass;

class StudentAttendance extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function student()
    {
        return $this->BelongsTo(Student::class,'student_id','id');
    }
    public function class()
    {
        return $this->BelongsTo(FreeClass::class,'class_id','id');
    }

}
