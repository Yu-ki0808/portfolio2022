<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Weight;
use App\Models\level;
class profileController extends Controller
{
    public function index(){
    $today =date('Ymd');
    $weight = Weight::whereDate('user_id',Auth::id())->exists();
    $max_exp = level::where('Lv',2)->first(['EXP']);
    $weight_record = Weight::where('user_id',Auth::id())->latest()->first();
    return view('muscle-quest.profile')->with(['today' => $today, 'weight' => $weight, 'max_exp' =>$max_exp, 'weight_record' => $weight_record]);
    }

    public function weight_store(Request $request){
        $weight_record = $request->weight_record;
        Weight::create([
            'weight' => $weight_record,
            'user_id' => Auth::id(),
            'date_key' => date('ymd'),
            ]);
            return back();
    }
}
