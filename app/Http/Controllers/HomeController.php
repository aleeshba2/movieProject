<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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
        $user = Auth::user();
        //    $staff = Auth::guard('staff')->user();

           // Check if the user is an admin based on their email and password
          if ($user->email == 'admin@gmail.com' && Hash::check('adminpassword', $user->password)) {
              return view('admin');  // Admin view
          
          } else {
              return view('pages.home');  // Regular user view
          }
    }
}
