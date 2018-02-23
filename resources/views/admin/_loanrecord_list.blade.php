@if (count($loanrecords))

    @foreach ($loanrecords as $loanrecord)


        @switch( $loanrecord->category_id )
            @case(1)
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-question-sign glyphicon-align-left" aria-hidden="true"></span>
                @break

            @case(2)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span class=“” aria-hidden="true"><strong>￥</strong></span>
                @break

            @case(3)
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-ok-sign glyphicon-align-left" aria-hidden="true"></span>
                @break

            @case(4)
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-remove-sign glyphicon-align-left" aria-hidden="true"></span>
                @break

            @default
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-eye-close glyphicon-align-left" aria-hidden="true"></span>
        @endswitch


            <span>{{ $loanrecord->category->name }}</span>
        </div>
        <!-- <div class="panel-body">

        </div> -->
        <ul class="list-group">
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