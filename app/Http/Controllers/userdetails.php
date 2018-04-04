<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userdetails extends Controller
{
    $details= new Message;
    $details->name = $request->input('name');
    $details->email = $request->input('email');
    $details->message = $request->input('message');

    //Save Message
    $details->save();

    //redirect
    return redirect('/home')->with('success','Message sent');

      public function getDetails(){
        $detailss=Message::all();

        return view('profile')->with('profile',$details);
      }

      public function setDetails(){
        $email = DB::table('users')->where('name', '{{ Auth::user()->name }}')->value('email');
      }
  }
