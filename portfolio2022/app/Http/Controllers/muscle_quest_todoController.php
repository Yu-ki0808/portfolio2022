<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Functions;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Illuminate\Support\Facades\Validator;
use App\Models\todo_menu;
use App\Models\todo;
use Carbon\Carbon;
use Laravel\Ui\Presets\React;

class muscle_quest_todoController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menus = todo_menu::latest()->get();
        $sample = array(
            '有酸素' => ['プール', 'ランニング', 'ウォーキング', 'サイクリング',],
            '腕' => ['ケーブルカール', 'ケーブルプレス', 'フレンチプレス', 'リストカール',],
            '肩' => ['サイドレイズ', 'ショルダープレス', 'シュラッグ', 'ケーブルショルダープレス',],
            '胸筋' => ['ベンチプレス', 'ダンベルプレス', 'ケーブルチェストプレス', 'バタフライ',],
            '腹筋' => ['クランチ', 'レッグレイズ', 'バイシクルクランチ', 'イージーリフト',],
            '背筋' =>['ラットプルダウン', 'ローイング', 'サイクリング', 'ダンベルベントオーバーロウ',],
            '下半身' => ['スクワット', 'フロントレンジ', 'デッドリフト', 'プッシュレイズ',],
        );
        $aero_count = count ( $sample['有酸素'] ) ;
        $arm_count = count ( $sample['腕'] ) ;
        $shoulder_count = count ( $sample['肩'] ) ;
        $chest_count = count ( $sample['胸筋'] ) ;
        $abdominal_count = count ( $sample['腹筋'] ) ;
        $back_count = count ( $sample['背筋'] ) ;
        $lower_count = count ( $sample['下半身'] ) ;

        // $sample['有酸素'] += [$aero_count +1 => 'aa' ];
        // $sample['有酸素'] += [$aero_count +2 => 'bb' ];
        foreach ($menus as $menu) {
            if ($menu->target_body == '有酸素') {
                $sample['有酸素']["$aero_count"] =$menu->menu;
                $aero_count +=1;
            } elseif ($menu->target_body == '肩') {
                $sample['肩']["$shoulder_count"] = $menu->menu;
                $shoulder_count += 1;
            } elseif ($menu->target_body == '腕') {
                $sample['腕']["$arm_count"] = $menu->menu;
                $arm_count += 1;
            } elseif ($menu->target_body == '胸筋') {
                $sample['胸筋']["$chest_count"] = $menu->menu;
                $chest_count += 1;
            } elseif ($menu->target_body == '腹筋') {
                $sample['腹筋']["$abdominal_count"] = $menu->menu;
                $abdominal_count += 1;
            } elseif ($menu->target_body == '背筋') {
                $sample['背筋']["$back_count"] = $menu->menu;
                $back_count += 1;
            } elseif ($menu->target_body == '下半身') {
                $sample['下半身']["$lower_count"] = $menu->menu;
                $lower_count += 1;
            }
        }
        $sampleJson = json_encode($sample);
        $check_todo =todo::where('user_id',Auth::id())->exists();

        // 日付関連
        $main_day = request()->fullUrl();
        $url_day = str_replace('=', '', substr($main_day, strpos($main_day, '?') + 1));
        $Carbon_day = new Carbon($url_day);
        $sub_day = $Carbon_day->subDay();
        $sub_day = date('Y-m-d', strtotime($sub_day));
        //日付を増やすようにnewを再度使う必要がある
        $Carbon_day = new Carbon($url_day);
        $add_day = $Carbon_day->addDay();
        $add_day = date('Y-m-d', strtotime($add_day));
        $todos = todo::whereDate('date_key',$url_day)->latest()->get();

        // 曜日
        $week = [
            '日', //0
            '月', //1
            '火', //2
            '水', //3
            '木', //4
            '金', //5
            '土', //6
        ];
        $english_week = [
            'Sunday', //0
            'Monday', //1
            'Tuesday', //2
            'Wednesday', //3
            'Thursday', //4
            'Friday', //5
            'Saturday', //6
        ];

        return view('muscle-quest.todo')->with(['sampleJson'=>$sampleJson,'menus'=>$menus,'todos' => $todos , 'check_todo' => $check_todo, 'url_day' => $url_day, 'add_day' =>$add_day, 'sub_day' => $sub_day, 'week' => $week, 'english_week' => $english_week]);
    }
    

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'target_body' => 'required' ,
            'menu' => 'required|max:25',
        ],
        [   'target_body.required' => '部位・タイプをを選択してください',
            'menu.required' => 'メニュー名を入力してください'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error',1)->withInput();
        }

        $user_id =Auth::id();
        $target_body = $request->target_body;
        $menu = $request->menu;

        todo_menu::create([
            'user_id' => $user_id,
            'target_body' => $target_body,
            'menu' => $menu,
        ]);
            return back();
    }

    public function todo_store(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'target_body' => 'required',
                'menu' => 'required',
                'target_unit' => 'required',
                'target_weight' => 'required_without($request->target_body = "aerobic"),($request->target_body ="abdominal")',
            ],
            [
                'target_body.required' => '部位・タイプをを選択してください',
                'menu.required' => 'メニュー名を入力してください'
            ]
        );
        $year = $request->year;
        $month = $request->month;
        $day = $request->date;
        $date_key = $year . $month . $day;
        $user_id = Auth::id();
        $target_body = $request->target_body;
        if ($target_body == "有酸素") {
            $target_name="aerobic";
        }
        if ($target_body == "肩") {
            $target_name="shoulder";
        }
        if ($target_body == "腕") {
            $target_name="arm";
        }
        if ($target_body == "胸筋") {
            $target_name="chest";
        }
        if ($target_body == "腹筋") {
            $target_name="abdominal";
        }
        if ($target_body == "背筋") {
            $target_name="back";
        }
        if ($target_body == "下半身") {
            $target_name="lower";
        }

        $menu = $request->menu;
        if ($target_body == "有酸素" ) {
            $target_unit = $request->target_unit;
        }else{
            $target_unit = 1;
        }
        $target_number = $request->number;


        if ($target_body == "有酸素" && empty($request->target_weight)) {
                $target_weight =1;
            }else {
                $target_weight = $request->target_weight;
            }

        if ($target_body == "有酸素" && empty($request->target_set)) {
                $target_set =1;
            }else {
                $target_set = $request->target_set;
            }



        todo::create([
            'date_key' => $date_key,
            'user_id' => $user_id,
            'target_body' =>$target_body,
            'target_name' =>$target_name,
            'menu' => $menu,
            'target_unit' => $target_unit,
            'target_weight' => $target_weight,
            'target_set' => $target_set,
            'number' => $target_number,
        ]);
        return back();
    }

    public function check_update(Request $request){
        $todo = todo::findOrFail($request->id);
        if($request->check_id == 0){
            $todo->check_id =1;
        }else{
            $todo->check_id =0;
        }
        $todo->save();

        return back();

    }


}
