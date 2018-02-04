@extends('layouts.app')
@section('title','个人页面')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>更新个人资料</h5>
    </div>

    @include('common.error')

     <div class="panel-body">

        <form method="POST" action="{{ route('users.update', $user->id )}}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
              <label for="name">姓名</label>
              <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
            </div>

            <div class="form-group">
              <label for="email">邮箱：</label>
              <input type="text" name="email" class="form-control" value="{{ $user->email }}" >
            </div>

            <div class="form-group">
              <label for="phone">手机：</label>
              <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" disabled>
            </div>


            <div class="form-group">
              <label for="banknum">银行卡号：</label>
              <input type="text" name="banknum" class="form-control" value="{{ $user->banknum }}">
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
  </div>
</div>
@endsection