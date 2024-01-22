<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Mail;
use App\Mail\FormEmail;
use App\Models\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


//  public function formMail(Request $request){
//     // return dd($request);
//    Mail::to('susana@example.com')->send(new FormEmail($request));

//    return redirect('/contact');
//         //  -> with ('messageSend' , 'Your message has been
//         // sent! Thank you for your interest.');

//  }

 public function formMail(Request $request){

    $data = $request->validate([
        'name'=>'required|string|max:50',
        'email'=> 'required|string',
        'phone' => 'required|string',
        'subject' => 'required',
        'message' => 'required',
       ]);
       Contact::create($data);
    // return dd($request);
   Mail::to('susana@example.com')->send(new FormEmail($data));


return "mail sent!";
//    return redirect('/contact');
//         //  -> with ('messageSend' , 'Your message has been
//         // sent! Thank you for your interest.');

//  }

 }

}
