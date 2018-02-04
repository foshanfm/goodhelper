@extends('layouts.app')

@section('title', '借款列表')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 topic-list">
        <div class="panel panel-default">


            <div class="panel-body">
                {{-- 借款列表 --}}
                @include('loanrecords._loanrecord_list', ['loanrecord' => $loanrecords])
                <!-- {{-- 分页 --}}
                {!! $loanrecords->render() !!} -->
            </div>
        </div>
    </div>
</div>

@endsection