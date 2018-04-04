<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class ResultController extends Controller
{
    public function index()
    {

      if(!Auth::user())
      {
        return redirect('/login') ;
      }

      else
      {
        $results = DB::table('results')
        ->where([['branch',Auth::user()->branch],['s_roll',Auth::user()->id]])
        ->get();

        return view('/result')->with('results',$results);

      }

    }
}
