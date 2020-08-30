<!DOCTYPE html>
<html>
<head>
	<title></title>
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  
  
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SPotdar Arts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    
    
  </div>
</nav>


<div id="demo" class="carousel slide " data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/back1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption text-center ">
          <h1 style="color: black;font-size: 70px;">SPotdar Arts</h1>
          <h3 style="color: black;">Explore your ideas with us.</h3>
        </div>
        
      </div>
      
      <div class="carousel-item">
        <img src="images/back2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h1 style="color:#8B0000;position: absolute;right: 270px;bottom: 220px;font-size: 70px;">SPotdar Arts</h1>
          <h3 style="color:#8B0000;position: absolute;right: 300px;bottom: 170px;">Explore your ideas with us.</h3>
        </div>
      </div>
      
      <div class="carousel-item">
        <img src="images/back3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h1 style="font-size: 70px;">SPotdar Arts</h1>
          <h3>Explore your ideas with us.</h3>
        </div>
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

<!--about us page-->
<section class="my-5">
  
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/bg5.jpg" class="img-fluid aboutimg">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <h2>SPotdar Arts</h2>
          <p class="py-3">The word bodhi  is derived from the Sanskrit word “बोधि” for “enlightenment”.Bodhi Linux is a lightweight Linux distribution based on Ubuntu that uses the Moksha window manager and minimal. The philosophy for the distribution is to provide a minimal base system so that users can populate it with the software they want. </p>
          <a href="about.php" class="btn btn-success">know more</a>
        </div>
    </div>
  </div>
</section>


<!--for our services--> 
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
            <img class="card-img-top" src="images/bg5.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <!--<a href="#" class="btn btn-primary">See Profile</a> button to lead next page for more information-->
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
            <img class="card-img-top" src="images/bg5.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <!--<a href="#" class="btn btn-primary">See Profile</a>-->
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="images/bg5.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <!--<a href="#" class="btn btn-primary">See Profile</a>-->
            </div>
        </div>
      </div>
    
    </div>
  </div>
</section>

<!--for Gallery-->
<section class="my-5">
  
  <div class="py-5">
    <h2 class="text-center">Gallery</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bg2.jpg" class="img-fluid pb-3" >
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bg2.jpg" class="img-fluid pb-3" >
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bg2.jpg" class="img-fluid pb-3" >
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bg2.jpg" class="img-fluid pb-3" >
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bg2.jpg" class="img-fluid pb-3" >
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bg2.jpg" class="img-fluid pb-3" >
      </div>
    
    </div>
  </div>

</section>

<!--contact form-->
<section class="my-5">
  
  <div class="py-5">
    <h2 class="text-center">Contact us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      
      <div class="form-group">
        <label>username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Gmail id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>

</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@SPotdarArtsProduction</p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>