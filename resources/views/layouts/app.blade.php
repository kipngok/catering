<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>School</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Allerta&display=swap" rel="stylesheet">

<!-- <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans&display=swap" rel="stylesheet"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</style>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #ecf0f5">
<div style="margin: 0px;">
    <nav class="navbar navbar-expand-md navbar-light bg-light" style="z-index: 1;">
         <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0px;">
                    <img src="{{ asset('img/hotlunch2.png') }}" alt="HOTLUNCH" style="height:60px;">
                </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
               
               
        
            </div>
        
            <div class="navbar-nav">
                 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

    <!-- sidebar -->
      <div class="row" style="width:100%">
                <div class="sidebar">
                    @include('includes.side')
                </div>
            </div>
          </div>

  <div  style="width:calc(100% - 180px);  margin-left:180px; float:left; ">
                    <div class="cont" style="">
                    @yield('content')
                </div>
                
                </div>

@yield('scripts')
</body>
<style type="text/css">
   
</style>
</html>                            