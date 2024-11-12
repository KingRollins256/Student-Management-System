<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_name',
        'course_name',


    ];

    // course relationship

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    // students relationship

    public function students(){
        return $this->belongsTo(Student::class);
    }
}
