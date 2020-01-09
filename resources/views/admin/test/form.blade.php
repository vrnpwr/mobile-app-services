<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">


        @mixin section-padding {
            padding: 10vh 0;
            @media (min-width: 768px) { // I'd prefer this to be the $md Bootstrap grid variable
            padding: 20vh 0;
        }
    }

    body {
        padding-top: 3rem;
    }

    .hero {
        padding: 20vh 0;
        background: linear-gradient(to right, #EECDA3, #EF629F);
    }

    .features {
        background: #222;
        color: white;
    }

    .pricing {
        text-align: center;
    }

    .featured-price {
        transform: scale(1.1);
        z-index: 10;
        background: #222;
    }

    footer {
        padding: 10vh 0;
        text-align: center;
        background: black;
        color: white;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
        <div class="container">
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="#">Smooth</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav">          
                    <li class="nav-item active">
                        <a class="nav-link scroll" href="#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#pricing">Pricing</a>
                    </li>          
                </ul>
                
            </div>
        </div> <!-- /container -->
    </nav>

</header>

<section class="hero" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-3">I like it smooth</h1>
            </div>
        </div>
    </div>
</section>

<section class="features" id="features">
    <div class="container">
        <h1 class="mb-5 display-4">Features</h1>
        <div class="row">
            <div class="col-md-4">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4">
                <h3>Consectetuer adipiscing elit.</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <div class="container">
        <h1 class="mb-5 display-4">Pricing</h1>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="card bg-info">
                    <div class="card-header bg-primary text-white">
                        Basic
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">Cool Plan</h4>
                        <p class="card-text">
                            <ol>
                                <li>Lorem ipsum </li>
                                <li>Aliquam tincidunt</li>
                                <li>Vestibulum auctor.</li>
                            </ol>
                        </p>
                        <a href="#" class="btn btn-primary">Download FREE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-price bg-inverse text-white">
                    <div class="card-header bg-danger text-uppercase">
                        Most Popular
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">Awesome Plan</h4>
                        <p class="card-text">
                            <ol>
                                <li>Lorem ipsum </li>
                                <li>Aliquam tincidunt</li>
                                <li>Vestibulum auctor.</li>
                            </ol>
                        </p>
                        <a href="#" class="btn btn-danger">Buy now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info">
                    <div class="card-header bg-primary text-white">
                        Full Deal
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">Amazing Plan</h4>
                        <p class="card-text">
                            <ol>
                                <li>Lorem ipsum </li>
                                <li>Aliquam tincidunt</li>
                                <li>Vestibulum auctor.</li>
                            </ol>
                        </p>
                        <a href="#" class="btn btn-primary">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <p>generic footer content</p>
</footer>
<script type="text/javascript">
    $(document).ready(function() {
        
        var scrollLink = $('.scroll');
        
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
        scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
        
        var sectionOffset = $(this.hash).offset().top - 20;
        
        if ( sectionOffset <= scrollbarLocation ) {
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
        }
    })
    
  })
  
})
</script>
</body>
</html>
<header>

    