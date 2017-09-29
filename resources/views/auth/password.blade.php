@extends('layoutview')
@section('head')
    <title>忘记密码</title>
@stop
@section('body')
    @include('layouts.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-top: 20px">
                    <div class="panel-heading">选择用户邮箱</div>
                    <div class="panel-body">
                        <div class="col-md-7 col-md-offset-2">
                            <form class="form-horizontal" action="{{ url('#') }}" role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">用户邮箱：</label>
                                    <div class="col-md-9">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="请填入需要修改密码的用户邮箱" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <a type="submit" class="btn btn-primary btn-block" href="password/forget">进入修改密码操作</a>
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
