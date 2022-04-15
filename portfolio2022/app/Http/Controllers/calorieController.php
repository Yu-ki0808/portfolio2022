<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Weight;
use Illuminate\Support\Facades\Validator;


class calorieController extends Controller
{
    public function index()
    {
        return view('muscle-quest.calorie');
    }

    public function calculation(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'level' => 'required',
                'target' => 'required|max:25',
            ],
            [
                'level.required' => '活動レベルをを選択してください',
                'target.required' => '目的を選択してください'
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $level = $request->level;
        $target = $request->target;
        $age =floor((date('Ymd') -  str_replace('-', '', Auth::user()->birthday))/10000);
        // Weightテーブルにデータがあるかをcheck
        $weight_check = Weight::whereDate('user_id', Auth::id())->exists();
        if ($weight_check) {
            $weight = Weight::whereDate('user_id', Auth::id())->latest()->first(['weight']);
        }else{
            $weight = Auth::user()->weight;

        }
        // カロリー計算
        if (Auth::user()->gender == 1) {
            $basic = floor((13.397 * $weight) + (4.799 * Auth::user()->height) - (5.677 * $age) + 88.362);
            $total = floor(((13.397 * $weight) + (4.799 * Auth::user()->height) - (5.677 * $age) + 88.362) * $level);
        } else {
            $basic = floor((9.247 * $weight) + (3.098 * Auth::user()->height) - (4.33 * $age) + 447.593) ;
            $total = floor(((9.247 * $weight) + (3.098 * Auth::user()->height) - (4.33 * $age) + 447.593) * $level);
        }
        if ($target == 'muscle') {
            $pars = ['20%','25%','55%'];
            $line= 'muscle-line';
            $muscle_calories = [
                [floor(($total +200)*0.2) ,floor(($total +200)*0.2/4),],
                [floor(($total +200)*0.25), floor(($total + 200) * 0.3 / 9),],
                [floor(($total +200)*0.55), floor(($total + 200) * 0.5 / 4),],
            ];
            $total_sum =$total +200;
        }else{
            $pars = ['20%', '20%', '60%'];
            $line = 'diet-line';
            $muscle_calories = [
                [round(($total - 200) * 0.2), round(($total - 200) * 0.2 / 4),],
                [round(($total - 200) * 0.5), round(($total - 200) * 0.3 / 9),],
                [round(($total - 200) * 0.6), round(($total - 200) * 0.5 / 4),],
            ];
            $total_sum = $total -200;
        }
        $total_g =0;
        foreach ($muscle_calories as $muscle_calorie) {
            $total_g += $muscle_calorie[1];
        }

        return view('muscle-quest.calorie')->with(['basic' =>$basic,'total' => $total,'target' => $target,
                                                                        'pars' => $pars,'line' =>$line,'muscle_calories' => $muscle_calories,
                                                                        'total_sum' =>$total_sum,'total_g' => $total_g, 'weight' => $weight]);
    }
}
