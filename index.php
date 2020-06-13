<!DOCTYPE HTML>
<?php
/**
 * @author Prajakta Patil
 * @copyright 2020
 */
 ?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8">
    <title>Untitled 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" dark>
  <a class="navbar-brand" href="#">WE ARE Developer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">WEB Development</a>
          <a class="dropdown-item" href="#">ERP System</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">If You Want Something else </a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="about.php">About</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--close nav bar-->

<!--Carousel-->
<br />
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/a.jpg" alt="WEB devlopment" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./images/b.png" alt="ERP devlopment" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./images/c.jpg" alt="devlopment" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--close Carousel-->

<!--Services-->
<section class="my-5">
<div class="my-5">
<h3 class="text-center">Our Services</h3>
</div>
<div class="container-fluid"></div>
<div class="row">
<div class="col-lg-4 col-md-4 col-12" >
<div class="card">
  <img class="card-img-top" src="./images/dev.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">ERP</h4>
    <p class="card-text">Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network). ... Among web professionals, "web development" usually refers to the main non-design aspects of building websites: writing markup and coding.</p>
    <a href="#" class="btn btn-primary">More Info</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12" >
<div class="card">
  <img class="card-img-top" src="./images/dev.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">web development</h4>
    <p class="card-text">Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network). ... Among web professionals, "web development" usually refers to the main non-design aspects of building websites: writing markup and coding.</p>
    <a href="#" class="btn btn-primary">More Info</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12" >
<div class="card">
  <img class="card-img-top" src="./images/dev.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">ERP</h4>
    <p class="card-text">Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network). ... Among web professionals, "web development" usually refers to the main non-design aspects of building websites: writing markup and coding.</p>
    <a href="#" class="btn btn-primary">More Info</a>
  </div>
</div>
</div>
</div>
</section>
<!--close Services-->

<!--About US-->
<section class="my-5">
<div class="my-5">
<h3 class="text-center">Adout US</h3>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-12" >
<img src="./images/dev.jpg" class="img-fluid aboutimg"/>
</div>
<div class="col-lg-6 col-md-6 col-12">
<h3>I am Developer</h3>
<p class="my-4">
Go Web Design is a full-service web design company founded in 1997. The company develops and improves professional websites for customers across a wide range of industries, including advertising, communications, fashion, finance, e-commerce, law, medical and health, construction, insurance, and real estate. 
</p>
<a href="about.php" class="botton">
Check More
</a>
</div>
</div>
</section>

<!--close About US-->
<!--contact US-->
<section class="my-5">
<div>
<h3 class="text-center">Connect With Ous</h3>
</div>
  <form action="index.php" class="needs-validation" novalidate>
  <div class="w-50 m-auto">
    <div class="form-group" >
      <label for="name"> Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email"> Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="no"> Contact number:</label>
      <input type="number" class="form-control" id="no" placeholder="Enter Mobile Number" name="no" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="comment"> Comment:</label>
      <textarea type="text" class="form-control" id="comment" placeholder="Enter Comment" name="comment" required>
      </textarea>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary" class="align-center">Submit</button>
    </div>
  </form>
</section>
<!--close contact US-->
<!--footer-->
<footer class="p-3 text-white bg-dark text-center">
@We Are Developer
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>