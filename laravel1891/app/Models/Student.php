<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function profesores()
    {
        return $this->hasMany(Teacher::class);
    }
}
