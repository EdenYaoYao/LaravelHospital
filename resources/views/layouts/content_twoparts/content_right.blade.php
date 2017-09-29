<div style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-top: 10px" class="page-header">
                        <a href="/news/notice" class="font_shadow">通知公告</a>
                    </div>
                    @foreach ($notices as $notice)
                        <div class="content_list">
                            <a class="a_none" href="/news/notice/{{$notice->id}}">
                                <i class="icon-hand-right"></i>
                                @if(mb_strlen($notice->title,'UTF8') > '16')
                                    {{ mb_substr($notice->title,0,15,'UTF8') }}...
                                    @else
                                    {{ $notice->title }}
                                @endif
                                <i class="float_right">{{ substr($notice->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_1">
                    @endforeach
                </div>
                <div class="col-md-6">
                    <div style="margin-top: 10px" class="page-header">
                        <a href="/news/media_focus" class="font_shadow">媒体聚焦</a>
                    </div>
                    @foreach ($focuses as $focus)
                        <div class="content_list">
                            <a class="a_none" href="/news/media_focus/{{$focus->id}}">
                                <i class="icon-hand-right"></i>
                                @if(mb_strlen($focus->title,'UTF8') > '16')
                                    {{ mb_substr($focus->title,0,15,'UTF8') }}...
                                @else
                                    {{ $focus->title }}
                                @endif
                                <i class="float_right">{{ substr($focus->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_1">
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" style="height: auto;">
            <div style="margin-top: 10px" class="page-header">
                <a href="/professor" class="font_shadow">专家风采</a>
            </div>
            <div class="row">
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
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-top: 10px" class="page-header">
                        <a href="/department/surgical" class="font_shadow">内科介绍</a>
                    </div>
                    @foreach ($surgicals as $surgical)
                        <div class="content_list">
                            <a class="a_none" href="/department/surgical/{{$surgical->id}}">
                                <i class="icon-double-angle-right"></i>
                                {{$surgical->title}}
                                <i class="float_right">{{ substr($surgical->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_1">
                    @endforeach
                </div>
                <div class="col-md-6">
                    <div style="margin-top: 10px" class="page-header">
                        <a href="/department/medicine" class="font_shadow">外科介绍</a>
                    </div>
                    @foreach ($medicines as $medicine)
                        <div class="content_list">
                            <a class="a_none" href="/department/medicine/{{$medicine->id}}">
                                <i class="icon-double-angle-right"></i>
                                {{$medicine->title}}
                                <i class="float_right">{{ substr($medicine->created_at, 0, -9) }}</i>
                            </a>
                        </div>
                        <hr class="hr_1">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


