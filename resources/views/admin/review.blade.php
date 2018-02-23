@extends('layouts.app')

@section('title','后台-借款审核')

@section('content')

    {{-- 借款列表 --}}
    @include('admin._loanrecord_list', ['loanrecords' => $loanrecord])

@endsection