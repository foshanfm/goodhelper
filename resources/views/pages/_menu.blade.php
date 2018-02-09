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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('loanrecords.create') }}" class="btn btn-default btn-block">
                        <h3>我要借款</h3>
                    </a>
                    <a href="{{ route('users.record', Auth::id()) }}" class="btn btn-default btn-block">
                        <h3>借款记录</h3>
                    </a>
                    <a href="{{ route('users.show', Auth::id()) }}" class="btn btn-default btn-block">
                        <h3>修改个人账户</h3>
                    </a>
                    <a href="#" class="btn btn-default btn-block">
                        <h3>借款记录</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endguest