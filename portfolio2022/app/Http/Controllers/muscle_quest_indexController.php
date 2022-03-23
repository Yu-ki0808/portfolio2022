<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Functions;

class muscle_quest_indexController extends Controller
{
// ログインしていユーザーは見れないように設定
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('muscle-quest.index');
    }

}
