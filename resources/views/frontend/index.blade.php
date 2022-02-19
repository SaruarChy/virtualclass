@extends('layout')
@section('content')



@if(session()->has('teacherInfo'))
<a style="color:yellow;">{{session('teacherInfo')['email']}}</a>
@endif


<div style="width:100px; height:200px; margin:300px auto;">
    @if(session()->has('teacherInfo'))
    <h1 style="color:yellow;">{{session('teacherInfo')['email']}}</h1>
    @endif
    @if(session()->has('studentInfo'))
    <h1 style="color:yellow;">{{session('studentInfo')['email']}}</h1>
    @endif
    <a href="{{route('Logout')}}">logout</a>
    <br>
    <a href="{{route('teacher.signup.form')}}">teacher signup</a>
    <br>
    <a href="{{route('student.signup.form')}}">student signup</a>
</div>


@endsection