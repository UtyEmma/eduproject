<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model {
    use HasFactory, HasUuids;

    protected $fillable =  ['name', 'email', 'phone', 'occupation', 'address', 'student_id', 'password', 'relationship'];

    function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }

}
