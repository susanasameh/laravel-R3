<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Isset_;

class FormController extends Controller
{



public function store(Request $request)
    {

        // $user =$request->input('email') . " " . $request->input('pwd') ;
        // return "the user data is " . $user;

        $email=$request->input('email');
        $password=$request->input('pwd');

        return "The user Email is " . $email . "<br>The user password is " .$password;


//  return "the data of user is " . $request->input('email') . "<br>" . "the Password of user is " . $request->input('pwd');
 // return "the data of user is " . $email . "and " . $password;
//  return "the data of user is " . $request->input('email','pwd');
// return $request->all();
    // }


//     public function store(Request $request)
// {
//     // Validate the form data
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required|password',
//     ]);

//     // Process the form data

//     $email=$request->input('email');
//     $password=$request->input('pwd');

//     // Save the form data to the database
//     // ...

//     // Send an email notification
//     // ...

//     // return redirect('/thank-you');
//      return "The user email is " . $email . "<br>" . "The user password is " . $password;
// }








}

}
