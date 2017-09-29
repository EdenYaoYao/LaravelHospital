<ul class="list-group list-no-border-radius" role="tablist">
    @foreach($lists as $list)
        <li class="list-group-item">
            <i class="fa-icon icon-user"></i>
            <a class="a_none" href="{{$list->url}}">{{$list->name}}</a>
        </li>
    @endforeach
</ul>