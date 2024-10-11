<?php

namespace App\Models;

use App\Concerns\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory, HasUuids, HasStatus;

    protected $fillable = ['name', 'address', 'email', 'phone', 'zone_id', 'lga_id'];

    function zone(){
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    function lga(){
        return $this->belongsTo(LocalGovernment::class, 'lga_id');
    }

    function students(){
        return $this->hasMany(Student::class, 'school_id');
    }
}
