<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><span class="nav-icon">in<span class="">c<span class="nav-logo">֎</span>d</span></span></a>
    <button class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto main-menu">
        <li class="nav-item item-center">
          <a class="nav-link underline" href="/">Home</a>
        </li>  
        <li class="nav-item  nav-circle item-center">
          <a class="nav-link underline" href="/"></a>
        </li>       
        <li class="nav-item item-center">
          <a class="nav-link underline" href="/learn">Learn</a>
        </li>
        <li class="nav-item nav-circle item-center">
          <a class="nav-link underline" href="/"></a>
        </li> 
        <li class="nav-item item-center">
          <a class="nav-link underline" href="/blog">Blog</a>
        </li>                
      </ul>

      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->   

        @guest
            @if (Route::has('login'))
                <li class="nav-item mx-1 item-center">
                    <a class="btn btn-outline-success btn-style" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="nav-item item-center">
                    <a class="btn btn-outline-primary btn-style" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <span class="nameUp">{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    </div>
</nav>