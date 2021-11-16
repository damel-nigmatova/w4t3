<?php include 'includes/header.php';?>

	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/footer.css">
</head>

<script type="text/javascript">

$(document).ready(function() {
  var $navbar = $("#mynavbar");
  AdjustHeader();
  $(window).scroll(function() {
      AdjustHeader();
  });

  function AdjustHeader(){
    if ($(window).scrollTop() > 60) {
      if (!$navbar.hasClass("navbar-fixed-top")) {
        $navbar.addClass("navbar-fixed-top");
      }
    } else {
      $navbar.removeClass("navbar-fixed-top");
    }
  }

  $('.nav-link').click(function() {
	  $('.nav-link').removeClass("active");
	  $(this).addClass("active");
  })
});
</script>

<body>
<!-- NAVIGATION -->
<div id="logo">
	<img src="imgs/logo.png" alt="Natural Alchemy Logo">
</div>

  <nav class="navbar" id="mynavbar">
	<input type="checkbox" id="checkbox"/>
	<i class="fas fa-bars arrow"></i>
	  <div class="nav-item">
		<a class="nav-link active" href="index.php">Home</a>
	  </div>

	  <div class="nav-item">
		<a class="nav-link" href="#products">Products</a>
	  </div>

	  <div class="nav-item">
		<a class="nav-link" href="#catalogue">Catalogue</a>
	  </div>

	  <div class="nav-item">
		<a class="nav-link" href="#aboutus">About Us</a>
	  </div>

	  <div class="nav-item">
		<a class="nav-link" href="#">Cart</a>
	  </div>

	  <div class="nav-item">
		<a class="nav-link" href="login.php" id="mybtn"><i class="fas fa-sitemap"></i></a>
	  </div>
  </nav>

<div class="container" id="home">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		<div class="item active">
			<img src="imgs/background01.jpg" alt="New Collection">
			<div class="carousel-caption slide2">
				<h1>New Natural Alchemy Autumn MakeUp Concealer</h1>
				<a href="order.html" class="buy">Buy Now</a>
			</div>
		</div>
		<div class="item">
			<img src="imgs/background02.jpg" alt="Top 5 Skin Care Products">
			<div class="carousel-caption slide1">
				<h1>Top 5 Serum Options for Your Daily Skin Care Ritual</h1><br/>
				<a href="products.html" class="buy">Buy Now</a>
			</div>
		</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</div>




<!-- JUST PRODUCTS LIST -->
<div class="container4" id="products" style="margin-bottom: 10%;">
	<div class="headings">
		<h5>Natural Alchemy Products</h5><br/>
		<p>There is nothing more important than our commitment to the health and well-being of our employees, consumers, and community.</p>
	</div>
	<div class="products">
		<div class="product col-sm-12 col-md-12 col-lg-12" style="overflow-y:hidden; height: 100%; display: flex; justify-content: space-around; flex-direction: row; flex-wrap: wrap;">
			<?php
				$con = mysqli_connect("localhost", "damelnig_project", "hedNxq4eWT89czK", "damelnig_projectW4T3");
				$sql = "SELECT * FROM `products` WHERE status='0'";
				$result = mysqli_query($con, $sql);
				foreach($result as $row){?>
				<div style="overflow-y:hidden;">
						<img src='../public/image/<?=$row["image"]?>' alt="Natural Alchemy Product" style="width: 200px;"></br>
						<h4 style="margin:0px;"><?=$row["name"]?></h4></br>
						<p>USD <?=$row["price"]?></p></br>
						<a href="#" style="display: inline-block;">Buy Now</a>
				</div>

			<?php
				}
			?>
		</div>

	</div>
</div>

