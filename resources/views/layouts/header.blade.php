<!DOCTYPE html>
<html lang="en">
<meta name="keywords" content="blockchain, judgment, arbitrage, escrow, ethereum, dispute resolution">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Chain Lancers - Zero commission freelance platform</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">



<link href="/css/app5ec8.css" rel="stylesheet"></head>

<body data-code="">



      <?php if(Route::current()->getName() == 'index')
      echo   '<section id="signup" class="bg-primary pt-5 mt-5 mt-lg-0 pt-lg-0 position-relative">';
      ?>
            <nav id="navbar" class=" <?php if(Route::current()->getName() == 'ico' || Route::current()->getName() == 'faq')   echo 'navbar navbar-expand-lg navbar-light mb-5'; else {echo 'navbar navbar-expand-lg navbar-dark mb-4';} ?>">
                <div class="container">
                    <a class="navbar-brand py-3" href="/">
                        <img alt="" width="180" class="img-b d-none"
                             src="/img/logo-navbar.png">

                        <img alt="" width="180" class="img-w"
                             src="img/logo-navbar-w.png">
                    </a>

                    <button class="navbar-toggler" type="button"
                            data-toggle="collapse"
                            data-target="#navbarCollapse"
                            aria-controls="navbarCollapse"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">



                                <li class="nav-item">
                                    <a href="/ico"class="nav-link">
                                        ICO</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/faq"class="nav-link">
                                        FAQ</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#contacts"class="nav-link">
                                        CONTACTS</a>
                                </li>

                                @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <li class="nav-item">
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();" class="nav-link">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                    @else
                      <!--  <li class="nav-item login-button">
                          <a class="nav-link">LOGIN</a>
                          <div class="login-container">
                              <div class="arrow-up"></div>
                              <div class="form-login">
                                <form method="POST" action="{{ route('login') }}">
                                  {{ csrf_field() }}
          <h4>Type your username and password.</h4>
          <input type="email" name="email" id="userName" class="form-control input-sm chat-input" placeholder="username">
          <br>
          <input type="password" name="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password">
          <br>
          <div class="wrapper wrapper-login">
          <span class="group-btn">

              <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
          </span>
          </div>
          </div>
        </form>
                          </div>
                        </li>-->
                        <!--<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">REGISTER</a></li>-->
                    @endauth

            @endif

    <li class="nav-item d-block d-lg-none">
        <a href="#" data-lang="en" class="active transparent">EN</a>
        /
        <a href="#" data-lang="ru" class=" transparent">RU</a>
    </li>

    <li class="nav-item ml-3 d-none d-lg-block">
        <a href="#" data-lang="en"
           class="nav-link active transparent">EN</a>
    </li>
    <li class="nav-item d-none d-lg-block">
        <a href="#"
           class="nav-link disabled px-0 transparent">/</a>
    </li>
    <li class="nav-item d-none d-lg-block">
        <a href="#" data-lang="ru"
           class="nav-link  transparent">RU</a>
    </li>

                        </ul>
                    </div>
                </div>
            </nav>
