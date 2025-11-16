<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'student_number',
        'first_name',
        'middle_name',
        'last_name',
        'course_id',
        'section_id',
        'subject_id'
    ];
}
