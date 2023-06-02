<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_name', 'group_id'];
    use HasFactory;

    public function groups(){
        $this->belongsTo(groups::class);
    }

    public function courses(){
        $this->belongsToMany(courses::class);
    }
}
