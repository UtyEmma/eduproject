<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Edit extends Component {

    public Student $student;

    public $admission_no, $roll_no, $date_of_birth, $student_photo, $firstname, $lastname, $email, $state, $address, $country, $password, $notes, $gender, $admission_date;

    

    public function render()
    {
        return view('livewire.students.edit');
    }
}
