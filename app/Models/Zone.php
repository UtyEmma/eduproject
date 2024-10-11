<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model {
    use HasFactory, HasUuids;

    protected $fillable = ['name'];

    function lgas(){
        return $this->hasMany(LocalGovernment::class, 'zone_id');
    }

    
    function schools(){
        return $this->hasMany(School::class, 'zone_id');
    }

}
