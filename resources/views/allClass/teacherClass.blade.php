@extends('layout')
@section('content')

<!-- <div class="container teacher_class_section">
    <div class="class_btn_div">
        <button type="button" class="create_class_btn" data-toggle="modal" data-target="#myModal">Create Class</button>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="model-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <p class="text-center text-primary student_login_text">Fillup every field to create new class</p>
                        </div>

                        <div class="col-12 col-sm-10 col-md-10 align-items-center my-auto">
                            <form id="createNewClas">

                                <div class="form-group">
                                    <label for="clascode">Clascode</label>
                                    <input type="text" name="clascode" id="clascode" class="form-control" placeholder="Enter your clascode" value="{{old('clascode')}}">
                                    <span class="text-danger">@error('classCode'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="subcode">Subject Code</label>
                                    <input type="subcode" name="subcode" id="subcode" class="form-control" placeholder="Enter your subcode">
                                    <span class="text-danger">@error('subcode'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="batch">Batch</label>
                                    <input type="batch" name="batch" id="batch" class="form-control" placeholder="Enter your batch">
                                    <span class="text-danger">@error('batch'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="department" name="department" id="department" class="form-control" placeholder="Enter your department">
                                    <span class="text-danger">@error('department'){{$message}} @enderror</span>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">create class</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default create_class_submit_btn" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="teacher_class">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="class_wrap">
                    <div class="class_box" style="color:red;">
                        red
                    </div>
                    <div class="class_box" style="color:green;">
                        green
                    </div>
                    <div class="class_box" style="color:yellow;">
                        yellow
                    </div>
                    <div class="class_box" style="color:blue;">
                        blue
                    </div>
                    <div class="class_box" style="color:blue;">
                        blue
                    </div>
                    <div class="class_box" style="color:blue;">
                        blue
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container teacher_class_section">
    <div class="class_btn_div">
        <button type="button" class="create_class_btn" data-toggle="modal" data-target="#myModal">Create Class</button>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="model-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <p class="text-center text-primary student_login_text">Fillup every field to create new class</p>
                        </div>

                        <div class="col-8 col-sm-10 col-md-10 align-items-center my-auto">
                            <form action="{{route('create.class')}}" method="POST" id="createNewClas">
                                @csrf
                                <div class="form-group">
                                    <label for="classCode">Clascode</label>
                                    <input type="text" name="classCode" id="classCode" class="form-control" placeholder="Enter your classCode" value="{{old('classCode')}}">
                                    <!-- <span class="text-danger">@error('classCode'){{$message}} @enderror</span> -->
                                    <span class="text-danger text-error classCode_error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="subCode">Subject Code</label>
                                    <input type="text" name="subCode" id="subCode" class="form-control" placeholder="Enter your subcode">
                                    <!-- <span class="text-danger">@error('subcode'){{$message}} @enderror</span> -->
                                    <span class="text-danger text-error subCode_error"></span>

                                </div>
                                <div class="form-group">
                                    <label for="batch">Batch</label>
                                    <input type="batch" name="batch" id="batch" class="form-control" placeholder="Enter your batch">
                                    <!-- <span class="text-danger">@error('batch'){{$message}} @enderror</span> -->
                                    <span class="text-danger text-error batch_error"></span>

                                </div>
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="department" name="department" id="department" class="form-control" placeholder="Enter your department">
                                    <!-- <span class="text-danger">@error('department'){{$message}} @enderror</span> -->
                                    <span class="text-danger text-error department_error"></span>

                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">create class</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default create_class_submit_btn" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>
</div>
<script src="{{URL::asset('js/createNewClass.js')}}"></script>
@endsection