<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index (){
        
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