<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">


    @yield('title')
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="/">Uni Places</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            &nbsp
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
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
    <!-- Navbar Ends -->

    <div class="container" id="content">
        <div class="jumbotron">
            <h1 class="display-4">@yield('header')</h1>
            <p class="lead">@yield('subheader')</p>
            <hr class="my-4">
        @yield('content')
        </div>      
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Rayhan Ashlikh Rosyada</span></h1>
                <p>
                    A junior web programmer that always want to know more about programming 
                    but also want to share knowledge to others.
                </p>
                <div class="contact">
                    <span><i class="fa fa-phone"></i> &nbsp; 0813-9079-2231</span>
                    <span><i class="fa fa-envelope"></i> &nbsp; rayhanind24@gmail.com</span>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/profile.php?id=100011422378877"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/rayhanind"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/rayhan-ashlikh-598155197/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/rayhanashlikh"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <a href="#">
                        <li>Event</li>
                    </a>
                    <a href="#">
                        <li>Team</li>
                    </a>
                    <a href="#">
                        <li>Mentors</li>
                    </a>
                    <a href="#">
                        <li>Gallery</li>
                    </a>
                    <a href="#">
                        <li>Terms and Conditions</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form">
                <h2>Contact Me</h2>
                <form action="#" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email Address..">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message..."></textarea>
                </div>    
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-envelope"></i> 
                    Submit
                </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; codingpoets.com | Designed By Awa Melvine
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $('#addStar').change('.star', function(e) {
        $(this).submit();
        });
    </script>
  </body>
</body>
</html>