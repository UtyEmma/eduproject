<?php

namespace App\Models;

use App\Concerns\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model {
    use HasFactory, HasUuids, HasStatus;

    protected $fillable = ['subject_id', 'class_id', 'is_elective'];

    protected $casts = [
        'is_elective' => 'boolean'
    ];

    function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    function class(){
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }
}
