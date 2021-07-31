<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><b>Custom</b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                <li class="nav-item dropdown">
                    <img class="nav-link dropdown-toggle rounded-circle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" width="60" height="40">
                    <button class="dropdown-menu nav-item btn btn-primary btn-sm" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->isAdmin())
                        <a class=" js-scroll-trigger dropdown-item" href="/admin/dashboard">@lang('Admin')</a>
                        @endif
                        <a class=" js-scroll-trigger dropdown-item" href="/logout">Sign Out</a>
                    </button>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/login/google">Sign In</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>