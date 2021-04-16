<!DOCTYPE html>

<html lang="">
<head>
<title>ActivePass</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lifepass.js') }}" type="module" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link href="/css/simple-sidebar.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/immune_record.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/activepass.css') }}" rel="stylesheet">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
            $(".navbar-toggler").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        });
    </script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@segoviagroup.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right">
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
        <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
{{-- <div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
      <!-- ################################################################################################ -->
      <h1><a href="index.html">ACTIVEPASS</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div> --}}
<nav class="navbar fixed-top  navbar-expand-md navbar-light bg-light color-white shadow-sm">
    <div class="container">

        <button class="navbar-toggler d-block navbar-light" type="button"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand pull-left" href="{{ url('/') }}">
            <img src="{{asset('/img/logo.png')}}" class="ball img-thumbnail card-img-top mx-1" style="height: 30px; width:30px">
            <b>{{ config('app.name', 'FitPass') }}</b>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class=" btn btn-light mx-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class=" btn btn-dark" href="register">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">
                                Dashboard
                            </a>

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
    </div>
</nav>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('');">
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->

    <article>
      <h3 class="heading">Get a Vaxpass now!</h3>
      <p>As immunization is delivered in massive quantities, there is need for secure online platforms which facilitate verification and issuance of online vaccination admin certificates (VACs) by the vaccine immunization providers (VIPs.)

        Many establishments, primarily transport carriers, restaurants, schools, hospitals, churches, and event venues will adopt safety protocols that may require online verification of VACs.</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Be a member</a></li>
          {{-- <li><a class="btn inverse" href="#">Nunc molestie</a></li> --}}
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="introblocks" class="hoc container clear">
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_third first">
        <article><a href="#"><i class="fas fa-hand-peace"></i></a>
          <h6 class="heading underline"></h6>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article class="active"><a href="#"><i class="fas fa-microphone"></i></a>
          <h6 class="heading underline"></h6>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-moon"></i></a>
          <h6 class="heading underline"></h6>
          <p></p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2"></h6>
    </div>
    <ul class="nospace group overview btmspace-80">
      <li class="one_third">
        <article>
          <div class="clear"><a href="#"><i class="fas fa-motorcycle"></i></a>
            <h6 class="heading"></h6>
          </div>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="clear"><a href="#"><i class="fas fa-newspaper"></i></a>
            <h6 class="heading"></h6>
          </div>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="clear"><a href="#"><i class="fas fa-paper-plane"></i></a>
            <h6 class="heading"></h6>
          </div>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="clear"><a href="#"><i class="fas fa-eye"></i></a>
            <h6 class="heading"></h6>
          </div>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="clear"><a href="#"><i class="fas fa-leaf"></i></a>
            <h6 class="heading"></h6>
          </div>
          <p></p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="clear"><a href="#"><i class="fas fa-power-off"></i></a>
            <h6 class="heading"></h6>
          </div>
          <p></p>
        </article>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#"></a></footer>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2"></h6>
    </div>
    <ul class="nospace group">
      <li class="one_quarter first">
        <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption class="bold uppercase center"></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption class="bold uppercase center"></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption class="bold uppercase center"></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption class="bold uppercase center"></figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2"></h6>
    </div>
    <ul id="testimonials" class="nospace group btmspace-80">
      <li class="one_half first">
        <blockquote></blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading"></h6>
            <em></em></figcaption>
        </figure>
      </li>
      <li class="one_half">
        <blockquote></blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading"></h6>
            <em></em></figcaption>
        </figure>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#"></a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2"></h6>
    </div>
    <ul id="latest" class="nospace group">
      <li class="one_third first">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
          <div class="excerpt">
            <h6 class="heading"></h6>
            <ul class="nospace meta">
              <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
              <li><i class="far fa-clock rgtspace-5"></i>
                <time datetime="2045-04-06T08:15+00:00">06 Apr 2045</time>
              </li>
            </ul>
            <p> [<a href="#">&hellip;</a>]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
          <div class="excerpt">
            <h6 class="heading"></h6>
            <ul class="nospace meta">
              <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
              <li><i class="far fa-clock rgtspace-5"></i>
                <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
              </li>
            </ul>
            <p> [<a href="#">&hellip;</a>]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
          <div class="excerpt">
            <h6 class="heading"></h6>
            <ul class="nospace meta">
              <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
              <li><i class="far fa-clock rgtspace-5"></i>
                <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
              </li>
            </ul>
            <p> [<a href="#">&hellip;</a>]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
{{-- <div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading"></h6>
      <ul class="nospace linklist contact btmspace-30">
        <li><i class="fas fa-map-marker-alt"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fas fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope"></i> info@segoviagroup.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading"></h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#"></a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#"></a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading"></h6>
      <ul class="nospace linklist">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading"></h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div> --}}
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Segoviagroup</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
