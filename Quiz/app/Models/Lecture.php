<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
class Lecture extends Model
{

    protected $fillable = [
        'course_id',
        'title',
        'topic_summary',
        'hall_name',
        'scheduled_at'
    ];
    
    public function courses(){
        return $this->belongsTo(Course::class);
    }
    
}
