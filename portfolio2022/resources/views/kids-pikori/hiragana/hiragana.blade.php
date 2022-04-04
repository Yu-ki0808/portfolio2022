@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')
<head>
    <title>ひらがな一覧学習</title>
</head>

<div class="container text-center">
    <div class="mt-3 hiragana-title">
          <h2 class="fs-3 fw-bold">ひらがなプログラム</h2>
            <h3>ひらがな一覧</h3>
      </div>
    <div class="d-flex justify-content-center">
        <div class="d-flex scroll">
            <table class="table table-bordered">
            <tbody>
                <tr>
                    @foreach($oneLines as $key => $oneLine)
                        <th>
                            @if(!isset($random))
                                <button name="hiragana"  class="btn btn-outline-primary btn-lg fs-5" value="{{ $oneLine}}">{{ $key }}</button>
                                @elseif($random == $oneLine)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{ $key}}</button>
                                    @else
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{ $key}}</button>

                                @endif
                            </th>
                        @endforeach
                </tr>
                @foreach($twoLines as $key => $twoLine)
                        <th>
                            @if($twoLine == "")

                            @elseif(!isset($random))
                            <button class="btn btn-outline-success btn-lg fs-5" value="{{ $twoLine}}">{{ $key}} </button>
                            @elseif($random == $twoLine)
                                    <button type="button"  onclick="seikai();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  value="{{ $twoLine}}" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{ $key}} </button>
                                    @else
                                        <button type="button" onclick="bathu();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  value="{{ $twoLine}}" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{ $key }}</button>
                            @endif
                        </th>
                        @endforeach
                </tr>
                </tr>
                @foreach($threeLines as $key => $threeLine)
                        <th>
                            @if($threeLine == "")

                                @elseif(!isset($random))
                            <button class="btn btn-outline-danber btn-lg fs-5" value="{{ $threeLine}}">{{ $key}} </button>
                            @elseif($random == $threeLine)
                                    <button type="button"  onclick="seikai();" class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="{{ $threeLine}}"  title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{ $key}} </button>
                                    @else
                                        <button type="button" onclick="bathu();"  class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="{{ $threeLine}}"  title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{ $key}} </button>
                                @endif
                        </th>
                        @endforeach
                </tr>
                </tr>
                @foreach($fourLines as $key => $fourLine)
                        <th>
                            @if($fourLine == "")
                                @elseif(!isset($random))
                            <button class="btn btn-outline-warning btn-lg fs-5" value="{{ $fourLine}}">{{ $key}} </button>
                            @elseif($random == $fourLine)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="{{ $fourLine}}"  title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{ $key}}</button>
                                    @else
                                        <button type="button" onclick="bathu();"  class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="{{ $fourLine}}"  title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{ $key}}</button>

                                @endif
                        </th>
                        @endforeach
                </tr>
                </tr>
                @foreach($fiveLines as $key => $fiveLine)
                        <th>
                            @if($fiveLine == "")
                                @elseif(!isset($random))
                            <button class="btn btn-outline-info btn-lg fs-5" value="{{ $fiveLine}}">{{ $key}} </button>
                            @elseif($random == $fiveLine)
                                    <button type="button"  onclick="seikai();" class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="{{ $fiveLine}}"  title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{ $key}}</button>
                                    @else
                                        <button type="button" onclick="bathu();"  class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="{{ $fiveLine}}"  title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{ $key }}</button>

                                @endif
                        </th>
                        @endforeach
                </tr>
            </tbody>
            </table>
        </div>
    </div>
            ※スクロールできます。
    <div>
        <p class="fs-4"><button class="btn btn-dark btn-lg fs-3">{{ $arr[$random] }}</button>を探してクリックしてみよう！！</p>
    </div>
</div>
        @include('layouts.kids-pikori.kids-contents-under')
    </div>

@endsection
