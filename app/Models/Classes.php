<?php

namespace App\Models;

use App\Concerns\HasStatus;
use App\Enums\ClassType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory, HasStatus, HasUuids;

    protected $fillable = ['name', 'level', 'type'];

    protected $casts = [
        'type' => ClassType::class
    ];

    function students(){
        return $this->hasMany(Student::class, 'class_id');
    }
}
