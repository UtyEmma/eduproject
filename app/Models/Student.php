<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model {
    use HasFactory, HasUuids, Authenticatable, Notifiable;

    protected $fillable = ['school_id', 'admission_no', 'roll_no', 'date_of_birth', 'student_photo', 'firstname', 'lastname', 'email', 'state', 'address', 'country', 'password', 'notes', 'gender', 'admission_date'];

    


}
