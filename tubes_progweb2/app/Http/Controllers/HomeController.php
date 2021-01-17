<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Member;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = User::where('role','member')->get();
        //     dd($user);
        // if($request->session->has($user)){
           $member = Member::where('id_member',Auth::user()->id)->first();
        //    dd($member); dump die
           return view('index',['member'=>$member]);

        }



    // public function buatsession(Request $request)
    // {
    //     $request->session()->put('data',$request->input());
    //     return \redirect ();
    // }


}
