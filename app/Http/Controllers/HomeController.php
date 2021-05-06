<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{

    private $users = [];
    private $user;

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
        $this->user = Auth::user();
        if ($this->user->role_id == '1') {
            $this->users = User::all();
        } elseif ( $this->user->role_id == '2'){
            $this->users = User::where('manager_id', $this->user->id)->get();
        } else {
            $this->users = User::where('id', $this->user->id)->get();
        }    
        return view('home', ['users' => $this->users]);
    }
}
