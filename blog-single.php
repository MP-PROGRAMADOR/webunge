<?php
include 'admin/php/conexion.php';

$id= $conn->real_escape_string($_GET['id']) ;



$sqlBloc = "SELECT * FROM noticias WHERE Id=$id";

$bloc = $conn->query($sqlBloc);


?>


<?php require_once"./componentes/header.php"; ?>

<section class="w3l-blog-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2></h2>
      <p><a href="index.html">Inicio</a> &nbsp; / &nbsp; Blog</p>
    </div>
  </div>
</section>
<section class="w3l-blog-single">
	<div class="single blog py-5">
	  <div class="container py-md-3">
	
		<div class="d-grid grid-colunm-2">
		  <!-- left side blog post content -->
		  <div class="single-left">


		  <?php
					while ($row_bloc = $bloc->fetch_assoc()) {

			?>



			<div class="single-left1">
				<div class="blg-img" style="height: 25rem ;">
			 <img src="./admin/images/noticias/<?php echo $row_bloc['Img']; ?>" alt=" " class="img-responsive img-fluid">
			  <div class="bl-top">
				<h4><?= $row_bloc['Dia']; ?> <?= $row_bloc['Mes']; ?> </h4>
				<h6><?= $row_bloc['Agno']; ?></h6>
			 </div>
			</div>
			 
			  <div class="btom-cont1 pt-4">
				<h5 class="card-title"><a href="blog-single.php"><?= $row_bloc['Titulo']; ?></a></h5>
				<ul class="admin-post">
				  <li>
					<a href="blog-single.php"><span class="fa fa-user"></span> Felisa NCHAMA</a>
				  </li>
				  <li>
					<a href="blog-single.php"><span class="fa fa-tag"></span>Peridista</a>
				  </li>
				  <li>
					<a href="blog-single.php"><span class="fa fa-comments-o"></span>Comentarios (20)</a>
				  </li>
				</ul>
				<p class="mb-3"><?= $row_bloc['Descripcion']; ?></p>
				
			</div>

			<?php } ?>

		</div>



			<div class="comments mt-5">
				<h3 class="post-content-title">Comentarios (4)</h3>
				<div class="media mt-5 bod-1">
				  <div class="img-circle">
					<img src="assets/images/default2.jpg" class="img-fluid" alt="...">
				  </div>
				  <div class="media-body">
					  <div class="medi-top mb-3">
					<a href="#URL" class="name mt-0">Felipe NGUEMA</a> 
					<span>11 may 2020 </span>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
					  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
					  fringilla. Donec lacinia congue felis in faucibus.</p>
					  <!--<a href="#reply" class="rep mt-3">Reply</a>-->
					  <div class="media mt-4 bod-2">
						<a class="img-circle img-circle-sm" href="#">
						  <img src="assets/images/default2.jpg" class="img-fluid" alt="...">
						</a>
						<div class="media-body">
						  <div class="medi-top mb-3">
							  <a href="#URL" class="name mt-0">Maria NSUE</a> 
							  <span>11 may 2020 </span>
							  </div>
						  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
							odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
							fringilla. Donec lacinia congue felis in faucibus.</p>
							<!--<a href="#reply" class="rep mt-3">Reply</a>-->
						</div>
					  </div>
				  </div>
				</div>
  
				<div class="media bod-3">
				  <div class="img-circle">
					<img src="assets/images/default2.jpg" class="img-fluid" alt="...">
				  </div>
				  <div class="media-body">
					<div class="medi-top mb-3">
						<a href="#URL" class="name mt-0">Moises EBANG</a> 
						<span>11 may 2020 </span>
						</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
					  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
					  fringilla. Donec lacinia congue felis in faucibus.</p>
					  <!--<a href="#reply" class="rep mt-3">Reply</a>-->
					<div class="media mt-4 bod-4">
					  <a class="img-circle img-circle-sm" href="#">
						<img src="assets/images/default2.jpg" class="img-fluid" alt="...">
					  </a>
					  <div class="media-body">
						<div class="medi-top mb-3">
							<a href="#URL" class="name mt-0">Marcos BAITA</a> 
							<span>11 may 2020 </span>
							</div>
						<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
						  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
						  fringilla. Donec lacinia congue felis in faucibus.</p>
						  <!--<a href="#reply" class="rep mt-3">Reply</a>-->
					  </div>
					</div>
				  </div>
				</div>
  
				
			  </div>
			
			<div class="testi-top mt-5">
			
				<h3 class="post-content-title">Deja tu comentarios</h3>
				<div class="form-commets mt-5">
					<form action="#" method="post">
						
						
						<div class="media-form">
								<input type="text" name="Name" required="Name" placeholder="Tu Nombre">
								<input type="email" name="Email" required="Email" placeholder="Tu Email">
							</div>
							<textarea name="Message" required="" placeholder="Escriba tu comentario aqui"></textarea>
							<div class="text-right">
								<button class="btn btn-secondary btn-theme2" type="submit">Comentar</button>
							</div>
						
					</form>
				</div>
			</div>
			
			
			
		  </div>
		  <!-- left side blog post content -->
  
		  <!-- right side bar -->
		  <div class="right-side-bar">
			<aside>
			  <h3 class="aside-title mb-3">Search</h3>
			  <form class="form-inline search-form" action="#" method="post">
				<input class="form-control" type="search" placeholder="Search here" aria-label="email" required="">
				<button class="btn search" type="submit"><span class="fa fa-search"></span></button>
			  </form>
			</aside>
			<aside class="posts p-4 border">
			  <h3 class="aside-title">All Categories</h3>
			  <ul class="category">
				<li><a href="#link"><span class="fa fa-angle-right"></span>All <label> (11)</label></a></li>
				<li><a href="#link"><span class="fa fa-angle-right"></span> Web Design <label>(24)</label></a></li>
				<li><a href="#link"><span class="fa fa-angle-right"></span> Graphic Design <label>(18)</label></a></li>
				<li><a href="#link"><span class="fa fa-angle-right"></span>Web Development <label>(08)</label></a></li>
				<li><a href="#link"><span class="fa fa-angle-right"></span> Marketing <label>(38)</label></a></li>
				<li><a href="#link"><span class="fa fa-angle-right"></span>Security <label>(26)</label></a></li>
				<li><a href="#link"><span class="fa fa-angle-right"></span> Bug Fixing <label>(26)</label></a></li>
			  </ul>
			</aside>
			<aside class="posts p-4 border">
			  <h3 class="aside-title">Recent Posts</h3>
			  <div class="posts-grids">
				<div class="posts-grid-inner">
				  <div class="posts-grid-left pr-0">
					<a href="blog-single.php">
					  <img src="assets/images/g1.jpg" alt=" " class="img-responsive ">
					</a>
				  </div>
				  <div class="posts-grid-right">
					<h4>
					  <a href="blog-single.php" class="text-bl">Sed ut perspiciatis</a>
					</h4>
					<span class="price"> 11 Minutes ago</span>
				  </div>
				</div>
				<div class="posts-grid-inner">
				  <div class="posts-grid-left pr-0">
					<a href="blog-single.php">
					  <img src="assets/images/g2.jpg" alt=" " class="img-responsive ">
					</a>
				  </div>
				  <div class="posts-grid-right">
					<h4>
					  <a href="blog-single.php" class="text-bl">Unde omnis iste natus</a>
					</h4>
					<span class="price"> 15 Minutes ago</span>
				  </div>
				</div>
				<div class="posts-grid-inner">
				  <div class="posts-grid-left pr-0">
					<a href="blog-single.php">
					  <img src="assets/images/g3.jpg" alt=" " class="img-responsive ">
					</a>
				  </div>
				  <div class="posts-grid-right">
					<h4>
					  <a href="blog-single.php" class="text-bl">Otam rem aperiam</a>
					</h4>
					<span class="price"> 11 Minutes ago </span>
				  </div>
				</div>
			  </div>
			</aside>
			
			<aside class="posts p-4 border">
			  <h3 class="aside-title">Instagram Posts</h3>
			  <div class="posts-grid">
				<a href="blog-single.php">
				  <img src="assets/images/g4.jpg" alt=" " class="img-responsive ">
				</a>
				<a href="blog-single.php">
				  <img src="assets/images/g5.jpg" alt=" " class="img-responsive ">
				</a>
				<a href="blog-single.php">
				  <img src="assets/images/g6.jpg" alt=" " class="img-responsive ">
				</a>
				<a href="blog-single.php">
				  <img src="assets/images/g7.jpg" alt=" " class="img-responsive ">
				</a>
				<a href="blog-single.php">
				  <img src="assets/images/g8.jpg" alt=" " class="img-responsive ">
				</a>
				<a href="blog-single.php">
				  <img src="assets/images/g9.jpg" alt=" " class="img-responsive ">
				</a>
			  </div>
			</aside>
			<aside class="posts p-4 border">
			  <h3 class="aside-title">Popular Tags</h3>
			  <ul class="tags-list">
				<li><a href="#tag">Web Design</a></li>
				<li><a href="#tag"> Graphic Design</a></li>
				<li><a href="#tag">Web Development</a></li>
				<li><a href="#tag"> Marketing</a></li>
				<li><a href="#tag">Css</a></li>
				<li><a href="#tag">Word Press</a></li>
				<li><a href="#tag">Php</a></li>
				<li><a href="#tag">Html</a></li>
				<li><a href="#tag">Security</a></li>
				<li><a href="#tag">Bug Fixing</a></li>
			  </ul>
			</aside>
			<aside class="posts p-4 border">
				<h3 class="aside-title">Advertisement</h3>
				<a href="blog-single.php">
					<img src="assets/images/g6.jpg" alt=" " class="img-responsive ">
				  </a>
			  </aside>
		  </div>
		  <!-- //right side bar -->
		</div>
	  </div>
	</div>
  </section>
<!-- grids block 5 -->
<?php require_once"./componentes/footer.php"; ?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->

<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->


