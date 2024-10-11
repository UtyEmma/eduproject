<?php

namespace App\Livewire\Students;

use App\Models\School;
use App\Models\Student;
use Livewire\Component;

class Edit extends Component {

    public Student $student;

    public $admission_no, $school_id, $roll_no, $date_of_birth, $student_photo, $firstname, $lastname, $email, $state, $country, $password, $notes, $gender, $admission_date, $current_address, $permanent_address, $birth_cert, $lga_cert, $phone;

    public $guardians = [];

    public $schools;

    function mount(){
        $this->schools = School::all();
    }

    function rules(){
        return [
            'admission_no' => 'required|string|unique:students,admission_no',
            'school_id' => 'required|string|exists:schools,id',
            'roll_no' => 'required|string',
            'phone' => 'required|string',
            'date_of_birth' => 'required|string|date',
            'photo' => 'nullable|image',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|email|unique:students,email',
            'state' => 'required|string',
            'country' => 'required|string',
            'notes' => 'nullable|string',
            'gender' => 'required|string',
            'admission_date' => 'required|string|date',
            'current_address' => 'required|string',
            'permanent_address' => 'required|string',
            'birth_cert' => 'nullable|file',
            'lga_cert' => 'nullable|file',
            'guardians' => 'required|array',
            'guardians.relationship' => 'required|string',
            'guardians.name' => 'required|string',
            'guardians.email' => 'required|string|email',
            'guardians.phone' => 'required|string',
            'guardians.occupation' => 'required|string',
            'guardians.address' => 'required|string',
        ];
    }

    function save(){
        dd($this->all());
        $validated = $this->validate();
        $school = School::find($this->student_id);
        
        $school->students()->create($validated);
    }    

    public function render()
    {
        return view('livewire.students.edit');
    }
}
