{{--for badges for certain competative year--}}
@if (@$badge_list && $badge_list->count())
<div class="row p-b-1">
    <div class="col-xs-2 text-xs-right">
        <img src="/img/badges/{{ $badge_list->get()[0]->filename }}" class="badge"/>
    </div>
    <div class="col-xs-10">
        <strong>{{ $badge_list->get()[0]->name }}</strong><br/>
        {{ $badge_list->get()[0]->description }}<br/>
        <div class="small-text">
            @foreach($badge_list->get() as $badge)
                @if ($badge->users()->count())
                    <?php $bcount = $badge->users()->count() ?>
                    <div>
                        <strong>"{{ $badge->year }}"</strong> belonging to {{ $bcount }} user{{ $bcount > 1 ? 's' : '' }}{{ $bcount ? ':' : '' }}
                        @if ($bcount)
                            {{--show button--}}
                            @if ($bcount > 20)
                                <a onclick="showBadgeUsers({{$badge->id}})" class="btn btn-xs btn-primary white-text" id="button-show-{{$badge->id}}">show</a>
                            @endif
                            {{--list users--}}
                            <span id="users-badge-{{ $badge->id }}" {{ $bcount > 20 ? 'class=hidden-xs-up' : '' }}>
                            @foreach($badge->users()->get() as $key=>$badgeuser)
                                <a href="/profile/{{ $badgeuser->id }}" class="{{ $badgeuser->linkClass() }}">{{ $badgeuser->displayUsername() }}</a>{{ $key != $bcount-1 ? ',' : ''}}
                            @endforeach
                            </span>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endif
