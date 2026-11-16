<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index (){
        $lecturers = Lecturer::where('isActivated')
        ->with('user')
        ->withCount('courses')
        ->get();

        return View('lecturers.index',compact('lecturers'));
        
    }

    public function create (){
        return view('lecturers.create');
    }

    public function store (Request $request){

    }

    public function edit (){
        return view('lecturers.edit');
    }

    public function update (Request $request, Lecturer $id){

    }

    public function destroy (Lecturer $id){

    }
}