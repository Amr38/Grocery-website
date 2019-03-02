<?php
/*$con = mysqli_connect("localhost","root","","me_trying");
$q = "SELECT Name,me_url FROM me_tr_products";
$result = mysqli_query($con,$q);

*/?>

<!DOCTYPE html>
<html>
<head>
	<title>WorkShop</title>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada|Raleway" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="OwlCarousel2-develop/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="OwlCarousel2-develop/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-bg1">
  <a class="navbar-brand " href="#"><img src="images/logo.png"></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav ">
  	<li class="nav-item">
     <a class="nav-item nav-link active" href="#">HOME</a>
  </li>
  <li class="nav-item">
      <a class="nav-item nav-link" href="#">FEATRUED</a>
  </li>
  <li class="nav-item">
       <a class="nav-item nav-link" href="#">PRODUCTS</a>
  </li>
  <li class="nav-item">
        <a class="nav-item nav-link" href="#">CONTACT</a>
  </li>
</ul>
</div>
</nav>
<div class="home">
	<div class="layer">
		<div class="caption">
			<h1>Fresh Store</h1>
			<span>Now</span>
			<div id="typed-strings">
    <p>Typed.js is a <strong>JavaScript</strong> library.</p>
    <p>It <em>types</em> out sentences.</p>
</div>
<span id="typed"></span>

		</div>
	</div>
</div>
<div class="top-cat pt-5 mt-5 pb-5 mb-5">
	<div class="container">
	<div class="title pt-5 mt-5 pb-5 mb-5">
		<h2>Top Featured catigories</h2>
	</div>
<div class="owl-carousel owl-theme owl-loaded">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <div class="owl-item">
            	<img class="img-fluid" src="images/2.jpg">
            </div>
            <div class="owl-item">
            	<img class="img-fluid" src="images/3.jpg">
            </div>
            <div class="owl-item">
            	<img class="img-fluid" src="images/4.jpg">
            </div>
             <div class="owl-item">
             	<img class="img-fluid" src="images/5.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/6.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/7.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/8.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/9.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/10.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/11.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/12.jpg">
               </div>
               <div class="owl-item">
             	<img class="img-fluid" src="images/13.jpg">
               </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="Products pt-5 mt-5 pb-5 mb-5">
  <div class="container">
	<h2 class="text-center mt-5 mb-5"> Our Products</h2>
  <div class="owl-carousel owl-theme owl-loaded">
    <div class="owl-stage-outer">
        <div class="owl-stage">
          <?php
          /*if($result-> num_rows > 0){
            while ($row = $result->fetch_assoc()) {
              echo '<div class="owl-item"><img class="img-fluid" src="'.$row["me_url"].'"><div class="item-body"><h5>'.$row["Name"]. '</h5></div></div>';
            }
          }*/
            echo '<div class="owl-item"><img class="img-fluid" src="images/h4_cate1.png"><div class="item-body"><h5>Eggs</h5></div></div>';
            ?>
        </div>
    </div>
</div>
</div>
</div>
<div class="form">
	<div class="container">
		<form>
			<h2 class="text-center mt-5 mb-5 pb-5">GET IN TOUCH</h2>
			<div class="form-row">
				<div class="form-group col-md-6 mt-5">
					<input type="text" class="form-control" id="" placeholder="First Name">
				</div>
				<div class="form-group col-md-6 mt-5">
					<input type="text" class="form-control" id="" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="inputAddress" placeholder="E-Mail">
			</div>
			<div class="form-group">
				<label for="inputAddress2">Message</label>
				<textarea type="text" class="form-control" id="inputAddress2" placeholder="How can we help you"> </textarea>
			</div>
			<div class="but-sub mt-5 mb-5">
				<button type="submit" class="btn btn-primary">Send Message</button>
			</div>
		</form>
	</div>
</div>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script src="OwlCarousel2-develop/dist/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
