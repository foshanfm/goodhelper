@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="well well-sm">
                    <span class="d-inline"><h4>剩余借款额度</h4></span>
                    <span class="glyphicon glyphicon-info-sign"></span>
                    <strong >{{ Auth::user()->quota }} .00 元</strong>
                </div>
                <hr>
                @include('common.error')

                    <form action="{{ route('loanrecords.store') }}" method="POST" accept-charset="UTF-8">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">￥</div>
                            <input class="form-control" type="integer" name="loan" value="{{ old('loan', $loanrecord->loan ) }}" placeholder="请填写金额。" required/>
                            <div class="input-group-addon">.00</div>
                        </div>
                    </div>
                    <span id="helpBlock" class="help-block">请输入借款金额，整数</span>

                    <div class="form-group">
                        <select class="form-control" name="day" required>
                            <option value="" hidden disabled selected>请选择天数</option>
                                <option value="10">10 天</option>
                                <option value="20">20 天</option>
                                <option value="30">30 天</option>
                        </select>
                    </div>
                    <span id="helpBlock" class="help-block">利息为每天 <strong class="text-danger">0.1%</strong></span>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 申请</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>


@endsection