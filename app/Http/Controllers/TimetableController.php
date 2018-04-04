<?php

namespace App\Http\Controllers;
use App\Timetable;
use Auth;
use DB;
use Session;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
  public function index()
{
  $data = DB::table('timetables')
  ->where('year', '=' , Auth::user()->year )
  ->where('branch', '=' , Auth::user()->branch )
  ->get();
  return view('timetable')->withData ( $data );
}
}
