@extends('layoutview')
@section('head')
    <title>注册</title>
@stop
@section('body')
    @include('layouts.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-top: 20px">
                    <div class="panel-heading">用户注册</div>
                    <div class="panel-body">
                        <div class="col-md-7 col-md-offset-2">
                            <form class="form-horizontal" action="{{ url('/auth/register') }}" role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">姓名：</label>
                                    <div class="col-md-9">
                                        <input id="name" type="text" class="form-control" name="name" placeholder="姓名" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">邮箱：</label>
                                    <div class="col-md-9">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="邮箱" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">密码：</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="col-md-3 control-label">确认密码：</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="确认密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">注册</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-md-offset-3" style="margin-top: 22px;margin-bottom: 0;">
                            @include('common.errors')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop