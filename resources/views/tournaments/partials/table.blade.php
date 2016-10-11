{{--Table of tournaments, generated on server-side, OBSOLETE--}}
<h5>
    @unless (empty($icon))
        <i class="fa {{ $icon }}" aria-hidden="true"></i>
    @endunless
    {{ $title }}
</h5>
<table class="table table-sm table-striped" id="{{ $id }}">
    <thead>
        @if( in_array('title', $columns) )
            <th>title</th>
        @endif
        @if( in_array('date', $columns) )
            <th>date</th>
        @endif
        @if( in_array('location', $columns) )
            <th>location</th>
        @endif
        @if( in_array('cardpool', $columns) )
            <th>cardpool</th>
        @endif
        @if( in_array('approval', $columns) )
            <th class="text-center">approval</th>
        @endif
        @if( in_array('claim', $columns) )
            <th class="text-center">claim</th>
        @endif
        @if( in_array('conclusion', $columns) )
            <th class="text-center">conclusion</th>
        @endif
        @if( in_array('players', $columns) )
            <th class="text-center">players</th>
        @endif
        @if( in_array('decks', $columns) )
            <th class="text-center">claims</th>
        @endif
        @if( in_array('action_view', $columns) )
            <th></th>
        @endif
        @if( in_array('action_edit', $columns) )
            <th></th>
        @endif
        @if( in_array('action_approve', $columns) )
            <th></th>
        @endif
        @if( in_array('action_reject', $columns) )
            <th></th>
        @endif
        @if( in_array('action_delete', $columns) )
            <th></th>
        @endif
        @if( in_array('action_restore', $columns) )
            <th></th>
        @endif
    </thead>
    <tbody>
        @if (count($data) == 0)
            <tr><td colspan="{{ count($columns) }}" class="text-center"><em>{{ $empty_message }}</em></td></tr>
        @endif
        @foreach ($data as $row)
            <tr>
                @if( in_array('title', $columns) )
                    <td><a href="/tournaments/{{ $row->id }}">{{ $row->title }}</a></td>
                @endif
                @if( in_array('date', $columns) )
                    <td>{{ $row->date }}</td>
                @endif
                @if( in_array('location', $columns) )
                    <td>
                        @if ($row->tournament_type_id == 7)
                            <em>online</em>
                        @else
                            {{ $row->country->name }},
                            @if ($row->location_us_state < 52)
                                {{ $row->state->name }},
                            @endif
                            {{ $row->location_city }}
                        @endif
                    </td>
                @endif
                @if( in_array('cardpool', $columns) )  
                    <td>{{ $row->cardpool->name }}</td>
                @endif
                @if( in_array('approval', $columns) )
                    <td class="text-center">
                        @if ($row->approved === null)
                            {{--<i class="fa fa-question-circle-o text-warning" aria-hidden="true"></i>--}}
                            <span class="label label-warning">pending</span>
                        @elseif ($row->approved == 1)
                            <span class="label label-success">approved</span>
                        @else
                            <i class="fa fa-thumbs-down text-danger" aria-hidden="true"></i>
                            <span class="label label-danger">rejected</span>
                        @endif
                    </td>
                @endif
                @if( in_array('claim', $columns) )
                    <td class="text-center">
                        @if ($row->claim)
                            <span class="label label-success">claimed</span>
                        @elseif ($row->concluded)
                            <i class="fa fa-clock-o text-danger" aria-hidden="true"></i>
                            <span class="label label-danger">please claim</span>
                        @else
                            <span class="label label-info">registered</span>
                        @endif
                    </td>
                @endif
                @if( in_array('conclusion', $columns) )
                    <td class="text-center">
                        @if ($row->concluded == 1)
                            <span class="label label-success">concluded</span>
                        @elseif ($row->date <= $nowdate)
                            <i class="fa fa-clock-o text-danger" aria-hidden="true"></i>
                            <span class="label label-danger">due, pls update</span>
                        @else
                            <span class="label label-info">not yet</span>
                        @endif
                    </td>
                @endif
                @if( in_array('players', $columns) )
                    <td class="text-center">
                        @if ($row->concluded == 1)
                            {{ $row->players_number }}
                        @else
                            {{ $row->registration_number() }}
                        @endif
                    </td>
                @endif
                @if( in_array('decks', $columns) )
                    <td class="text-center">
                        @if ($row->conflict)
                            <i class="fa fa-exclamation-triangle text-danger" title="conflict"></i>
                        @endif
                        @if ($row->claim_number()))
                            {{ $row->claim_number() }}
                        @endif
                    </td>
                @endif
                @if( in_array('action_view', $columns) )
                    <td><a href="/tournaments/{{ $row->id }}" class="btn btn-primary btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>
                @endif
                @if( in_array('action_edit', $columns) )
                    <td><a href="/tournaments/{{ $row->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> edit</a></td>
                @endif
                @if( in_array('action_approve', $columns) )
                    <td><a href="/tournaments/{{ $row->id }}/approve" class="btn btn-success btn-xs"><i class="fa fa-thumbs-up" aria-hidden="true"></i> approve</a></td>
                @endif
                @if( in_array('action_reject', $columns) )
                    <td><a href="/tournaments/{{ $row->id }}/reject" class="btn btn-danger btn-xs"><i class="fa fa-thumbs-down" aria-hidden="true"></i> reject</a></td>
                @endif
                @if( in_array('action_delete', $columns) )
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'url' => "/tournaments/$row->id"]) !!}
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> delete', array('type' => 'submit', 'class' => 'btn btn-danger btn-xs')) !!}
                        {!! Form::close() !!}
                    </td>
                @endif
                @if( in_array('action_restore', $columns) )
                    <td><a href="/tournaments/{{ $row->id }}/restore" class="btn btn-primary btn-xs"><i class="fa fa-recycle" aria-hidden="true"></i> restore</a></td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>