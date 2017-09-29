@extends('layoutview')
@section('head')
    <title>登录</title>
@stop
@section('body')
    @include('layouts.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-top: 20px">
                    <div class="panel-heading">用户登录</div>
                    <div class="panel-body">
                        <div class="col-md-7 col-md-offset-2">
                            <form class="form-horizontal" action="{{ url('/auth/login') }}" role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">邮箱：</label>
                                    <div class="col-md-9">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="邮箱">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">密码：</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="captcha" class="col-md-3 control-label">验证码：</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="captcha" placeholder="验证码">
                                        <a id="refresh_captcha">
                                            <img src="{{ captcha_src() }}"
                                                 alt="验证码"
                                                 title="刷新图片"
                                                 id="captcha"
                                                 width="160"
                                                 height="46"
                                                 border="0"
                                                 data-captcha-config="default"
                                            >
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <label>
                                            <input type="checkbox" name="remember"> 记住密码
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">登录</button>
                                        <a href="password" class="btn btn_link">忘记密码？</a>
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
