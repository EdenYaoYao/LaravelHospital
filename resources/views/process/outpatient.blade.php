@extends('layoutview')
@section('head')
    <title>门诊就诊流程</title>
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
                    <h2 class="font_shadow">门诊就诊流程</h2>
                </div>
                <div style="text-align: center"><img style="height: 650px;width: auto" src="/img/Outpatient.jpg" alt="Outpatient"></div>
            </div>

            <div class="col-xs-12 visible-xs visible-sm ">
                @include('layouts.content_twoparts.content_left_xs')
                <hr>
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="xs_border">
                    <div class="page-header">
                        <h2 class="font_shadow">门诊就诊流程</h2>
                    </div>
                    <div style="text-align: center"><img style="height: 650px;width: 250px" src="/img/Outpatient.jpg" alt="Outpatient"></div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.bottom')
@stop