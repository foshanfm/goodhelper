@if (count($loanrecords))

    <ul class="media-list">
        @foreach ($loanrecords as $loanrecord)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$loanrecord->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="{{ $loanrecord->user->avatar }}" title="{{ $loanrecord->user->name }}">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('loanrecords.show', [$loanrecord->id]) }}" title="{{ $loanrecord->title }}">
                            {{ $loanrecord->title }}
                        </a>
                        <a class="pull-right" href="{{ route('loanrecords.show', [$loanrecord->id]) }}" >
                            <span class="badge"> {{ $loanrecord->reply_count }} </span>
                        </a>
                    </div>

                    <div class="media-body meta">

                        <a href="#" title="{{ $loanrecord->category->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             {{ $loanrecord->category->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$loanrecord->user_id]) }}" title="{{ $loanrecord->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $loanrecord->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $loanrecord->updated_at->diffForHumans() }}</span>
                    </div>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif