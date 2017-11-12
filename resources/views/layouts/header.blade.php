<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jury.online/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2017 17:00:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Chain Lancers - Zero commission freelance platform</title>


        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    dl = l != 'dataLayer' ? '&l=' + l : '',
                    c;

                for (var j=0; j< i.length; j++) {
                    c = d.createElement(s);
                    c.async = true;
                    c.src = '../www.googletagmanager.com/gtm5445.html?id=' + i[j] + dl;
                    f.parentNode.insertBefore(c, f);
                }
            })(window, document, 'script', 'dataLayer', ['GTM-KFHFT5X', 'GTM-MHDBVZ4']);
        </script>
        <!-- End Google Tag Manager -->


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">
  

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="404.html">
    <link rel="mask-icon" href="404.html" color="#666666">



        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                '../connect.facebook.net/en_US/fbevents.js');
            fbq('init', '203775273496003');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id=203775273496003&amp;ev=PageView&amp;noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->


<link href="/css/app5ec8.css" rel="stylesheet"></head>

<body data-code="">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHDBVZ4"
                height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFHFT5X"
                height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

      <?php if(Route::current()->getName() == 'index')
      echo   '<section id="signup" class="bg-primary pt-5 mt-5 mt-lg-0 pt-lg-0 position-relative">';
      ?>
            <nav id="navbar" class=" <?php if(Route::current()->getName() == 'ico' || Route::current()->getName() == 'faq')   echo 'navbar navbar-expand-lg navbar-light mb-5'; else {echo 'navbar navbar-expand-lg navbar-dark mb-4';} ?>">
                <div class="container">
                    <a class="navbar-brand py-3" href="/">
                        <img alt="jury.online" width="180" class="img-b d-none"
                             src="/img/logo-navbar.png">

                        <img alt="jury.online" width="180" class="img-w"
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
