<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Mails;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return $this->middleware('auth')->except(['about', 'contact', 'contact_submit']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $threads=Thread::orderBy('id', 'DESC')->paginate(10);
        return view('home', compact('threads'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function contact_submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'email'    => 'required|email:rfc,dns',
            'subject'    => 'required',
            'message'  => 'required|min:5',
            //'g-recaptcha-response' => 'required|captcha'
        ]);
        
        $mail = new Mails;
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->message = $request->message;

        $mail->save();
        return back()->withMessage('Message Submitted');
    }
}