<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(){
        $toEmail = "adeshsapra07@gmail.com";
        $message = "My name is Adesh Sapra, and I have recently completed my B.C.A. I'm writing to express my strong interest in the Laravel Internship opportunity at your company. I have worked on academic projects using Laravel, PHP, MySQL, HTML, CSS, and JavaScript, and I'm eager to apply my skills while continuing to learn and grow in a professional environment.";
        // $file=$request->file('images.AdeshSapra_Resume.pdf');
        $subject = "Application For LARAVEL Internship";

        // $emails = [
        //     'adeshsapra17@gmail.com',
        //     'adeshsapra07@gmail.com',
        //     'itsadesh17@gmail.com',
        //      ];

        //     foreach($emails as $recipent){
        //         Mail::to($recipent)->send(new welcomeemail($message,$subject));
        //     }
        
       $request = Mail::to($toEmail)->send(new welcomeemail($message,$subject));

         if($request){
            return view('login');
        }
        else{
            return view('register');

        }
    }

    // public function sendContactEmail(Request $request){
    //     $request->validate([
    //       'name' => 'required',
    //       'email' => 'required|email',
    //       'subject' => 'required|min:5|max:100',
    //       'message' => 'required|min:10|max:255',
    //     ]);

    //     $adminmail = 'adeshsapra07@gmail.com';
    //     $req = Mail::to($adminmail)->send(new welcomeemail($request->all()));

    //     if($req){
    //         return view('login');
    //     }
    //     else{
    //         return view('register');

    //     }
    // }


    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:10|max:255',
        ]);

        $adminMail = 'adeshsapra07@gmail.com';

        // Create array of data
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send mail
        $sent = Mail::to($adminMail)->send(new welcomeemail($formData));

        // return back()->with('success', 'Your message has been sent successfully!');
        return $sent
            ? back()
            : view('register')->with('error', 'Email could not be sent.');
    }


}


