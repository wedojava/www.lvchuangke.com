<ul class="nav navbar-nav">
    <li><a href="/" target="_blank">网站首页</a></li>
    @if (Auth::check())
        <li @if (Request::is('admin/law_case*')) class="active" @endif>
            <a href="/admin/law_case">案情</a>
        </li>
        <li @if (Request::is('admin/lawyer*')) class="active" @endif>
            <a href="/admin/lawyer">律师</a>
        </li>
        <li @if (Request::is('admin/law_office*')) class="active" @endif>
            <a href="/admin/law_office">律所</a>
        </li>
        <li @if (Request::is('admin/successful_case*')) class="active" @endif>
            <a href="/admin/successful_case">案例</a>
        </li>
        <li @if (Request::is('admin/about*')) class="active" @endif>
            <a href="/admin/about">关于</a>
        </li>
    @endif
</ul>

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/login"><i class="fa fa-btn fa-sign-in"></i>登录</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                    aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>退出登录</a></li>
            </ul>
        </li>
    @endif
</ul>