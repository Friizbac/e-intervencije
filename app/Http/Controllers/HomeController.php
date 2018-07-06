<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Intervention;
use App\Http\Controllers\UsersController;

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
        $members = DB::table('members')->count();
        $users = DB::table('users')->count();
        $notifications = DB::table('notifications')->count();
        $interventions = DB::table('interventions')->count();
        $interventions_map = Intervention::all();


        return view('home')->with(compact('members','users','notifications','interventions', 'interventions_map'));


    }
}
