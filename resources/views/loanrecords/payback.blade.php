@extends('layouts.app')

@section('title', '还款列表')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="well">
                <div class="media">
                  <div class="media-left">
                      <img class="media-object" src="{{URL::asset('/images/cmblogo.jpeg')}}" alt="招商银行">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">何浩堃</h4>
                    <b>6214 8512 0208 9426</b>
                    <br>
                    招商银行广州华强路支行
                    <br>
                  </div>
                </div>
            </div>
            <ul>
                <li><small>按最终打款时间结算利息。<small></li>
                <li><small>工作日内，收款后2小时内完成审核。<small></li>
            </ul>
        </div>

    </div>

    {{--待还列表--}}

    @include('loanrecords._payback_list',['loanrecords' => $loanrecord])
@endsection