@extends('layoutview')
@section('head')
    <title>专家介绍</title>
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
            <div class="col-xs-12 visible-xs visible-sm">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-md-9">
                <div class="page-header">
                    <h3>{{$doctors->name}}</h3>
                </div>
                <img src="{{ $doctors->image }}" alt="image">
                <div class="page-header">
                   <h4>人物详情</h4>
                </div>
                <div class="col-md-9">
                    <table class="table table-bordered ">
                        <tbody>
                        <tr>
                            <th class="active">性别：</th>
                            <td>
                                @if($doctors->sex == 0)
                                    男
                                @else
                                    女
                                @endif
                            </td>
                            <th class="active">毕业院校：</th>
                            <td>{{ $doctors->graduate }}</td>
                        </tr>
                        <tr>
                            <th class="active">专业：</th>
                            <td>{{ $doctors->major }}</td>
                            <th class="active">技术职称：</th>
                            <td>{{ $doctors->position }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">{{ $doctors->info }}</div>
            </div>

        </div>
    </div>
    @include('layouts.bottom')
@stop