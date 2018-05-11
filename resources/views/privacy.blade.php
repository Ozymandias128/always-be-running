@extends('layout.general')

@section('content')
    <h4 class="page-header">
        Privacy and Cookie Policy<br/>
        <div class="small-text">
            hopefully in accordance with the EU General Data Protection Regulation (GDPR)
        </div>
    </h4>
    <div class="row">
        <div class="col-md-10 col-xs-12 offset-md-1">
            <div class="bracket">
                <p>
                    <a href="#cookies">What kind of cookies and tracking does the site use?</a><br>
                    <a href="#nrdb">What kind of data are you getting and storing from NetrunnerDB?</a><br>
                    <a href="#abr-data">What kind of data are you storing regarding users?</a><br>
                    <a href="#data-sharing">Do you share users' data with any third party?</a><br>
                    <a href="#delete">I want my data removed.</a><br>
                    <a href="#more-questions">I have more questions, suggestions or ideas.</a><br>
                </p>

                <hr/>
                <p>
                    <a name="cookies" class="anchor"></a><strong>What kind of cookies and tracking does the site use?</strong>
                </p>
                <p>
                    I'm using <strong>Google Analytics</strong> to gather statistics about my users.
                    This is only done
                    <em>after you consent to my cookie policy</em>. I would kindly ask you to do so, so I'm informed
                    about my visitors and the content, functionality you like. IP addresses are annonymized.
                    <strong>Google</strong> is the Data Processor.
                </p>
                <p>
                    Your consent status:
                    <strong><span id="status-consent"></span></strong>
                    - <a class="fake-link" onclick="deleteCookie('cookieconsent_status'); location.reload();">change</a>
                </p>
                <p>
                    I'm using additional cookies to store your session, preferred layout choices and
                    the tournament video you were watching.
                </p>

                <hr/>
                <p>
                    <a name="nrdb" class="anchor"></a><strong>What kind of data are you getting and storing from NetrunnerDB?</strong>
                </p>
                <p>
                    After your <a href="https://netrunnerdb.com">NetrunnerDB</a> Oauth login, I receive and store the
                    following information:
                </p>
                <ul>
                    <li><em>username, user ID</em></li>
                    <li>
                        <em>email address</em> - only available for site admins
                    </li>
                    <li><em>reputation points</em></li>
                    <li><em>private deck sharing status</em></li>
                </ul>
                <p>
                    While you are claiming, I receive the following information from <a href="https://netrunnerdb.com">NetrunnerDB</a>
                    via its <a href="https://netrunnerdb.com/api/2.0/doc">APIs</a>:
                </p>
                <ul>
                    <li>
                        public decklists
                        <ul>
                            <li><em>decklist name, ID</em> - only stored for the decklist you are claiming with</li>
                            <li><em>decklist composition</em> - not stored</li>
                        </ul>
                    </li>
                    <li>
                        private decks<br/>
                        If you enabled private deck sharing then same as the public decklists. If not,
                        I do not have access to this information.
                    </li>
                </ul>
                <p>
                    If you are claiming with a private decklist, I will publish the decklist (this can be disabled).
                    I do not change the composition of your decklists.
                </p>

                <hr/>
                <p>
                    <a name="abr-data" class="anchor"></a><strong>What kind of data are you storing regarding users?</strong>
                </p>
                <p>
                    All the stored data is represented on
                    @if (@$user)
                        <a href="{{ '/profile/'.$user->id }}">your Profile page</a>.
                    @else
                        your Profile page.
                    @endif
                    These data includes:
                </p>
                <ul>
                    <li><em>NetrunnerDB username, reputation, deck counts</em></li>
                    <li>
                        <em>email address</em> - only available for site admins
                    </li>
                    <li><em>first and last login date</em> - only available for site admins</li>
                    <li><em>supporter and/or admin status</em></li>
                    <li><em>badges</em></li>
                    <li><em>claims (IDs, optional deck reference)</em></li>
                    <li><em>tournaments created</em></li>
                    <li><em>usernames provided</em></li>
                    <li><em>information provided in About section</em></li>
                </ul>
                <p>
                    Additionally, you may have
                    @if (@$user)
                        <a href="/personal#tab-photos">uploaded pictures</a>
                    @else
                        uploaded pictures
                    @endif
                    and
                    @if (@$user)
                        <a href="/personal#tab-videos">linked videos</a>
                    @else
                        linked videos
                    @endif
                    to tournaments which are listed on your Personal page.
                </p>
                <p>
                    The data are available for all visitors of this site. (if not noted as only for admins)<br/>
                    The data are collected as a result of the users' voluntary actions with their intent of sharing the
                    information with the public.<br/>
                    The data are stored in the database of this site.<br/>
                    The <em>Data Protection Officer</em> is <a href="/profile/1276">Necro</a> (site owner, main developer).
                </p>

                <hr/>
                <p>
                    <a name="data-sharing" class="anchor"></a><strong>Do you share users' data with any third party?</strong>
                </p>
                <p>
                    No. Although as I previously stated, these data are publicly available. (if not noted as only for admins)
                </p>

                <hr/>
                <p>
                    <a name="delete" class="anchor"></a><strong>I want my data removed.</strong>
                </p>
                <p>
                    Please write a request to alwaysberunning (at) gmail.com from the email address you used for your
                    NetrunnerDB registration.
                </p>

                <hr/>
                <p>
                    <a name="more-questions" class="anchor"></a><strong>I have more questions, suggestions or ideas.</strong>
                </p>
                <p>
                    You can contact me via: alwaysberunning (at) gmail.com
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        updateConsentDisplay();

        function updateConsentDisplay() {
            var consentStatus = getCookie('cookieconsent_status'),
                    consentText;
            switch (String(consentStatus)) {
                case 'deny':
                    consentText = 'denied';
                    break;
                case '':
                    consentText = 'consent not given';
                    break;
                case 'dismiss': // bad choice of status constant, I know
                    consentText = 'consent given';
                    break;
            }
            $('#status-consent').text(consentText);
        }


    </script>
@stop

