@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')

<head>
    <title>順序の学習</title>
</head>


<div class=" text-center">
    <div class="direction-title mt-3">
        <h2 class="fs-2 fw-bold ">順序と方向プログラム</h2>
        <h3 class=>前から後から何番目</h3>
    </div>
    <div class="d-flex justify-content-center">
            <div class="d-flex scroll">
                <table class="table table-borderless order">
                    <tbody>
                    <tr>
                        @foreach ($Lines as $key => $Line)
                            <th>
                                @if ($number == $key)
                                    <button type="button" value="{{$key}}" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover" data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=200px> ">
                                        <img src="{{$Line}}">
                                        </button>
                                    @else
                                        <button type="button" onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover" data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=200px> ">
                                            <img src="{{$Line}}" >
                                        </button>

                                    @endif
                            </th>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <p class="fs-5 my-5"> @if ($front_back == 1) 前（まえ）から @else 後（うしろ）から @endif {{$random}}番目（ばんめ）は誰（だれ）ですか？</p>

        </div>
            @include('layouts.kids-pikori.kids-contents-under')
    </div>
</div>
@endsection