<!-- PRODUCTS INFORMATION FROM DATABASE -->
<!-- <div class="container-2" id="catalogue">
	<div class="row">
		<div class="col-md-12 col-sm-10 col-lg-12">
			<div class="headings">
				<h5>Natural Alchemy Seasonal Collection</h5><br/>
				<p>There is nothing more important than our commitment to the health and well-being of our employees, consumers, and community.</p>
			</div>

			<div id="myCarousel-1" class="carousel slide" data-ride="carousel" data-interval="0">

				<div class="carousel-inner">
					include("includes/products.php");

				<a class="carousel-control left" href="#myCarousel-1" data-slide="prev">
					<img src="imgs/arrow2.png">
				</a>
				<a class="carousel-control right" href="#myCarousel-1" data-slide="next">
					<img src="imgs/arrow1.png">
				</a>
			</div>
		</div>
	</div>
</div> -->


<!-- ABOUT US INFO -->
<div id="aboutus">
	<div class="about-info col-lg-6">
		<h3 style="color: #749937; font-size: 40px;">About Natural Alchemy</h3>
		<p><i class="fas fa-check-circle"></i> ETHICAL & FAIR-TRADE. Elate chooses ethics over ease, and prioritizes people and the planet. </br></br>
		<i class="fas fa-check-circle"></i> SUSTAINABLE & LOW WASTE. 697,270 plastic packages have been kept out of landfills with our refillable products, 157,528 gardens have been grown from our seed paper packaging, and over 15,000 trees have been planted with Elate orders-every order plants a tree! </br></br>
		<i class="fas fa-check-circle"></i> B CORP CERTIFIED. We meet the highest verified standards of social and environmental performance, transparency, and accountability. In 2020 alone, we donated over $27,000 to social and environmental organizations.</br></br>
		<i class="fas fa-check-circle"></i> 100% VEGAN & CRUELTY FREE.</p>
	</div>

	<div class="about-info col-lg-6">
		<h3><i class="fab fa-pagelines"></i> Our Mission</h3>
		<p>At Elate Cosmetics we are committed to empowering everyone to use the best possible products for their daily rituals. We create safe, effective beauty products using cruelty-free ingredients, ethical marketing, and sustainable practices. With a goal of becoming the first waste free cosmetic company, our products offer innovative solutions to the otherwise wasteful practices of the beauty industry, and fill a gap in your beauty ritual. Our aim is to allow our customers to buy well, use less, and love themselves and the Earth) more.</p>
	</div>

	<div class="about-info col-lg-6">
		<h3><i class="fab fa-pagelines"></i> Our Ethics</h3>
		<p>Authenticity, transparency, trust. These are the foundations that we use to build our community.  From our packaging and ingredients, to our office culture, every facet is directly influenced by the spirit of inclusion and fairness that we have strived to create and maintain for our customers and our team at Elate.</p>
	</div>
</div>
<div class="footer">
  <div class="container5">
    <div class="footer-part col-sm-6 col-md-6 col-lg-3">
      <img src="imgs/logobw.png">
      <!-- <img src="imgs/delivery1 copy.png">
      <img src="imgs/delivery3 copy.png"> -->
    </div>
    <div class="footer-part col-sm-6 col-md-6 col-lg-3">
      <h10>Contacts</h10><br/>
      <p>Tel.: +1 (665) 708 5454<br/>naturalaclhemy@gmail.com<br/>
      6588 Royal Oak Ave Unit 106<br/>Vancouver, BC, Canada<br/>V6H7A0</p><br/>
    </div>
    <div class="footer-part col-sm-6 col-md-6 col-lg-3">
      <h10>Menu</h10><br/>
      <p>Home</p>
      <p>Products</p>
      <p>Contacts</p>
      <p>Cart</p>
    </div>
    <div class="footer-part col-sm-6 col-md-6 col-lg-3">
      <form method="post" action="#" class="row g-3">
      <h10>Newsletter</h10><br/><br/>
      <input type="text" id="name" name="name" placeholder="Your Email Address" style="border: none; border-bottom: 1px solid #C9202A; border-radius: 0px;">
      <a href="#" id="sign">Sign Up</a></br><br/>
      <h10>Follow us</h10><br/><br/>
      <div class="media-icons2">
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter-square"></i>
      </div>
      </form>
    </div>
  </div>
  <div id="closing" style="margin-left: -5%;">
    <h10>&copy; 2021 Natural Alchemy</h10>
  </div>
</div>

</script>
</body>
</html>
