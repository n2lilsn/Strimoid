<li class="dropdown notifications_dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="glyphicon glyphicon-globe notifications_icon @if ($newNotificationsCount > 0) notifications_icon_new @endif"></span> <b class="caret"></b>
        <span class="badge @if (!$newNotificationsCount) hide @endif">{!! $newNotificationsCount !!}</span>
    </a>

    <div class="dropdown-menu notifications" data-new-notifications="{!! intval($newNotificationsCount) !!}">
        <div class="notifications_scroll">
            <div class="notifications_list">
                @foreach ($notifications as $notification)
                    <a href="{!! $notification->getURL() !!}" class="@if (!$notification->read) new @endif" data-id="{!! $notification->hashId() !!}">
                        @if ($notification->user)
                            <img src="{!! $notification->user->getAvatarPath() !!}" class="pull-left">
                        @endif

                        <div class="media-body">
                            {!! $notification->title !!}

                            <br>
                            <small class="pull-left">
                                {!! $notification->getTypeDescription() !!}
                            </small>
                            <small class="pull-right">
                                <time pubdate title="{!! $notification->getLocalTime() !!}">{!! $notification->created_at->diffForHumans() !!}</time>
                            </small>
                        </div>

                        <div class="clearfix"></div>
                    </a>
                @endforeach

                @if (!count($notifications))
                    <a>Nie posiadasz żadnych powiadomień.</a>
                @endif
            </div>
        </div>

        <div class="notifications_footer">
            <a href="/notifications">Wszystkie</a>
            <a class="mark_as_read_link action_link pull-right">Oznacz jako przeczytane</a>
        </div>
    </div>
</li>
