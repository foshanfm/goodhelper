@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>订单详情</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ url('/') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('loanrecords.edit', $loanrecord->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </a>
                        </div>
                    </div>
                </div>

                <label>订单号</label>
                    <p>
                    	{{ $loanrecord->order_id }}
                    </p>

                <label>借款天数</label>
                    <p>
                    	{{ $loanrecord->day }}
                    </p>
                 <label>借款</label>
                    <p>
                    	{{ $loanrecord->loan }}.00 元
                    </p>
                <label>还款状态</label>
                    <p>
                    	{{ $loanrecord->repayment_id }}
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection