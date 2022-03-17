<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Functions;
class muscle_quest_indexController extends Controller
{
    public function index()
    {
        return view('muscle-quest.index');
    }

}
