<?php

namespace App\Http\Controllers;
use App\Models\User; 
use Illuminate\Http\Request;

use Auth;
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
        if (Auth::user() && Auth::user()->is_admin == 1) {
            $users = User::where('is_admin',"0") ->get();
            return view('admin.index',compact('users'));
        }
        return redirect('/student');
    }
}
