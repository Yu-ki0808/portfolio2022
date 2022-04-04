@extends('adminlte::page')


@section('title', '運動記録')

@section('content_header')
@extends('layouts.muscle-quest.login-muscle-quest')

    @stop


@section('content')
    <div class="contaner text-center profile-contents ">
        <h2 class="pt-4">プロフィール</h2>

        <div class="profile-area ">
            @if(Auth::user()->gender ==1)
            <img src="{{asset('img/muscle-quest/boy.png')}}" alt="" class="gender-img">
            @else
            <img src="{{asset('img/muscle-quest/girl.png')}}" alt="" class="gender-img">
            @endif
            <div class="profile-content">
                <p>name:<span class="ms-1">{{Auth::user()->name}}</span></p>
                <p>height:<span class="ms-1">{{Auth::user()->height}}cm</span></p>
            <p>Age:<span class="ms-1">{{floor(($today -  str_replace('-', '', Auth::user()->birthday))/10000)}}歳</span></p>
        </div>
        <div class="profile-content">
                </p>
                <p>Lv:<span class="ms-1">{{Auth::user()->Lv}}</span></p>
                <p>EXP:<span class="ms-1">{{Auth::user()->EXP}}</span></p>
                    <p><meter  value="{{Auth::user()->EXP}}" optimum="{{$max_exp->EXP *0.5}}" min="{{$min_exp->EXP}}"   low="{{intval($max_exp->EXP * 0.6)}}" high="{{intval($max_exp->EXP * 0.8)}}" max="{{$max_exp->EXP}}"style="height: 30px";></meter></p>
            </div>
        </div>
        <h2 class="pt-4">データ</h2>
        <div class="profile-area ">
            <div class="profile-content">
                <img src="{{asset('img/muscle-quest/stutas.png')}}" alt="" class="status-img"><Br>
            <button type="button" class="btn btn-outline-primary my-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">データを入力</button>

                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th scope="col">項目</th>
                            <th scope="col">結果</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">体重</th>
                            <td>
                                 @if(empty($weight_record))
                                {{Auth::user()->weight}} <span class="fw-bold ">Kg</span></span>
                                @else
                                {{$weight_record->weight}} <span class="fw-bold ">Kg</span>
                                @endif
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">筋肉量</th>
                            <td>
                                 @if(empty($weight_record))
                                <span class="fw-bold ">入力無し</span></span>
                            @else
                            {{$weight_record->muscle_mass}} <span class="fw-bold ">Kg</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">体脂肪率</th>
                        <td>
                                 @if(empty($weight_record))
                            <span class="fw-bold ">入力無し</span></span>
                         @else
                         {{$weight_record->body_fat}} <span class="fw-bold ">%</span>
                         @endif
                        </td>
                    </tr>
                </tbody>
            </table>
                                 @if(empty($weight_record))
            {{substr(Auth::user()->created_at,0,10)}}<span class="ms-1 fw-bold">時点</span>
                 @else
                     {{substr($weight_record->created_at,0,10)}}<span class="ms-1 fw-bold">時点</span>
                  @endif

                </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@stop
