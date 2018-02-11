@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="well well-sm">
                    <span><h4>剩余借款额度</h3></span>
                    <strong >{{ Auth::user()->quota }} .00 元</strong>
                </div>
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