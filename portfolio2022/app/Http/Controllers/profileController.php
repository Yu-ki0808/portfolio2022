<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Weight;
use App\Models\level;
use App\Models\User;
class profileController extends Controller
{
    public function index(){
    $today =date('Ymd');
    $max_exp = level::where('Lv',Auth::user()->Lv +1)->first(['EXP']);
    $min_exp = level::where('Lv',Auth::user()->Lv)->first(['EXP']);
    $weight_record = Weight::where('user_id',Auth::id())->latest()->first();

        $user_exp = User::findOrFail(Auth::id());
        $need_exp = level::where('Lv', Auth::user()->Lv + 1)->first(['EXP']);

    return view('muscle-quest.profile')->with(['today' => $today, 'max_exp' =>$max_exp, 'weight_record' => $weight_record
, 'user_exp' => $user_exp, 'need_exp' => $need_exp,'min_exp' => $min_exp]);
    }

    public function weight_store(Request $request){
        $weight_record = $request->weight_record;
        $muscle_mass = $request->muscle_mass;
        $body_fat = $request->body_fat;
        Weight::create([
            'weight' => $weight_record,
            'muscle_mass' => $muscle_mass,
            'body_fat' => $body_fat,
            'user_id' => Auth::id(),
            'date_key' => date('ymd'),
            ]);
            return back();
    }
}
