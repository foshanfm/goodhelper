@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Loanrecord / Show #{{ $loanrecord->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('loanrecords.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('loanrecords.edit', $loanrecord->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Order_id</label>
<p>
	{{ $loanrecord->order_id }}
</p> <label>User_id</label>
<p>
	{{ $loanrecord->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $loanrecord->category_id }}
</p> <label>Day</label>
<p>
	{{ $loanrecord->day }}
</p> <label>Loan</label>
<p>
	{{ $loanrecord->loan }}
</p> <label>Repayment_id</label>
<p>
	{{ $loanrecord->repayment_id }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
