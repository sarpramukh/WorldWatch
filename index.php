<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>World Watch Ecommerce</title>
<script src="js/jquery-ui.js" > </script>
<link href="css/jquery-ui.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
 <script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
 <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
 
 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <style>
	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 70%;
	  height: 400px;
      margin: auto;

	  }
	</style>
  
</head>

<body>
	
    <div id="logoimg">
    	<img src="img/logo_final_2.jpg"/>
    </div>
    <nav class="navbar">
	<div id="navbar">
    	<ul class="nav nav-pills">
  			<li role="presentation" class="active" ><a href="#">Home</a></li>
 			<li role="presentation"><a href="#">About US</a></li>
 			<li role="presentation" class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Brands</a>
            	 <ul class="dropdown-menu">
		            <li><a href="#">Titan</a></li>
            		<li><a href="citizen.php">Citizen</a></li>
    		        <li><a href="#">Rolex</a></li>
	          </ul>
            </li>
 			<li role="presentation"><a href="#">Contact US</a></li>
		</ul>
    </div>
    </nav>

  	<!-- Slider Start -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slide_image1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/citizen_watch_1.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="img/rolex_watch_1.jpeg" alt="Flower" width="460" height="345">
      </div>

     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
    <?php include("imgGrid.php") ?>        
            
</body>
</html>