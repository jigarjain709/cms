<?php

namespace App\Http\Controllers;
use App\Profile;
use DB;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function profile(){
    if(!Auth::user())
    {
      return redirect('/login') ;
    }

    $profiles = DB::table('profiles')
    ->where([['s_id',Auth::user()->id],['branch',Auth::user()->branch]])->get();


    if(!($profiles=="[]"))
    {
    return view('profile',['profiles'=>$profiles]);
    // return $profiles;
    // exit();
    }
    else {
      $profiles[0]=new Profile;
      $profiles[0]->s_id=Auth::user()->id;
      $profiles[0]->email=Auth::user()->email;
      $profiles[0]->f_name=Auth::user()->name;
      $profiles[0]->l_name="";
      $profiles[0]->sem="";
      $profiles[0]->year="";
      $profiles[0]->s_phone="";
      $profiles[0]->address="";

      // return $profiles;
      // exit();

      return view('profile',['profiles'=>$profiles]);
    }
  }

    public function update(Request $request)
    {
//Final update

      $profile= new Profile;
      $profile=Profile::where('s_id',Auth::user()->id)->update(array(
        'f_name'=>$request->input('f_name'),
        'l_name'=>$request->input('l_name'),
        's_phone'=>$request->input('s_phone'),
        'address'=>$request->input('address'),
        'p_f_name'=>$request->input('p_f_name'),
        'p_l_name'=>$request->input('p_l_name'),
        'p_phone'=>$request->input('p_phone'),
        'sem'=>$request->input('sem')

            ));

            // if($profile=='0')
            // {
              // return "here";
              // exit();
//final update end

       if(!$profile){

         // return Auth::user()->id;
         // exit();
          $profile=new Profile;
          $profile->s_id=Auth::user()->id;
          $profile->email=Auth::user()->email;
          $profile->f_name=$request->input('f_name');
          $profile->l_name=$request->input('l_name');
          $profile->s_phone=$request->input('s_phone');
          $profile->p_phone=$request->input('p_phone');
          $profile->p_f_name=$request->input('p_f_name');
          $profile->p_l_name=$request->input('p_l_name');
          $profile->address=$request->input('address');
          $profile->s_roll=Auth::user()->id;
          $profile->branch=Auth::user()->branch;
          $profile->s_roll=$request->input('sem');


          $profile->save();
          return redirect('/profile')->with('response','1st Updated Sucessfully');
          }
      return redirect('/profile')->with('response','Updated Sucessfully');
    //}
    }

}
