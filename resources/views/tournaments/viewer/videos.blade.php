{{--Videos--}}
<h5 class="m-t-2">
    <i class="fa fa-video-camera" aria-hidden="true"></i>
    Videos
    @if (count($tournament->videos))
        <span class="user-counts">({{ count($tournament->videos) }})</span>
    @else
        <span class="user-counts">- no videos yet</span>
    @endif
    @if ($user)
        <button class="btn btn-primary btn-xs pull-right" id="button-add-videos"
                onclick="toggleVideoAdd(true)">
            <i class="fa fa-video-camera" aria-hidden="true"></i> Add videos
        </button>
        <button class="btn btn-primary btn-xs hidden-xs-up pull-right" id="button-done-videos"
                onclick="toggleVideoAdd(false)">
            <i class="fa fa-check" aria-hidden="true"></i> Done
        </button>
    @endif
</h5>
{{--Add video--}}
@if ($user)
    <div id="section-add-videos" class="hidden-xs-up text-xs-center card-darker m-t-1 p-b-1">
        <hr/>
        <div class="p-b-1">
            Add a video
        </div>
        {!! Form::open(['method' => 'POST', 'url' => "/videos",
            'class' => 'form-inline', 'id' => 'form-videos']) !!}
        {!! Form::hidden('tournament_id', $tournament->id) !!}
        <div class="form-group">
            {!! Form::label('video_id', 'Video ID or URL', ['class' => 'small-text']) !!}
            {!! Form::text('video_id', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-check m-l-1">
            <label class="form-check-label small-text">
                <input class="form-check-input" type="radio" name="type" id="radio-youtube" value="1" checked>
                Youtube
            </label>
        </div>
        <div class="form-check m-l-1">
            <label class="form-check-label small-text">
                <input class="form-check-input" type="radio" name="type" id="radio-twitch" value="2">
                Twitch
            </label>
        </div><br/>
        {!! Form::button('Add video', array('type' => 'submit',
            'class' => 'btn btn-success btn-xs', 'id' => 'button-add-video')) !!}
        {!! Form::close() !!}
    </div>
    <hr/>
@endif
{{--List of videos--}}
@if (count($tournament->videos) > 0)
    @include('tournaments.viewer.videolist',
        ['videos' => $tournament->videos, 'creator' => $tournament->creator, 'id' => 'table-videos'])
@endif
<div id="section-watch-video" class="hidden-xs-up text-xs-center">
    <hr/>
    <div id="section-video-player"></div>
    <div id="tagged-users"></div>
    <button class="btn btn-danger btn-xs" onclick="watchVideo(false)">
        <i class="fa fa-window-close" aria-hidden="true"></i> Close
    </button>
</div>