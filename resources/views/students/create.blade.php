@extends('layouts.main')
@section('content')
<div class="container mr-auto mt-2 mb-3">
    <h3 class="text-center">Create Student</h3>
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-success btn-sm">Submit</button>
    </form>
</div>
@endsection