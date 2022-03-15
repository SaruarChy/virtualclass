@extends('layout')
@section('content')
>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <p class="text-center text-primary student_login_text">Fillup every field to create new class</p>
        </div>
        <div class="col-8 col-sm-10 col-md-10 align-items-center my-auto">
            <form action="{{url('/create/class')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="classCode">Clascode</label>
                    <input type="text" name="classCode" id="classCode" class="form-control" placeholder="Enter your classCode">
                    <span class="text-danger">@error('classCode'){{$message}} @enderror</span>
                    <!-- <span class="text-danger text-error classCode_error"></span> -->
                </div>
                <div class="form-group">
                    <label for="subCode">Subject Code</label>
                    <input type="text" name="subCode" id="subCode" class="form-control" placeholder="Enter your subCode">
                    <span class="text-danger">@error('subCode'){{$message}} @enderror</span>
                    <!-- <span class="text-danger text-error subCode_error"></span> -->

                </div>
                <div class="form-group">
                    <label for="batch">Batch</label>
                    <input type="batch" name="batch" id="batch" class="form-control" placeholder="Enter your batch">
                    <span class="text-danger">@error('batch'){{$message}} @enderror</span>
                    <!-- <span class="text-danger text-error batch_error"></span> -->

                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="department" name="department" id="department" class="form-control" placeholder="Enter your department">
                    <span class="text-danger">@error('department'){{$message}} @enderror</span>
                    <!-- <span class="text-danger text-error department_error"></span> -->

                </div>
                <br>
                <button type="submit" class="btn btn-primary">create class</button>
            </form>
        </div>
    </div>
</div>

@endsection