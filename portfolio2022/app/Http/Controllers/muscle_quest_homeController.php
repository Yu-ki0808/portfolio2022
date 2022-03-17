<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Functions;
class muscle_quest_homeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('muscle-quest.home');
    }
    public function todo()
    {
        
        return view('muscle-quest.todo');
    }


}
