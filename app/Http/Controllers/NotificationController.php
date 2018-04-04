<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
class NotificationController extends Controller
{
    public function notification(){
      if(!Auth::user())
      {
        return redirect('/login') ;
      }
      else {
        $notif = DB::table('notifications')
          ->where([['to','ALL'],['branch',Auth::user()->branch]])
          ->orWhere([['to',Auth::user()->year],['branch',Auth::user()->branch]])
          ->orWhere([['to','ALL'],['branch','ALL']])
          ->get();
          $notif=$notif->reverse();
          // return $notif;
          // exit();
          return view('notifications',['notif'=>$notif]);

      }
    }
}
