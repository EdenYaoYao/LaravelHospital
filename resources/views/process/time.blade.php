@extends('layoutview')
@section('head')
    <title>就诊时间</title>
@stop
@section('body')
    @include('layouts.returnTop')
    @include('layouts.head')
    @include('layouts.navbar')
    @include('layouts.carousel')
    <div class="container content">
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm">
                @include('layouts.content_twoparts.content_left_min')
            </div>
            <div class="col-md-9 hidden-xs hidden-sm">
                <div style="margin-top: 10px" class="page-header">
                    <h2 class="font_shadow">{{ $times->title }}</h2>
                </div>
                <div>{!! $times->content !!}</div>
            </div>

            <div class="col-xs-12 visible-xs visible-sm ">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="xs_border">
                    <div style="margin-top: 10px" class="page-header" >
                        <h2 class="font_shadow">{{ $times->title }}</h2>
                    </div>
                    <div>{!! $times->content !!}</div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.bottom')
@stop