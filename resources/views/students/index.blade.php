@extends('layouts.main')
@section('content')
<div class="container mt-3">
    <h3 class="text-center">Student List</h3>
    <div class="d-flex justify-content-end">
        <a href="/students/create" class="btn btn-success ">Add</a>
    </div>
    @if(session('success'))
    <h6 class="alert alert-success mt-1">{{session('success')}}</h6>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $key=>$student)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{route('students.destroy',$student->id)}}" method='POST'>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm mr-2"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        @endsection