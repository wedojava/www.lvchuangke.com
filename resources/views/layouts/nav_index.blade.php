<nav class="lck-navbar navbar navbar-default navbar-fixed-top">
    <div class="lck-navbar container">
        <div class="lck-navbar navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="lck-navbar navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/image/logo.svg') }}" alt="" height="60px">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/lawyers') }}">律师团</a></li>
                <li><a href="{{ url('/lawoffices') }}">盟友</a></li>
                <li><a href="{{ url('/successfulcases') }}">案例</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i>登录</a></li>
                    {{-- <li><a href="{{ url('/register') }}">注册</a></li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-cog"></i>管理网站</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>退出登录</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>