@extends('layoutview')
@section('head')
    <title>健康知道</title>
@stop
@section('body')
    @include('layouts.returnTop')
    @include('layouts.head')
    @include('layouts.navbar')
    @include('layouts.carousel')
    <div class="container content">
        <div class="row">
            <div class="col-sm-3 hidden-xs hidden-sm">
                @include('layouts.content_twoparts.content_left_min')
            </div>
            <div class="col-sm-9 hidden-xs hidden-sm">
                <div style="margin-top: 10px" class="page-header">
                    <h3 class="font_shadow">健康知道</h3>
                </div>
                @foreach ($healths as $health)
                    <a class="a_none" href="/health/{{$health->id}}">
                        <div>
                            {{$health->title}}
                            <i class="float_right">{{ substr($health->created_at, 0, -9) }}</i>
                        </div>
                        <hr>
                    </a>
                @endforeach
                <div>
                    {!! $healths->render() !!}
                </div>
            </div>


            <div class="col-xs-12 visible-xs visible-sm">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="xs_border">
                    <div style="margin-top: 10px" class="page-header">
                        <h3 class="font_shadow">健康知道</h3>
                    </div>
                    @foreach ($healths as $health)
                        <a class="a_none" href="/health/{{$health->id}}">
                            <div>
                                {{$health->title}}
                                <i class="float_right">{{ substr($health->created_at, 0, -9) }}</i>
                            </div>
                            <hr>
                        </a>
                    @endforeach
                    <div>
                        {!! $healths->render() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.bottom')
@stop