@extends('layout')
@section('content')
<div class="login-box">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center">Login</h2>
                <div class="login-tab">
                    <button class="tablinks" onclick="loginTabConfig(event, 'teacher')">As A teacher</button>
                    <button class="tablinks" onclick="loginTabConfig(event, 'student')">As A student</button>
                </div>

                <div id="teacher" class="login-tabcontent">
                    <div class="row justify-content-center" style="margin-top:100px;">
                        <div class="col-12">
                            <h2 class="text-center text-primary">Teacher Login</h2>
                        </div>
                        <div class="col-12 col-sm-10 col-md-5 align-items-center my-auto">

                            <form action="{{route('teacher.login')}}" method="POST">
                                <!-- @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif

                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                                @endif -->
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Email" value="{{old('email')}}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            <p class="mt-3"> <a href="{{route('password.forgot')}}">Forgot password</a></p>
                            <p>I don't have any account <a href="{{route('teacher.signup.form')}}">sign up</a> now </p>
                        </div>
                    </div>
                </div>

                <div id="student" class="login-tabcontent">
                    <div class="row justify-content-center" style="margin-top:100px;">
                        <div class="col-12">
                            <h2 class="text-center text-primary">Student Login</h2>
                        </div>
                        <div class="col-12 col-sm-10 col-md-5 align-items-center my-auto">

                            <form action="{{route('student.login')}}" method="POST">
                                <!-- @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif

                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                                @endif -->
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Email" value="{{old('email')}}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            <p class="mt-3"> <a href="{{route('password.forgot')}}">Forgot password</a></p>
                            <p>I don't have any account <a href="{{route('student.signup.form')}}">sign up</a> now </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script>
    function loginTabConfig(evt, users) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("login-tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(users).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

@endsection