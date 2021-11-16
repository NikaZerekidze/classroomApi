<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public function lecturer()
    {
        return $this->hasOne(Lecturer::class);
    }

    public function subject()
    {
        return $this->hasOne(Subject::class);
    }
}
