<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model {
    use HasFactory, HasUuids, Authenticatable, Notifiable;

    protected $fillable = ['school_id', 'admission_no', 'roll_no', 'date_of_birth', 'photo', 'firstname', 'lastname', 'email', 'state', 'country', 'password', 'notes', 'gender', 'admission_date', 'current_address', 'permanent_address', 'lga', 'gender', 'birth_cert', 'lga_cert'];

    function school(){
        return $this->belongsTo(School::class, 'school_id');
    }    


}
