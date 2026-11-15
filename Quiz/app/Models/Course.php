<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lecturer;
use app\Models\Lecture;
use app\Models\User;


class Course extends Model
{
    protected $fillable =[
        'lecturer_id',
        'course_code',
        'title',
        'credit_hours',
        'semester'
    ];

    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'course_user')
            ->withPivot('enrollment_date', 'grade')
            ->withTimestamps(); 
    }
}
