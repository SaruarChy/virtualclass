@extends('layout')
@section('content')


<div class="teacher_class">
    <div class="row">
        <div class="col-12 ">
            @if($classDetails->isEmpty())
            <span>you didn't join any class</span>
            @else
            <div class="class_wrap flex-container">
                @foreach($classDetails as $detail)
                <div class="class_box">
                    <div class="class_box_content">
                        <div class="cut-text class_name">
                            <h3>
                                class name
                            </h3>
                        </div>
                        <div class="cut-text class_name">
                            <p>
                                subcode : <span>{{$detail['classes'][0]->subCode}}</span>
                            </p>
                        </div>
                        <div class="batch_name">

                        </div>
                        <div style="padding-left: 15px;">
                            <img class="teacher_image" src="{{URL::asset('image/teacher.jpg')}}" alt="image" width="80">
                        </div>
                        <div class="teacher_name cut-text">
                            teacherName : <span>{{$detail['class_teacher'][0]->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>

<!-- <div class="teacher_class">
    <div class="col-12 ">
        <div class="class_wrap flex-container">
            <div class="class_box">
                <div class="class_box_content">
                    <div class="cut-text class_name">
                        Class name aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </div>
                    <div class="batch_name">
                        45, 46
                    </div>
                    <div style="padding-left: 15px;">
                        <img class="teacher_image" src="{{URL::asset('image/teacher.jpg')}}" alt="image" width="80">
                    </div>
                    <div class="teacher_name cut-text">
                        My name is King Khan
                    </div>
                </div>

            </div>

        </div>
    </div>
</div> -->
<script src="{{URL::asset('js/createNewClass.js')}}"></script>
@endsection