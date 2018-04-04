<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
  public function place(){
    if(!Auth::user())
    {
      return redirect('/login') ;
    }
    else {
        $place = DB::table('placements')
        ->where('branch','=',Auth::user()->branch)
        ->orWhere('branch','=','ALL')
        ->get();
        $place=$place->reverse();

        return view('placement',['place'=>$place]);
    }
  }

}
