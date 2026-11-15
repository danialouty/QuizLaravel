<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use app\Models\course;


class CourseUser extends Model
{

    protected $fillable = [
        'user_id',
        'course_id',
        'enrollment_date',
        'grade'
    ];

    
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function courses(){
        return $this->belongsTo(course::class);
    }
}
