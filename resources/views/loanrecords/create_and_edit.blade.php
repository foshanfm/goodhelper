@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Loanrecord /
                    @if($loanrecord->id)
                        Edit #{{$loanrecord->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($loanrecord->id)
                    <form action="{{ route('loanrecords.update', $loanrecord->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('loanrecords.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="order_id-field">Order_id</label>
                    <input class="form-control" type="text" name="order_id" id="order_id-field" value="{{ old('order_id', $loanrecord->order_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $loanrecord->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $loanrecord->category_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="day-field">Day</label>
                    <input class="form-control" type="text" name="day" id="day-field" value="{{ old('day', $loanrecord->day ) }}" />
                </div> 
                <div class="form-group">
                    <label for="loan-field">Loan</label>
                    <input class="form-control" type="text" name="loan" id="loan-field" value="{{ old('loan', $loanrecord->loan ) }}" />
                </div> 
                <div class="form-group">
                    <label for="repayment_id-field">Repayment_id</label>
                    <input class="form-control" type="text" name="repayment_id" id="repayment_id-field" value="{{ old('repayment_id', $loanrecord->repayment_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('loanrecords.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection