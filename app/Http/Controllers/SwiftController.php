<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;


class SwiftController extends Controller
{

     public function create()
    {
        return view('index');
     }





     public function store(ContactFormRequest $request)
     {

       
    \Mail::send('form',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('annwanjoh91@gmail.com');
        $message->to('swiftpayapp@gmail.com', 'Admin')->subject('contact us');
    });

  return \Redirect::route('index')->with('message', 'Thanks for contacting us!'); 
     }
   

}


// <!-- public function store(ContactFormRequest $request)
// {


// }

//  return \Redirect::route('index')
//       ->with('message', 'Thanks for contacting us!'); -->