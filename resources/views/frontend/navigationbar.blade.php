<header>
    <div class="row  nav__header">
        <div class="col-12 d-flex justify-content-end nav-bar-design">
            <a class="nav-branding" href="#"><img src="{{URL::asset('logo/online-class-icon.png')}}" alt="logo" width="60"></a>
            <nav class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">COURSES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">NOTICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('myclass')}}">MY CLASS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
                    <li>
                        <div class="signup_dropdown">
                            <a class="nav-link" href="">SIGNUP</a>
                            <div class="dropdown-content" style="right:0;">
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{route('teacher.signup.form')}}">AS A TEACHER</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('student.signup.form')}}">AS A STUDENT</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <button class="login_btn" type="button"><a class="login_btn-a" href="{{route('login')}}">LOGIN</a></button>


            <div class="hamburger hamburger-padding">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </div>
</header>
<!-------------opening side menu on mobile----------->
<nav class="mobile-nav">
    <ul>
        <li><a class="mob-nav-close" href="#">HOME</a></li>
        <li><a class="mob-nav-close" href="#">COURSES</a></li>
        <li><a class="mob-nav-close" href="#">NOTICE</a></li>
        <li><a class="mob-nav-close" href="{{route('myclass')}}">MY CLASS</a></li>
        <li><a class="mob-nav-close" href="#">ABOUT</a></li>
        <li><a class="mob-nav-close" href="{{route('teacher.signup.form')}}">SIGNUP AS A TEACHER</a></li>
        <li><a class="mob-nav-close" href="{{route('student.signup.form')}}">SIGNUP AS A STUDENT</a></li>
    </ul>
</nav>
<script src="{{URL::asset('js/navbar.js')}}"></script>