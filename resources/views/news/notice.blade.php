@extends('layoutview')
@section('head')
    <title>通知公告</title>
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
                    <h2 class="font_shadow">通知公告</h2>
                </div>
                @foreach ($news as $new)
                    <a class="a_none" href="/news/notice/{{$new->id}}">
                        <div>
                            {{$new->title}}
                            <i class="float_right">{{ substr($new->created_at, 0, -9) }}</i>
                        </div>
                        <hr>
                    </a>
                @endforeach
                <div>
                    {!! $news->render() !!}
                </div>
            </div>


            <div class="col-xs-12 visible-xs visible-sm ">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="xs_border">
                    <div class="page-header">
                        <h2 class="font_shadow">通知公告</h2>
                    </div>
                    @foreach ($news as $new)
                        <a class="a_none" href="/news/notice/{{$new->id}}">
                            <div>
                                {{$new->title}}
                                <i class="float_right">{{ substr($new->created_at, 0, -9) }}</i>
                            </div>
                            <hr>
                        </a>
                    @endforeach
                    <div>
                        {!! $news->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.bottom')
@stop
