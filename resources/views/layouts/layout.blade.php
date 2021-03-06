<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My own CSS -->
    <link href="{{ asset('css/layoutstyle.css') }}" rel="stylesheet" type="text/css" >

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- animate on scroll -->	
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <title>@yield('title', 'Jeroen Arne Wichers')</title>

  </head>

  <header>
    <nav class="navbar navbar-expand-lg custom-navbar-1">
        <a class="navbar-brand custom-navbar-brand-text" href="/">
            <img src="../img/layout/nodlogo3.png" id="custom-brand-logo-nod">
            {{-- <img src="../img/layout/romanleaves.svg" id="custom-brand-logo-roman" width =60px height=50px alt=""> --}}
            JEROEN ARNE WICHERS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

    </nav>
    <nav class="navbar navbar-expand-lg custom-navbar-2">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link custom-navbar-link-text font-weight-bold" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-link-text font-weight-bold" href="#persoonlijk-profiel">Persoonlijk profiel</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle custom-navbar-link-text font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Vaardigheden
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item font-weight-bold" href="#ICT-vaardigheden">ICT vaardigheden</a>
                      <a class="dropdown-item font-weight-bold" href="#beleids-vaardigheden">Beleids vaardigheden</a>
                      <a class="dropdown-item font-weight-bold" href="#taal-vaardigheden">Taal vaardigheden</a>
                      <a class="dropdown-item font-weight-bold" href="#management-vaardigheden">Management vaardigheden</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom-navbar-link-text font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Werkervaring
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item font-weight-bold" href="#junior-webdeveloper">Junior webdeveloper</a>
                        <a class="dropdown-item font-weight-bold" href="#Onderzoeker">Onderzoeker</a>
                        <a class="dropdown-item font-weight-bold" href="#Vrijwilliger">Vrijwilliger</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-link-text font-weight-bold" href="#portfolio">Portfolio</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link custom-navbar-link-text font-weight-bold" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


@yield('content')

<button onclick="topFunction()" id="TopScrollBtn" title="Top van de pagina"><i class="fas fa-angle-double-up"></i></button> 

<footer class="custom-footer spacer200top">
<div class="container justify-content-center">
    <div class="row mt-5 pt-4 pb-3">
        <div class="col-md-4 col-xl-5">
            <div class="pr-xl-4">
            <p>PERSOONLIJKE SITE JEROEN ARNE WICHERS.</p>
            <p class="custom-footer-text"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Jeroen Arne Wichers</span><span>. </span><span>All Rights Reserved.</span></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pr-xl-4">
                <p id="socialgroup"> <a id="social" href="https://www.facebook.com/" class="fab fa-facebook fa-lg"></a>
                    <a id="social" href="https://www.instagram.com/" class="fab fa-instagram fa-lg"></a>
                    <a id="social" href="https://twitter.com/" class="fab fa-twitter fa-lg"></a>
                    <a id="social" href="https://www.linkedin.com/" class="fab fa-linkedin fa-lg"></a>
                </p>
                <p>    
                    <a id="social" class="custom-footer-text" href="mailto:jwichers@hotmail.com">jwichers@hotmail.com</a>
                </p>
            </div>      
        </div> 
    </div>
</div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- animate on scroll script --> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            document.getElementById("TopScrollBtn").style.display = "block";
        } else {
            document.getElementById("TopScrollBtn").style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        } 
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        });
    </script> 

  </body>