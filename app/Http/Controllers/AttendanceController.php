<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class AttendanceController extends Controller
{
  public function index()
  {

    if(!Auth::user())
    {
      return redirect('/login') ;
    }

    else
    {

      $doas = DB::table('attendance')
      ->select('subject',\DB::raw('sum(value) as att,count(value) as total'))
      ->where([['branch',Auth::user()->branch],['s_roll',Auth::user()->id]])
      ->groupBy('subject')
      ->get();

       return view('/attendance')->with('doas',$doas);

    }

  }
}
