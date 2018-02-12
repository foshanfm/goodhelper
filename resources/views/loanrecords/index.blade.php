@extends('layouts.app')

@section('title', '借款列表')

@section('content')


    <div class="panel">
        <div class="panel-heading">
           <ul class="nav nav-pills">
               <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}" role="presentation"><a href="{{ route('categories.show', 1) }}">等待审核</a></li>
               <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}" role="presentation"><a href="{{ route('categories.show', 2) }}">未还款</a></li>
               <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}" role="presentation"><a href="{{ route('categories.show', 3) }}">已还款</a></li>
               <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}" role="presentation"><a href="{{ route('categories.show', 4) }}">借款驳回</a></li>
           </ul>
        </div>
    </div>
                {{-- 借款列表 --}}
                @include('loanrecords._loanrecord_list', ['loanrecords' => $loanrecord])
</div>

@endsection