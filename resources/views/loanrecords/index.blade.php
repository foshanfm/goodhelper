@extends('layouts.app')

@section('title', '借款列表')

@section('content')

    <div class="panel">
        <div class="panel-heading">
           <ul class="nav nav-pills">
               <li role="presentation"><a href="#">等待审核</a></li>
               <li role="presentation"><a href="#">未还款</a></li>
               <li role="presentation"><a href="#">已还款</a></li>
               <li role="presentation"><a href="#">借款驳回</a></li>
           </ul>
        </div>
    </div>
                {{-- 借款列表 --}}
                @include('loanrecords._loanrecord_list', ['loanrecords' => $loanrecord])
</div>

@endsection