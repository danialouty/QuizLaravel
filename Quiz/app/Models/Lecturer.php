<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
class Lecturer extends Model
{
    protected $fillable = [
        'user_id',
        'employee_number',
        'department',
        'office_room',
        'photo',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function courses(){
        return $this->hasMany(course::class);
    }

}
