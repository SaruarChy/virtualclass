@extends('layout')
@section('content')
<style>
    .span {
        padding: 10px;
        display: inline-block;
        text-align: center;
        cursor: pointer;
        border-bottom: .5px solid green;
        margin: 20px;
        transition: .2s ease-in-out;
    }

    span:hover {
        transform: scale(1.1);
        color: #16a865;
    }

    .active {
        transform: scale(1.1);
        color: #16d17b;
        font-weight: 700;
        text-decoration: none !important;
    }

    .content-txt {
        text-decoration: none !important;
    }
</style>

<div class="row">
    <div class="col-8 offset-2">
        <div class="m-3">
            <ul class="" id="myTab" style="display:flex; width:100%;justify-content:center;">
                <li class="nav-item span">
                    <a href="#sectionA" class="active content-txt" data-toggle="tab">
                        Stream
                    </a>
                </li>
                <li class="nav-item span">
                    <a href="#sectionB" class="content-txt" data-toggle="tab">Video</a>
                </li>
                <li class="nav-item span">
                    <a href="#sectionC" class="content-txt" data-toggle="tab">File</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="sectionA" class="tab-pane fade show active">
                    <h3>steam</h3>

                </div>
                <div id="sectionB" class="tab-pane fade">
                    <h3>video</h3>

                </div>
                <div id="sectionC" class="tab-pane fade">
                    <h3>file</h3>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    });
</script>
<script>
    // const spans = document.getElementsByClassName("content-txt");
    // console.log(spans.length);
    // for (let i = 0; i < spans.length; i++) {
    //     spans[i].addEventListener("click", function() {
    //         let crn = document.getElementsByClassName("active");
    //         crn[0].className = crn[0].className.replace(" active", "");
    //         this.className += " active";
    //     });
    // }
</script>

@endsection