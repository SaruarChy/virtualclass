@extends('layout')
@section('content')

<section>
    <div class="container">
        <div class="row justify-content-center" style="margin-top:100px;">
            <div class="col-12">
                <h2 class="text-center text-primary">Forgot password form</h2>
            </div>
            <div class="col-12 col-sm-10 col-md-5 align-items-center my-auto">

                <form action="{{route('password.forgot.link')}}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Send Reset Password Link</button>
                </form>
                <div class="mt-3">
                    <strong><a href="{{route('teacher.login.form')}}">Login</a></strong>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection