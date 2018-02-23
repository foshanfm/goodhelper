@extends('layouts.app')

@section('title', '还款列表')

@section('content')

    {{--待还列表--}}

    @include('loanrecords._payback_list',['loanrecords' => $loanrecord])
@endsection