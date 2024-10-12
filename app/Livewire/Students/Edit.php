<?php

namespace App\Livewire\Students;

use App\Concerns\Livewire\WithToast;
use App\Library\Token;
use App\Models\Classes;
use App\Models\Guardian;
use App\Models\School;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component {
    use WithToast, WithFileUploads;

    public Student | null $student = null;

    public $admission_no, $school_id, $class_id, $roll_no, $date_of_birth, $photo, $firstname, $lastname, $email, $state, $country, $lga, $password, $notes, $gender, $admission_date, $current_address, $permanent_address, $birth_cert, $lga_cert, $phone;

    public $guardians = [];

    public $schools = [];
    public $classes = [];

    function mount(){
        $this->schools = School::all();
        $this->classes = Classes::all();

        if($this->student) $this->fill($this->student);
    }

    function rules(){
        return [
            'school_id' => 'required|string|exists:schools,id',
            'class_id' => ['required', 'string', Rule::exists('classes', 'id')],
            'roll_no' => 'required|string',
            'admission_no' => 'required|string|unique:students,admission_no',
            'admission_date' => 'required|string|date',
            'photo' => 'nullable|image',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'phone' => 'required|string',
            'date_of_birth' => 'required|string|date',
            'email' => 'required|string|email|unique:students,email',
            'state' => 'required|string',
            'country' => 'required|string',
            'lga' => 'required|string',
            'notes' => 'nullable|string',
            'gender' => 'required|string',
            'current_address' => 'required|string',
            'permanent_address' => 'required|string',
            'birth_cert' => 'nullable|file',
            'lga_cert' => 'nullable|file',
            // 'guardians' => 'required|array',
            // 'guardians.*.relationship' => 'required|string',
            // 'guardians.*.name' => 'required|string',
            // 'guardians.*.email' => 'required|string|email',
            // 'guardians.*.phone' => 'required|string',
            // 'guardians.*.occupation' => 'required|string',
            // 'guardians.*.address' => 'required|string',
        ];
    }

    function save(){
        $validated = $this->validate();

        $school = School::find($this->school_id);
        // $guardians = Arr::pull($this->guardians, 'guardians');
        $password = Token::text(11);

        $validated['birth_cert'] = $this->birth_cert->storePublicly() ?? null;
        $validated['lga_cert'] = $this->birth_cert->storePublicly() ?? null;
        $validated['password'] = $this->student->password ?? $password;

        $this->student?->update($validated) ?? $school->students()->create($validated);
        
        // collect($guardians)->each(function($guardian) use($student) {
        //     $student->guardians()->create($guardian);
        // });

        $this->toast('Student Created Successfully', 'Success')->success();
        $this->redirect(route('students'));

    }    

    public function render()
    {
        return view('livewire.students.edit');
    }
}
