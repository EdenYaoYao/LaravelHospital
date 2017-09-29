<div class="xs_border">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div style="margin-top: 5px" class="page-header">
                        <a href="/news/notice" class="font_shadow">通知公告</a>
                        <a href="/news/notice" class="float_right a_none_1">更多
                            <i class="icon-double-angle-right"></i>
                        </a>
                    </div>
                    @foreach ($notices as $notice)
                        <div class="content_list">
                            <a class="a_none" href="/news/notice/{{$notice->id}}">
                                <i class="glyphicon glyphicon-hand-right"></i>
                                @if(mb_strlen($notice->title,'UTF8') > '16')
                                    {{ mb_substr($notice->title,0,15,'UTF8') }}...
                                @else
                                    {{ $notice->title }}
                                @endif
                                <i class="float_right">{{ substr($notice->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_3">
                    @endforeach
                </div>
                <div class="col-xs-12">
                    <div style="margin-top: 5px" class="page-header">
                        <a href="/news/media_focus" class="font_shadow">媒体聚焦</a>
                        <a href="/news/media_focus" class="float_right a_none_1">更多
                            <i class="icon-double-angle-right"></i>
                        </a>
                    </div>
                    @foreach ($focuses as $focus)
                        <div class="content_list">
                            <a class="a_none" href="/news/media_focus/{{$focus->id}}">
                                <i class="glyphicon glyphicon-hand-right"></i>
                                @if(mb_strlen($focus->title,'UTF8') > '16')
                                    {{ mb_substr($focus->title,0,15,'UTF8') }}...
                                @else
                                    {{ $focus->title }}
                                @endif
                                <i class="float_right">{{ substr($focus->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_3">
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12" style="height: auto;">
            <div style="margin-top: 10px" class="page-header">
                <a href="/professor" class="font_shadow">专家风采</a>
                <a href="/professor" class="float_right a_none_1">更多
                    <i class="icon-double-angle-right"></i>
                </a>
            </div>
            @foreach($doctors as $doctor)
                <div class="col-xs-6">
                    <a href="#" class="thumbnail">
                        <img src="{{$doctor->image}}" alt="doctor">
                        <div class="caption">
                            <p style="text-align: center">{{$doctor->name}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div style="margin-top: 5px" class="page-header">
                        <a href="/department/surgical" class="font_shadow">内科介绍</a>
                        <a href="/department/surgical" class="float_right a_none_1">更多
                            <i class="icon-double-angle-right"></i>
                        </a>
                    </div>
                    @foreach ($surgicals as $surgical)
                        <div class="content_list">
                            <a class="a_none" href="/department/surgical/{{$surgical->id}}">
                                <i class="icon-double-angle-right"></i>
                                {{$surgical->title}}
                                <i class="float_right">{{ substr($surgical->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_3">
                    @endforeach
                </div>
                <div class="col-xs-12">
                    <div style="margin-top: 5px" class="page-header">
                        <a href="/department/medicine" class="font_shadow">外科介绍</a>
                        <a href="/department/medicine" class="float_right a_none_1">更多
                            <i class="icon-double-angle-right"></i>
                        </a>
                    </div>
                    @foreach ($medicines as $medicine)
                        <div class="content_list">
                            <a class="a_none" href="/department/medicine/{{$medicine->id}}">
                                <i class="icon-double-angle-right"></i>
                                {{$medicine->title}}
                                <i class="float_right">{{ substr($medicine->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_3">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>