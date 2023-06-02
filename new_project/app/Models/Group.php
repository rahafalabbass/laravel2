<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name'];
    use HasFactory;

    public function students(){
        $this->hasMany(students::class);
    }
}
