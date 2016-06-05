<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

use App\User;
use DB;
use App\Http\Controllers\Controller;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('home');
        }
        else{
            return view('auth.login');
        }
    }

    public function showfriend()
    {
        $users = DB::table('users')->get();
         
        return view('auth.showfriend', ['users' => $users]);
    }

    public function viewProfile($id){

        $user = User::find($id);
       /*  return View::make('/auth.viewProfile', array('user' => $user));
       $users = DB::table('users')->get();  */
        return view('auth.viewProfile', ['user' => $user, 'id' => $user->id ]);
    }

    public function editProfile($id){
        $user = User::find($id);
        return view('auth.editProfile', ['user' => $user, 'id' => $user->id]);
    }

}