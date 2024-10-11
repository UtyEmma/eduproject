<?php

namespace App\Models;

use App\Concerns\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalGovernment extends Model
{
    use HasFactory, HasUuids, HasStatus;

    protected $fillable = ['name', 'capital', 'zone_id'];

    function zone(){
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    function schools(){
        return $this->hasMany(School::class, 'lga_id');
    }
}
