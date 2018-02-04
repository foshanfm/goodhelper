@if (count($loanrecords))
        <ul class="list-group">
        @foreach ($loanrecords as $loanrecord)

                <li class="list-group-item">
                    <span>借款金额：{{ $loanrecord->loan }}</span>
                    <span>借款天数：{{ $loanrecord->day }}</span>
                </li>


            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>
@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif