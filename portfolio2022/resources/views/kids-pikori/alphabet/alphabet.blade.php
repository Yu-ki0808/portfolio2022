@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')

    <div class="text-center">
              <h2 class="fs-3 fw-bold">アルファベットプログラム</h2>
              <h3>アルファベット一覧学習</h3>
              <div class="d-flex alphabet">
                <table class="table table-bordered ">
            <tbody class="alphabet-tbody">
                <tr>
                    @foreach($oneLines as $key => $oneLine)
                        <th>
                        @if($random +1 == $oneLine)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-{{$color}} " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=200px> "> {{$key}}</button>
                                    @else
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-{{$color}} " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=200px> "> {{$key}} </button>
                            </th>
                            @endif
                            @endforeach
                </tr>
               @foreach($twoLines as $key => $twoLine)
                        <th>
                        @if($random +1 == $twoLine)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-{{$color1}} " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=200px> " >{{$key}} </button>
                                    @else
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-{{$color1}} " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=200px> " >{{$key}}</button>
                        </th>
                        @endif
                        @endforeach
                </tr>
                </tr>
            </tbody>
            </table>
        </div>
        ※スクロールできます。
    </div>
    <div>
        <p class="fs-4"><button class="fs-1 mt-3 py-3 px-3 text-light btn-lg btn btn-dark me-2">{{$a[$random] }}</button>を探してクリックしてみよう！！</p>
    </div>
        @include('layouts.kids-pikori.kids-contents-under')
    </div>

@endsection
