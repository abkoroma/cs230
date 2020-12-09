<?php
require 'includes/header.php';
?>

<main>
    <div class="bg-cover">
        <div class="container" style="padding-top: 50px;">
            <div id="Slides" class="carousel slide col-md-8 offset-md-2" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselSlides" data-slide-to="1"></li>
                  <li data-target="#carouselSlides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block mx-auto" src="images/carousel1.jpg" alt="slide 1">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="images/carousel2.jpg" alt="slide 2">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="images/carousel3.jpg" alt="slide 3">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        </div class="h-40 center-me">
            <div class="my-auto">
                <form action="includes/login-helper.php" method="post" class="form-signin">
                    <img src="images/signinwrist.jpg" alt="wrist watch" style="height: 100px; width: 100px;">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" 
                        required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="margin: 10px; text-align: left;">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>
    </div>

</main>