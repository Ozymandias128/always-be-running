{{--Personal page - Tournaments tab content--}}
@include('tournaments.modals.claim')
<div class="row">
    <div class="col-lg-8 push-lg-4 col-xs-12">
        {{--Notification for claim--}}
        <div class="alert alert-warning view-indicator notif-red notif-badge-page hidden-xs-up" id="notif-toclaim" data-badge="">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            You have tournament spots waiting to be claimed.
        </div>
        {{--Notification for broken claim--}}
        <div class="alert alert-warning view-indicator notif-red notif-badge-page hidden-xs-up" id="notif-brokenclaim" data-badge="">
            <i class="fa fa-chain-broken" aria-hidden="true"></i>
            You have broken claims. Probably you deleted the decks you claimed with. Please remove claim and add new one.
        </div>
        <div class="bracket">
            @include('tournaments.partials.tabledin',
            ['columns' => ['title', 'location', 'date', 'cardpool', 'user_claim'],
            'title' => 'My tournaments', 'subtitle' => 'tournaments I registered to',
             'id' => 'my-table', 'icon' => 'fa-list-alt', 'loader' => true, 'doublerow' => true])
        </div>
    </div>
    <div class="col-lg-4 pull-lg-8 col-xs-12">
        {{--My calendar--}}
        <div class="bracket">
            <h5>
                <i class="fa fa-calendar" aria-hidden="true"></i>
                My calendar<br/>
                <small>tournaments I registered to</small>
                @include('partials.calendar')
            </h5>
        </div>
        {{--My map--}}
        <div class="bracket">
            <h5>
                <i class="fa fa-globe" aria-hidden="true"></i>
                My map<br/>
                <small>tournaments I registered to</small>
            </h5>
            <div class="map-wrapper">
                <div id="mymap" style="height: 100%"></div>
            </div>
        </div>
    </div>
</div>