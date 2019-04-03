<header class="masthead mb-auto sticky-top">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="{{ secure_url('.') }}"><img src="{{ secure_asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
            @if(session()->has('id'))
                @if(session()->has('musicianemail'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ secure_url('musician') }}">{{ Session::get('username') }}</a>
                </li>
                @elseif(session()->has('bandemail'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ secure_url('band') }}">{{ Session::get('bandname') }}</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ secure_url('signout') }}">Sign Out</a>
                </li>
                @else 
                <li class="nav-item">
                    <a class="nav-link" href="{{ secure_url('signin') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ secure_url('signup') }}">Sign Up</a>
                </li>
            @endif
            </ul>
        </div>
    </nav>
</header>