<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
        'course_id',
        'section_id',
        'year_level',
        'semester',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject');
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'section_subject');
    }
}
