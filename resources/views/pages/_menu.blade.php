@guest
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('login') }}" class="btn btn-default btn-block">
                        登录
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-default btn-block">
                        注册
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('loanrecords.create') }}" class="btn btn-default btn-block">
                        我要借款
                    </a>
                    <a href="{{ route('users.record', Auth::id()) }}" class="btn btn-default btn-block">
                        借款记录
                    </a>
                    <a href="{{ route('users.show', Auth::id()) }}" class="btn btn-default btn-block">
                        修改个人账户
                    </a>
                    <a href="http://goodhelper.test/register" class="btn btn-default btn-block">
                        借款记录
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest