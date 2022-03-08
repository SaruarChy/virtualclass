<header>
    <div class="nav__header">
        <div class="col-12 d-flex justify-content-end nav-bar-design">
            <a class="nav-branding" href="{{url('/')}}"><img src="{{URL::asset('logo/online-class-icon.png')}}" alt="logo" width="60"></a>
            <nav class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">COURSES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">NOTICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('myclass')}}">MY CLASS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
                    <li>
                        <div class="signup_dropdown">
                            SIGNUP
                            <div class="dropdown-content" style="right:0;">
                                <a class="nav-link" href="{{route('teacher.signup.form')}}">AS A TEACHER</a>
                                <a class="nav-link" href="{{route('student.signup.form')}}">AS A STUDENT</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <a class="login_btn-a" href="{{route('login')}}"><button class="login_btn" type="button">LOGIN</button></a>


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
    <div>
        <a class="mob-nav-close" href="#">HOME</a>
        <a class="mob-nav-close" href="#">COURSES</a>
        <a class="mob-nav-close" href="#">NOTICE</a>
        <a class="mob-nav-close" href="{{route('myclass')}}">teacher CLASS</a>
        <a class="mob-nav-close" href="#">ABOUT</a>
        <a class="mob-nav-close" href="{{route('teacher.signup.form')}}">SIGNUP AS A TEACHER</a>
        <a class="mob-nav-close" href="{{route('student.signup.form')}}">SIGNUP AS A STUDENT</a>
    </div>
</nav>
<script src="{{URL::asset('js/navbar.js')}}"></script>