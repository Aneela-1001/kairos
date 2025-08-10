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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
          <a class="nav-link active" href="about.php">Help</a>
        </li>

        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="browse" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">CONTACT US</h2>
	</div>
	<div class="w-50 m-auto">
		<h4 class="text-center"><b>Email</b></h4>
		<p class="text-center">kairos.shop@gmail.com</p>
		<h4 class="text-center"><b>Mobile</b></h4>
		<p class="text-center">01796855501</p>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">ADD REVIEWS</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="user_review.php" method="post">
			<div class="form group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

			<div class="form group">
				<label>Product</label>
				<input type="text" name="product" autocomplete="off" class="form-control">
			</div>

			<div class="form group">
				<label>Rating (out of 5)</label>
				<input type="text" name="rating" autocomplete="off" class="form-control">
			</div>

			<div class="form group">
				<label>Comment</label>
				<textarea class="form-control">	
				</textarea>
			</div>

			<button type="submit" class="my-3 btn btn-danger">Submit</button>
		</form>
	</div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">THANK YOU</p>
</footer>
	

</body>
</html>
