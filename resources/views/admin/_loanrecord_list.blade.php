@if (count($loanrecords))

    @foreach ($loanrecords as $loanrecord)

    <div class="panel panel-warning">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-question-sign glyphicon-align-left" aria-hidden="true"></span>
            <span>{{ $loanrecord->category->name }}</span>
            <form action="{{ route('admin.review') }}" method="post" style="display: inline;">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <!-- <button class="btn btn-default btn-sm pull-right btn-danger" type="submit" style="margin-left: 6px">拒绝</button> -->
                <button class="btn btn-default btn-sm pull-right btn-success" type="submit" name="id" value="{{ $loanrecord->id }}">放款</button>
            </form>
        </div>
        <!-- <div class="panel-body">

        </div> -->
        <ul class="list-group">
          <li class="list-group-item">
              <span>借款人：{{ $loanrecord->user->name }}</span>
          </li>
          <li class="list-group-item">
              <span>申请时间：{{ $loanrecord->created_at->format('Y-m-d') }}</span>
              <small class="pull-right">{{ $loanrecord->created_at->diffForHumans() }}</small>
          </li>
          <li class="list-group-item">借款金额：{{ $loanrecord->loan }}.00 元</li>
          <li class="list-group-item">借款天数：借 {{ $loanrecord->day }} 天</li>
        </ul>
        <div class="panel-footer">
            <span>入账银行卡（*{{ substr($loanrecord->user->banknum,-4) }}）</span>
        </div>
    </div>
    @endforeach

@else
   <div class="empty-block">
       <div class="well">
           <h4 class="text-center">暂无数据</h4>
       </div>
   </div>
@endif