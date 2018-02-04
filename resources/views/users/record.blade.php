@extends('layouts.app')

@section('content')

@include('users._loanrecords', ['loanrecords' => $user->loanrecords()->recent()->paginate(5)])

@endsection