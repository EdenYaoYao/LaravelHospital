@extends('layoutview')
@section('head')
    <title>医院导航</title>
@stop
@section('body')
    @include('layouts.returnTop')
    @include('layouts.head')
    @include('layouts.navbar')
    @include('layouts.carousel')
    <div class="container content">
        <div class="row">
            <div class="col-xs-12 visible-xs visible-sm">
                @include('layouts.content_twoparts.content_left_xs')
            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
                @include('layouts.content_twoparts.content_left_min')
            </div>
            <div class="col-md-9 hidden-xs hidden-sm">
                <div style="margin-top: 10px" class="page-header"><h3 class="font_shadow">医院导航</h3></div>
                <div id="allmap"></div>
                <div id="address"></div>
                <div style="margin-top: 18px"><h4><strong>医院位置</strong></h4></div>
                <address>
                    地址：成都市高新南区繁雄大道万象北路18号<br>
                    邮编：610000<br>
                    QQ：496532934<br>
                    电话：028-86914657(急救),028-86915760(北区咨询台),028-85311726(南区咨询台)<br>
                    简介：成都市第一人民医院（成都市中西医结合医院）是成都地区一所以中西医结合为特点的
                    大型现代化三级甲等综合医院。始建于1942年，前身是成都市立医院，1953年更名为成都市第一人民医院。<br>
                </address>
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div style="margin-top: 10px" class="page-header"><h3 class="font_shadow">医院导航</h3></div>
                <div style="margin-top: 18px"><h4><strong>医院位置</strong></h4></div>
                <address>
                    地址：成都市高新南区繁雄大道万象北路18号<br>
                    邮编：610000<br>
                    QQ：496532934<br>
                    电话：028-86914657(急救),028-86915760(北区咨询台),028-85311726(南区咨询台)<br>
                    简介：成都市第一人民医院（成都市中西医结合医院）是成都地区一所以中西医结合为特点的
                    大型现代化三级甲等综合医院。始建于1942年，前身是成都市立医院，1953年更名为成都市第一人民医院。<br>
                </address>
            </div>

        </div>
    </div>
    @include('layouts.bottom')
@stop