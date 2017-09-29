{{--内容部分--}}
<div class="container content">
    <div class="row">
        <div class="col-xs-12 visible-xs visible-sm ">
            @include('layouts.content_twoparts.content_left_xs')
        </div>
        <div class="col-md-3 hidden-xs hidden-sm">
            @include('layouts.content_twoparts.content_left')
        </div>
        <div class="col-xs-12 visible-xs visible-sm">
            @include('layouts.content_twoparts.content_right_xs')
        </div>
        <div class="col-md-9 hidden-xs hidden-sm">
            @include('layouts.content_twoparts.content_right')
        </div>
    </div>
</div>