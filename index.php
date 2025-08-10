<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>KAIROS</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="men.php">Men</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="women.php">Women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kids.php">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Help</a>
        </li>
  
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="browse" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/im1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Saree</h3>
        <p>Grab Before The Durga Puja Ends!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/im2.webp" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Panjabi</h3>
        <p>Eid Mubarak or Boishakh?</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/im3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Urban Drips</h3>
        <p>Looking For Something Cooler?</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-6 col-md-6 col-12">
    			<img src="images/im1.jpg" class="img-fluid aboutimg">
		</div> 
		<div class="col-lg-6 col-md-6 col-12">
    			<h2 class="display-4">WE ARE TEAM KAIROS</h2>
    			<p>A small audacity to make a website for the very first time! Don't know if it looks okay or not. We have tried to create a clothing brand website where you can login as an <b>USER</b> and the browse for <b>PRODUCTS</b> according to your attire taste. You can add your choices to the <b>CART</b> and then purchase it from there by placing <b>ORDER</b>. Visit us to know more</p>
    			<a href="about.php" class="btn btn-success">CONTACT US</a>
    			
		</div> 
	</div>
</div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>