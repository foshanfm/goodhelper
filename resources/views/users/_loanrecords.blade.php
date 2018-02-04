@if (count($loanrecords))
<ul class="list-group">
    @foreach ($loanrecords as $loanrecord)
        <li class="list-group-item">
                {{ $loanrecord->loan }}
                {{ $loanrecord->day }}
                {{ $loanrecord->user->name }}
        </li>
    @endforeach
</ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $loanrecords->render() !!}