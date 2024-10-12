<?php

namespace App\Models;

use App\Concerns\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory, HasUuids, HasStatus;

    protected $fillable = ['name', 'department_id', 'is_optional'];

    protected $casts = [
        'is_optional' => 'boolean' 
    ];

    function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }
}
