<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Livewire\InstructorCourses;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'instructor/courses');
Route::get('courses',InstructorCourses::class)->name('courses.index');