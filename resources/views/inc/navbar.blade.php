

  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            BLOG
        </a>
		        @guest
        <div class="login-sm"> 
        <p>
         Welcome Guest.
         <br>
         Please <a href="{{ route('login') }}">{{ __('Login') }}</a>
         or
         <a href="{{ route('register') }}">{{ __('Register') }}</a>.
         </p></div>

         <div class="login-xs">
             <ul class="navbar-nav">
                <li class="">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li><li class="">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            </ul>
         </div>
         @endguest
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create Post</a>
              </li>
              @endauth
           </ul>
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
			@guest  <!-- Authentication Links -->
			
			<ul class="navbar-nav ml-auto login-lg">
				<li class="nav-item text-center">
				Welcome Guest.                    
				Please <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
				@if (Route::has('register'))
					or <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>.
                @endif
				</li>
             </ul>
			
			<ul class="navbar-nav ml-auto nav-login-sm">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
				</li>
				@endif
			</ul>
			
			@else
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                           
                        </div>
                        
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>