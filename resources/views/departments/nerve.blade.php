@extends('layoutview')
@section('head')
    <title>神经内科</title>
@stop
@section('body')
    @include('layouts.returnTop')
    @include('layouts.head')
    @include('layouts.navbar')
    @include('layouts.carousel')
    <div class="container content">
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm">
                @include('layouts.content_twoparts.content_left')
            </div>
            <div class="col-md-9 hidden-xs hidden-sm">
                <div style="margin-top: 10px" class="page-header">
                    <h2 class="font_shadow">神经内科</h2>
                </div>
                @foreach($doctors as $doctor)
                    <div class="col-md-3">
                        <a href="/doctor/{{ $doctor->id }}" class="thumbnail">
                            <img src="{{$doctor->image}}" alt="doctor">
                            <div class="caption">
                                <p style="text-align: center">{{$doctor->name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>


            <div class="col-xs-12 visible-xs visible-sm">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="page-header">
                    <h2 class="font_shadow">神经内科</h2>
                </div>
                @foreach($doctors as $doctor)
                    <div class="col-xs-6">
                        <a href="/doctor/{{ $doctor->id }}" class="thumbnail">
                            <img src="{{$doctor->image}}" alt="doctor">
                            <div class="caption">
                                <p style="text-align: center">{{$doctor->name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    @include('layouts.bottom')
@stop