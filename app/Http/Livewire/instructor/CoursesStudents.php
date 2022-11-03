<?php

namespace App\Http\Livewire\Instructor;

use App\Http\Livewire\CourseStatus;
use App\Models\Course;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithPagination;

class CoursesStudents extends Component
{
    

    use WithPagination;
    use AuthorizesRequests;

    public $course;
    public $search;
    

    public function mount(Course $course){
        $this->course = $course;

        $this->authorize('dicatated',$course);
        
    }

    public function updatingSearch(){
        $this->resetPage();
    }




    public function render()
    {
        $students = $this->course->students()->where('name','LIKE','%' . $this->search . '%')->paginate(4);
      //  $porcenta =app(CourseStatus::class)->getPorce();

        return view('livewire.instructor.courses-students',compact('students'))->layout('layouts.instructor');
    }




   

 
}
