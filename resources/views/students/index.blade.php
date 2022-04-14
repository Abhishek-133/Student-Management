@extends('students.layout')
@section('content')
<div class="pull-left" style="margin-top:20px;">
<h2 style="font-family: cursive;color:white;" >    Student Management System</h2>
</div>
<div class="row" style="margin-top:20px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a href="{{route('student.create')}}" class="btn btn-success" style="background-color: #e7e7e7; color: black; font-size:30px ">+</a>
        </div>
    </div>
    
</div>
@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</P>
</div>
@endif




<div class="row" style="border:1px solid red">
    
        // text only
        @foreach($students as $student)
        <div class="col-12 d-flex justify-content-center text-center" >
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin-top:20px;border:2px solid blue;padding:10px;width:500px">
  <div class="card-header">{{$student->firstname}} {{$student->lastname}}</div>
  <div class="card-body">
    <h5 class="card-title">{{$student->email}} </h5>
    <p class="card-text">{{$student->phone}}</p>
    <form action="{{route('student.destroy',$student->id)}}" method="POST" style="margin-top:40px;">

<a href="{{ route('student.edit',$student->id)}}" class="btn btn-primary">edit</a>
@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit" style="margin-left:20px;">Delete</button>
</form>
  </div>
</div>
</div>
</div>
@endforeach
   
</div>


