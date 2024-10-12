<?php

namespace App\Models;

use App\Concerns\HasStatus;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model {
    use HasFactory, HasUuids, Authenticatable, Notifiable, HasStatus;

    protected $fillable = ['school_id', 'class_id', 'admission_no', 'roll_no', 'date_of_birth', 'photo', 'firstname', 'lastname', 'email', 'state', 'country', 'password', 'notes', 'gender', 'admission_date', 'current_address', 'permanent_address', 'lga', 'gender', 'birth_cert', 'lga_cert'];

    function school(){
        return $this->belongsTo(School::class, 'school_id');
    }    

    function guardians(){
        return $this->hasMany(Guardian::class, 'student_id');
    }

    function zone(){
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    function lga(){
        return $this->belongsTo(LocalGovernment::class, 'lga_id');
    }

    function  class(){
        return $this->belongsTo(Classes::class, 'class_id');
    }

    function getFullNameAttribute(){
        return "{$this->firstname} {$this->lastname}";
    }

}
