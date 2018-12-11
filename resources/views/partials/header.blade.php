<header>
    <nav>
        <ul>
            <li><a href="{{ route('main') }}">Main Page</a></li>
            @if(Auth::check() && Auth::user()->hasRole('Author'))
            <li><a href="{{ route('author') }}">Author</a></li>
            @endif
          
            <li><a href="{{ route('admin') }}">Admin</a></li>

            <span id="separator"></span>
            @if(Auth::guest())
                <li><a href="{{ route('signup') }}">Sign Up</a></li>
                <li><a href="{{ route('signin') }}">Sign In</a></li>
            @else
                <li><a href="{{ route('logout') }}">Logout</a></li>
                <li>
                    {{ Auth::user()->first_name}}
                </li>
            @endif

        </ul>

    </nav>
</header>