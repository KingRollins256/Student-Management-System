<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'course_name',
        'course_desc',
        'credit_hrs',
    ];


    //  student relationship
    public function students(){
        return $this->hasMany(Student::class);
    }


    // enrollment relationship
    public function Enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}


