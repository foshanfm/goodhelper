@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                        借款申请
                </h2>
                <hr>
                @include('common.error')

                    <form action="{{ route('loanrecords.store') }}" method="POST" accept-charset="UTF-8">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input class="form-control" type="integer" name="loan" value="{{ old('loan', $loanrecord->loan ) }}" placeholder="请填写金额。" required/>
                    </div>


                    <div class="form-group">
                        <input name="day" class="form-control" type="integer" name="day" value="{{ old('day', $loanrecord->day ) }}" placeholder="请填写借款天数。" required/>
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 申请</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection