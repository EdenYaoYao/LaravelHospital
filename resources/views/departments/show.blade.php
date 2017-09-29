@extends('layoutview')
@section('head')
    <title>{{$messages->title}}</title>
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
                <div class="page-header">
                    <h3>{{$messages->title}}</h3>
                    <small>
                        创建于：{{ $messages->created_at }}
                    </small>
                </div>
                <p class="font_ps">{!! $messages->content !!}</p>
            </div>



            <div class="col-xs-12 visible-xs visible-sm">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="xs_border">
                    <div class="page-header">
                        <h3>{{$messages->title}}</h3>
                        <small>
                            创建于：{{ $messages->created_at }}
                        </small>
                    </div>
                    <p class="font_ps">{!! $messages->content !!}</p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.bottom')
@stop