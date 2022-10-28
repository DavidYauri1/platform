<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Lesson;
use App\Models\Platform;
use App\Models\Section;
use Livewire\Component;

class CoursesLesson extends Component
{
    public $section , $lesson ,$platforms;

    protected $rules = [
        'lesson.name' => 'required',
        'lesson.platform_id' => 'required',
        'lesson.url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],

    ];

    public function mount(Section $section){
        $this->section = $section;
        $this->platforms = Platform::all();

        $this->lesson = new Lesson();
    }



    public function render()
    {
        return view('livewire.instructor.courses-lesson');
    }

    public function edit(Lesson $lesson){
        $this->resetValidation();
        $this->lesson = $lesson;
    }

    public function  update(){
        if($this->lesson->platform_id == 2){
            $this->rules['lesson.url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
        }

        $this->validate();

        $this->lesson->save();
        $this->lesson = new Lesson();

        $this->section = Section::find($this->section->id);
    }

    public function cancel(){
        $this->lesson = new Lesson();       
    }
}
