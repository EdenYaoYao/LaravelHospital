{{--导航栏部分--}}
<nav class="navbar navbar-default no-border-radius" style="margin-bottom: 0px;min-height: 60px">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="min-height: 60px">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="padding: 5px 0px 0px 0px">
                <img class="" src="/img/hos-logo.png" alt="hos_img">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/articles">医院概况</a></li>
                <li class="dropdown">
                    <a href="/news" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        医院新闻<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/news/notice">通知公告</a></li>
                        <li class="divider"></li>
                        <li><a href="/news/media_focus">媒体聚焦</a></li>
                    </ul>
                </li>
                <li><a href="/professor">专家介绍</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        科室介绍<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/department/surgical">内科系统</a></li>
                        <li class="divider"></li>
                        <li><a href="/department/medicine">外科系统</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        就诊流程<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/needs">就诊须知</a></li>
                        <li class="divider"></li>
                        <li><a href="/time">就诊时间</a></li>
                        <li class="divider"></li>
                        <li><a href="/outpatient">门诊就诊流程</a></li>
                        <li class="divider"></li>
                        <li><a href="/emergency">急诊就诊流程</a></li>
                    </ul>
                </li>
                <li><a href="/health">健康知道</a></li>
                <li><a href="/contact">医院导航</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fa-icon icon-user">
                            </i>
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="min-width: 120px;left: 0!important;">
                            <li>
                                <a href="/reset">
                                    <i class="fa-icon icon-edit"></i>修改密码
                                </a>
                            </li>
                                <li>
                                <a href="/auth/logout">
                                    <i class="fa-icon icon-signout"></i>退出登录
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                <li><a href="/auth/register">注册</a></li>
                <li><a href="/auth/login"><i class="fa-icon icon-signin"></i>登录</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>


