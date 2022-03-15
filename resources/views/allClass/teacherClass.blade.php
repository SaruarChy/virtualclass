@extends('layout')
@section('content')


<div class="container teacher_class_section">
    <div class="class_btn_div">
        <button type="button" class="create_class_btn" data-toggle="modal" data-target="#myModal">Create class don't use it</button>
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
                                <!-- @csrf -->
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



<div class="teacher_class">
    <div class="col-12 ">
        <a href="{{url('createClassView')}}" class="text-center"><button type="button" class="create_class_btn">Create Class</button>
        </a>
        @if($classes->isEmpty())
        <span class="text-center">
            there is no class
        </span>
        @else
        <div class="class_wrap flex-container">
            @foreach($classes as $class)
            <div class="class_box">
                <div class="class_box_content">
                    <a href="{{url('stream/'. $class->classCode)}}">
                        <div class="cut-text class_name">
                            <h3>
                                Class nameffffffffffffffffffffffffffffffffffffff
                            </h3>
                        </div>
                        <div class="batch_name">
                            <p>{{$class->batch}}</p>
                        </div>
                        <div style="padding-left: 15px;">
                            <img class="teacher_image" src="{{URL::asset('image/teacher.jpg')}}" alt="image" width="80">
                        </div>
                        <div class="teacher_name cut-text">
                            <p>{{$teacher->name}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>


<script src="{{URL::asset('js/createNewClass.js')}}"></script>
@endsection