<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'first_name',
        'last_name',
        'dob',
        'email',
    ];


    //relationship
public function course(){
    return $this->belongsTo(Course::class);
}

// enrollment relationship
public function Enrollment(){
    return $this->belongsTo(Enrollment::class);
}

}

