@extends('layouts.kids-pikori.contents-header')
@section('kids-contents')


<div class="text-center">
    <div class="direction-title mt-3">
        <h2 class="fs-3 fw-bold mt-3">順序と方向プログラム</h2>
        <h3>上下左右</h3>
    </div>
    <div class="d-flex justify-content-center">
        <div class="d-flex scroll">
            <table class="table table-borderless">
            <tbody>
                <tr>
                    @foreach($oneLines as $key => $line)
                        @if($line ==""):
                            <th></th>
                        @else
                        <th>
                            @if($random == $key)
                        <button type="button"  value="{{$key}}" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/kids-pikori/seikai.png width=150px> " >
                        <img src="{{$line}}" width="120px">
                    </button>
                    @else
                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >
                            <img src="{{$line}}" width="120px">
                        </button>
                        @endif
                        </th>
                        @endif
                        @endforeach
                </tr>

                <tr>
                    @foreach($twoLines as $key => $line)
                        <th>
                        @if($random == $key)
                        <button type="button"  value="{{$key }}" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/kids-pikori/seikai.png width=150px> " >
                        <img src="{{$line}}" width="100px" height ="100px">
                    </button>
                    @elseif($key == 0)
                        <button class="btn btn-outline-primary btn-lg" value="{{$key}}">
                            <img src="{{$line}}" width="100px" height ="100px">
                    </button>
                    @else
                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >
                            <img src="{{$line}}" width="100px" height ="100px">
                        </button>
                        @endif
                        </th>
                        @endforeach
                    </tr>

                    <tr>
                        @foreach($threeLines as $key => $line)
                            @if($line =="")
                                <th></th>
                            @else
                            <th>
                            @if($random == $key)
                        <button type="button"  value="{{$key}}" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/kids-pikori/seikai.png width=150px> " >
                        <img src="{{$line}}" width="120px">
                    </button>
                    @else
                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/kids-pikori/bathu.png width=150px> " >
                            <img src="{{$line}}" width="120px">
                        </button>
                        @endif
                            </th>
                            @endif
                            @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
    </div>
    <p class="fs-5"><img src="../img/kids-pikori/direction/tree.png" width="75px" height="75px" class="me-3">の{{$direction}}は何（なに）がありますか？</p>
</div>
@include('layouts.kids-pikori.kids-contents-under')
</div>

@endsection




