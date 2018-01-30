@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Loanrecord
                    <a class="btn btn-success pull-right" href="{{ route('loanrecords.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($loanrecords->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Order_id</th> <th>User_id</th> <th>Category_id</th> <th>Day</th> <th>Loan</th> <th>Repayment_id</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($loanrecords as $loanrecord)
                                <tr>
                                    <td class="text-center"><strong>{{$loanrecord->id}}</strong></td>

                                    <td>{{$loanrecord->order_id}}</td> <td>{{$loanrecord->user_id}}</td> <td>{{$loanrecord->category_id}}</td> <td>{{$loanrecord->day}}</td> <td>{{$loanrecord->loan}}</td> <td>{{$loanrecord->repayment_id}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('loanrecords.show', $loanrecord->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('loanrecords.edit', $loanrecord->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('loanrecords.destroy', $loanrecord->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $loanrecords->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection