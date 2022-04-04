@extends('adminlte::page')


@section('title', '運動記録')

@section('content_header')
@extends('layouts.muscle-quest.login-muscle-quest')

<script>
    let sample  = <?php echo $sampleJson; ?>;
    </script>

    @stop


@section('content')

    <div class="contaner text-center todo">
        <h2>運動・筋トレ記録</h2>
        <img src="{{asset('img/muscle-quest/enpitu.png')}}" alt="">
        <div>
            <button class="btn btn-outline-primary fw-bold btn-down" data-bs-toggle="modal" data-bs-target="#menuAddModal">運動・筋トレメニュー名の追加</button>
            <button class="btn btn-outline-info fw-bold btn-down" data-bs-toggle="modal" data-bs-target="#regiserAddModal">運動・筋トレメニューの登録</button>
        </div>
        <a class="text-white fw-bold" href="{{route('muscle-quest/todo', date('Y-m-d'))}}"><button class="btn  btn-warning btn-lg text-centet mt-3 fw-bold text-white"> 今日の日付</button></a>
        <div class="mt-3 day-button">
                <a class="text-white" href="{{route('muscle-quest/todo', $sub_day)}}"><button class="btn  btn-danger btn-lg"> <<<</button></a>
                <button class="btn text-white fw-bold {{$english_week[date('w',strtotime($url_day))]}} btn-lg">{{$url_day}} {{$week[date('w',strtotime($url_day))]}}</button>
                <a class="text-white" href="{{route('muscle-quest/todo', $add_day)}}"><button class="btn btn-primary btn-lg"> >>></button></a>
        </div>

        <div class="introduction">
            @if($check_todo == true)
            @foreach($todos as $todo)
            @if($todo->target_body == "有酸素")
                <div class="menu-todo">
                    <div class="menu aero-menu  todo-menu bg-info ">
                        <h4>{{$todo->target_body }}</h4>
                        <p>{{$todo->menu}} {{$todo->number}}{{$todo->target_unit}}<BR>
                        <br></p>
                    </div>
                        <div class="menu-check ">
                        <form action="{{route('check.create')}}" method="POST">
                            @csrf
                            @if($todo->check_id ==0)
                            <button class="far fa-square fa-2x" name="check_id" value="{{$todo->check_id}}">
                                <input type="hidden" value="{{$todo->id}}" name="id">
                                @else
                                <button class="far fa-check-square fa-2x" name="check_id" value="{{$todo->check_id}}">
                                    <input type="hidden" value="{{$todo->id}}" name="id">
                            @endif
                        </form>
                    </div>
                </div>
                @else
                <div class="menu-todo">
                    <div class="menu  todo-menu {{$todo->target_name}}" value="{{$todo->target_body}}" id="target_body">
                        <h4>{{$todo->target_body }}</h4>
                        <p>{{$todo->menu}} <br>{{$todo->target_weight}}Kg <BR>
                       {{$todo->target_unit}}回 {{$todo->number}}セット</p>
                    </div>
                        <div class="menu-check ">
                            <form action="{{route('check.create')}}" method="POST">
                                @csrf
                                @if($todo->check_id ==0)
                                <button class="far fa-square fa-2x" name="check_id" value="{{$todo->check_id}}" >
                                    <input type="hidden" value="{{$todo->id}}" name="id">
                                    @else
                                    <button class="far fa-check-square fa-2x" name="check_id" value="{{$todo->check_id}}">
                                        <input type="hidden" value="{{$todo->id}}" name="id">
                            @endif
                            <input type="hidden" value="{{$url_day}}" name="url_day">
                        </form>
                    </div>
                </div>
                @endif
                @endforeach
                @else
                <p class="mt-3">登録されたデータはありません。</p>
                @endif
                </div>
    </div>
    <!-- 運動メニュー名登録Modal -->
    <div class="modal fade" id="menuAddModal" tabindex="-1" aria-labelledby="menuAddModal" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuAddModal">メニュー名の追加</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('todo-create')}}" method="POST">
                        @csrf
                        <div class="modal-body text-center menu-modal">
                            @if( session('error')  ==1)
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            @endif
                            <label for="">部位・タイプ</label><br>
            <select name="target_body" id="" class="text-center py-1 w-75 mb-3" style="text-align:-webkit-center;" >
                <option value="" hidden>選択してください</option>
                <option value="有酸素">有酸素</option>
                <option value="肩">肩</option>
                <option value="腕">腕</option>
                <option value="胸筋">胸筋</option>
                <option value="腹筋">腹筋</option>
                <option value="背筋">背筋</option>
                <option value="下半身">下半身</option>
                </select><Br>
                <label for="">メニュー名</label><br>
                <input type="text" name="menu" class="w-75 mb-3 text-center" ><br>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
            <input type="submit" class="btn btn-primary" value="作成">
        </div>
    </form>
    </div>
</div>
</div>
    <!-- 運動メニュー追加Modal -->
    <div class="modal fade" id="regiserAddModal" tabindex="-1" aria-labelledby="menuAddModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="regiserAddModal">運動・筋トレの追加</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('todo.create')}}" method="POST">
            @csrf
        <div class="modal-body text-center menu-modal">
            @if( session('error')  ==2)
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
            @endif
            <label for="">日付</label><br>
                {{Functions::dayList()}}
                <Br>
                <label for="">部位・タイプ</label><br>
                <select name="target_body" id="parent" class="text-center py-1 w-75 mb-3" style="text-align:-webkit-center;"  required>
                    <option value="" hidden>選択してください</option>
                    <option value="有酸素">有酸素</option>
                    <option value="肩">肩</option>
                    <option value="腕">腕</option>
                    <option value="胸筋">胸筋</option>
                    <option value="腹筋">腹筋</option>
                    <option value="背筋">背筋</option>
                    <option value="下半身">下半身</option>
                    </select><Br>
                    <label for="">メニュー名</label><br>
                    <select id="child" class="text-center py-1 w-75 mb-3" name="menu" required >
                        <option value="" hidden>メニューを選択してください</option>
                    </select><Br>
                    <div id="target_unit">
                        <label for="">目標単位</label><br>
                        <select name="target_unit"  class="text-center py-1 w-75 mb-3"  style="text-align:-webkit-center;" >
                            <option value="" hidden>選択してください</option>
                            <option value="回数">回数</option>
                            <option value="km">Km</option>
                    </select>
                  </div>
                    <div id="set">
                        <label for="">重さ-Kg-（自重の場合は１を入力）</label><br>
                        <input type="number" name="target_weight" class="text-center py-1 w-25 mb-3 me-1" ><br>
                        <label for="">セット数</label><br>
                        <input type="number" name="target_set" class="text-center py-1 w-25 mb-3" ><br>
                    </div>
                    <label for="">目標回数</label><br>
                    <input type="number" name="number" class="text-center py-1 w-25 mb-3" required><br>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                       <input type="submit" class="btn btn-primary" value="作成">
                    </div>
                </form>
        </div>
    </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="levelModal"data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="fw-bold fs-1">レベル{{Auth::user()->Lv}}<span>になりました</h5>
      </div>
      <div class="modal-body text-center">
        <img src="{{asset('img/muscle-quest/level.png')}}" alt="" width="250">
      </div>
      <div class="modal-footer">
        <form action="{{route('session.delete')}}" method="POST">
            @csrf
        <input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
        </form>
      </div>
    </div>
  </div>
</div>

<input id="error_modal_open" class="modal-open" type="hidden" value="{{ session('error') }}">
<input id="level_up" class="modal-open" type="hidden" value="{{session('level')}}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('js/form.js') }}" defer></script>
@stop

