<?php

namespace App\Models;

use App\Concerns\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
    use HasFactory, HasUuids, HasStatus;

    protected $fillable = ['name'];

    function subjects(){
        return $this->hasMany(Subject::class, 'department_id');
    }

}
