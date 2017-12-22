<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

{{--Navigation bar--}}
<nav class="navbar navbar-dark bg-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="/#">
            <img src="/favicon-96x96.png" class="navbar-brand-image image-30x30"/>
            <span class="hidden-md-up">ABR</span>
            <span class="hidden-sm-down">Always be Running.net</span>
        </a>
        <button class="navbar-toggler hidden-lg-up pull-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1">
            &#9776;
        </button>
        <div class="collapse navbar-toggleable-md" id="navbar-collapse-1">
            <ul class="nav navbar-nav pull-left">
                <li class="nav-item{{ @$page_section == 'upcoming' ? ' active' : '' }}">
                    <a class="nav-link" href="/#">Upcoming</a>
                </li>
                <li class="nav-item{{ @$page_section == 'results' ? ' active' : '' }}">
                    <a class="nav-link" href="/results">Results</a>
                </li>
                <li class="nav-item{{ @$page_section == 'videos' ? ' active' : '' }}">
                    <a class="nav-link" href="/videos">Videos</a>
                </li>
                <li class="nav-item notif-red notif-badge{{ @$page_section == 'organize' ? ' active' : '' }}" id="nav-organize">
                    <a class="nav-link" href="/organize">Organize</a>
                </li>
                @if (Auth::check() && Auth::user()->admin == 1)
                    <li class="nav-item notif-red notif-badge{{ @$page_section == 'admin' ? ' active' : '' }}" id="nav-admin">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav pull-right">
                @if (Auth::check())
                    <li class="nav-item notif-red notif-badge{{ @$page_section == 'personal' ? ' active' : '' }}" id="nav-personal">
                        <a class="nav-link" href="/personal">Personal</a>
                    </li>
                    <li class="nav-item notif-green notif-badge{{ @$page_section == 'profile' ? ' active' : '' }}" id="nav-profile">
                        <a class="nav-link" href="/profile/{{ Auth::user()->id }}">Profile</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/logout" id="button-logout"><i class="fa fa-power-off" title="Logout"></i></a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="/oauth2/redirect">Login via NetrunnerDB</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
