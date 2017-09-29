@extends('layoutview')
@section('head')
    <title>修改密码</title>
@stop
@section('body')
    @include('layouts.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-top: 20px">
                    <div class="panel-heading">修改密码</div>
                    <div class="panel-body">
                        <div class="col-md-7 col-md-offset-2">
                            <form class="form-horizontal" action="{{ url('/reset/update') }}" role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="old_password" class="col-md-4 control-label">原始密码：</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="原始密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">输入新密码：</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="输入新密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="col-md-4 control-label">确认新密码：</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="确认新密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary btn-block">更改密码</button>
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
