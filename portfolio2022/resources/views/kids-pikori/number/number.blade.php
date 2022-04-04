@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')

  <div class="container text-center">
        <div class="mt-3 number-title">
            <h2 class="fs-3 fw-bold">数字プログラム</h2>
                <h3>数字を探す学習（５０まで）</h3>
        </div>
              <div class="d-flex scroll">
                <table class="table table-bordered">

            <tbody>
                <tr>
                        @foreach($oneLines as $key => $oneline)
                        <th>
                            @if($random -1 == $key)
                                <button type="button" onclick="seikai();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{$oneline}}</button>
                            @else
                                 <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{$oneline}}</button>
                            </th>
                            @endif
                            @endforeach
                </tr>
                <tr>
                    @foreach($twoLines as $key => $twoline)
                        <th>
                            @if($random -1 == $key +10)
                               <button type="button" onclick="seikai();" class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{$twoline}}</button>
                            @else
                                 <button type="button"  onclick="bathu();" class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{$twoline}}</button>
                            </th>
                            @endif
                            @endforeach
                </tr>
                <tr>
                    @foreach($threeLines as $key => $threeline)
                        <th>
                        @if($random -1 == $key + 20)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{$threeline}}</button>
                                    @else
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{$threeline}}</button>
                            </th>
                            @endif
                        @endforeach
                </tr>
                <tr>
                    @foreach($fourLines as $key => $fourline)
                        <th>
                        @if($random -1 == $key + 30)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{$fourline }}</button>
                                    @else
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{$fourline }}</button>
                            </th>
                            @endif
                        @endforeach
                </tr>
                <tr>
                    @foreach($fiveLines as $key => $fiveline)
                        <th>
                        @if($random -1 == $key + 40)
                                    <button type="button" onclick="seikai();" class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/seikai.png width=150px> " >{{$fiveline }}</button>
                                    @else
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >{{$fiveline }}</button>
                            </th>
                            @endif
                        @endforeach
                </tr>
            </tbody>
            </table>
        </div>
        ※スクロールできます。
    </div>

    <div>
        <p class="fs-4 mt-3"><button class=" btn btn-dark btn-lg fs-3 ">{{$random}}</button>を探してクリックしてみよう！！</p>
    </div>
            @include('layouts.kids-pikori.kids-contents-under')
        </div>



@endsection
