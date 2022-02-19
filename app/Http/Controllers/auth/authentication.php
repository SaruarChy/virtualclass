<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_auth;
use App\Models\Student_auth;
use Illuminate\Support\Facades\Hash;
use carbon\Carbon;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class authentication extends Controller
{
    //
    public function teasignupform()
    {
        return view('auth.teaSignupForm');
    }
    public function tealoginform()
    {
        return view('auth.teaLoginForm');
    }
    public function teaSignup(Request $req)
    {
        return "form sign";
    }
    public function teacherRegister(Request $req)
    {
        $req->validate([
            'email' => 'required|email|unique:teacher_auth',
            'password' => 'required|min:4'
        ]);
        $teacherAuth = new Teacher_auth();

        $teacherAuth->email = $req->email;
        $teacherAuth->password = Hash::make($req->password);
        $save = $teacherAuth->save();
        if ($save) {
            return back()->with('success', 'Sign Up completed');
        } else {
            return back()->with('fail', 'Something went wrong , please try again!');
        }
    }

    public function teacherLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        $teacherInfo = Teacher_auth::where('email', '=', $req->email)->first();

        if ($teacherInfo) {
            if (Hash::check($req->password, $teacherInfo->password)) {
                session()->put('teacherInfo', $teacherInfo);
                return view('welcome');
                // if (session()->has('teacherInfo')) {
                //     return session('teacherInfo')['email'];
                // } else {
                //     return "no session";
                // }
            } else {
                return back()->with('fail', 'Invalid credential');
            }
        } else {
            return back()->with('fail', 'we do not recognize your email address');
        }
    }
    public function logout()
    {
        if (session()->has('teacherInfo')) {
            session()->pull('teacherInfo');
        }
        if (session()->has('studentInfo')) {
            session()->pull('studentInfo');
        }
        return redirect('teacher/login/form');
    }
    // forgot password form

    public function forgotPasswordForm()
    {
        return view('auth.forgotPassword');
    }
    public function sendResetLink(Request $req)
    {
        $req->validate([
            'email' => 'required|email|exists:teacher_auth,email'
        ]);
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $req->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $action_link = route('reset.password.form', ['token' => $token, 'email' => $req->email]);
        $body = "we are received a request to reset the password for <b> virtualclass <b> account associated with " . $req->email .
            ".you can reset password by clicking the link below";

        Mail::send('email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($req) {
            // $message->from('devdb017@gmail.com', 'virutalclass'); 
            $message->to($req->email, 'debo broto')->subject('Reset Password');
        });

        return back()->with('success', 'we have e-maild your password reset link');
    }








    // ---student ---------
    public function stdsignupform()
    {
        return view('auth.stdSignupForm');
    }
    public function stdloginform()
    {
        return view('auth.stdLoginForm');
    }
    public function studentRegister(Request $req)
    {
        $req->validate([
            'email' => 'required|email|unique:teacher_auth',
            'password' => 'required|min:4'
        ]);
        $studentAuth = new Student_auth();

        $studentAuth->email = $req->email;
        $studentAuth->password = Hash::make($req->password);
        $studentAuth->email_varified_at  = Carbon::now();
        $save = $studentAuth->save();
        if ($save) {
            return back()->with('success', 'Sign Up completed');
        } else {
            return back()->with('fail', 'Something went wrong , please try again!');
        }
    }
    public function studentLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        $studentInfo = Student_auth::where('email', '=', $req->email)->first();

        if ($studentInfo) {
            if (Hash::check($req->password, $studentInfo->password)) {
                session()->put('studentInfo', $studentInfo);
                return view('welcome');
                // if (session()->has('studentInfo')) {
                //     return session('studentInfo')['email'];
                // } else {
                //     return "no session";
                // }
            } else {
                return back()->with('fail', 'Invalid credential');
            }
        } else {
            return back()->with('fail', 'we do not recognize your email address');
        }
    }
}
