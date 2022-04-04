<?php

namespace App\Http\Controllers\kids_pikori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class indexController extends Controller
    {
        public function index(){
            return view('kids-pikori.index');
        }
        public function show(){
            return view('kids-pikori.contents-list');
        }
    }

