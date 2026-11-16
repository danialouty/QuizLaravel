@extends('layouts.app')

@section('title','lecturer')

@section('content')
<h1>All Lecturers</h1>
    <table>
        <thead>
            <th>Full name</th>
            <th>Email</th>
            <th>Profile photo</th>
            <th>Employee_number</th>
            <th>Department</th>
            <th>Academic_rank</th>
            <th>Office_room</th>
            <th>Courses count</th>
        </thead>
        <tbody>
            @forelse($lecturers as $lecturer)
            <tr>
            <td>
            {{ $lecturer->user->name }}
            </td>
            </tr>
            @empty
            <h2>there is no lecturers now</h2>
            @endforelse
        </tbody>
    </table>

@endsection