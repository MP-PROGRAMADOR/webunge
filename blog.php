<?php
require './admin/php/conexion.php';
?>
<?php require_once "./componentes/header.php"; ?>

<section class="w3l-blog-breadcrum">
	<div class="breadcrum-bg py-sm-5 py-4">
		<div class="container py-lg-3">
			<h2>Noticias </h2>
			<p><a href="index.php">Inicio</a> &nbsp; / &nbsp; Noticias</p>
		</div>
	</div>
</section>
<section class="w3l-blog-single">
	<div class="single blog py-5">
		<div class="container py-md-3">

			<div class="d-grid grid-colunm-2">
				<!-- left side blog post content -->
				<div class="single-left">
					<div class="single-left1">
						<div class="blg-img">
							<a href="blog-single.php"><img src="assets/images/unge/9.jpg" alt=" " class="img-responsive img-fluid">
								<div class="bl-top">
									<h4>25 May</h4>
									<h6>2023</h6>
								</div>
							</a>
						</div>

						<div class="btom-cont">
							<h5 class="card-title"><a href="blog-single.php">La UNGE recibe una formacion sobre planificacion familiar</a></h5>
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
							<p class="">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium tatum
								deleniti atque corrupti quos dolores et quas molestias excepturi sint,
								similique sunt in culpa qui officia deserunt mollitia animi.</p>
							<a href="blog-single.php" class="btn btn-theme2 mt-3">Leer Más</a>

						</div>
					</div>
					<div class="single-left1 mt-5">
						<div class="blg-img">
							<a href="blog-single.php"><img src="assets/images/unge/UNGE.jpg" alt=" " class="img-responsive img-fluid">
								<div class="bl-top">
									<h4>15 Abr</h4>
									<h6>2023</h6>
								</div>
							</a>
						</div>
						<div class="btom-cont">
							<h5 class="card-title"><a href="blog-single.php">La prueba de la selectividad tendrá lugar los dias 27 y 28 de junio de 2023</a></h5>
							<ul class="admin-post">
								<li>
									<a href="blog-single.php"><span class="fa fa-user"></span> Monstery</a>
								</li>
								<li>
									<a href="blog-single.php"><span class="fa fa-tag"></span>Design, Php</a>
								</li>
								<li>
									<a href="blog-single.php"><span class="fa fa-comments-o"></span>Comments (15)</a>
								</li>
							</ul>
							<p class="">Fermentum viverra eros. Praesent neque purus, rhoncus nec nibh non, mollis
								sodales odio. Nullam
								facilisis diam non magna porta luctus. Aenean facilisis erat posuere erat ornare
								ultrices.
								semper augue. </p>
							<a href="blog-single.php" class="btn btn-theme2 mt-3">Leer Más</a>
						</div>
					</div>
					<div class="single-left1 mt-5">
						<div class="blg-img">
							<a href="blog-single.php"><img src="assets/images/unge/3.JPG" alt=" " class="img-responsive img-fluid">
								<div class="bl-top">
									<h4>12 Feb</h4>
									<h6>2023</h6>
								</div>
							</a>
						</div>
						<div class="btom-cont">
							<h5 class="card-title"><a href="blog-single.php">La UNGE conmemora el segundo aniversario del Día Nacional de la Universidad en Guinea Ecuatorial</a> </h5>
							<ul class="admin-post">
								<li>
									<a href="blog-single.php"><span class="fa fa-user"></span> Will Smith</a>
								</li>
								<li>
									<a href="blog-single.php"><span class="fa fa-tag"></span>Design, Php</a>
								</li>
								<li>
									<a href="blog-single.php"><span class="fa fa-comments-o"></span>Comments (18)</a>
								</li>
							</ul>
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
								labore et dolore magna aliqua. Ut enim ad minim sunt in culpa qui officia deserunt. </p>
							<a href="blog-single.php" class="btn btn-theme2 mt-3">Leer Más</a>
						</div>
					</div>
					<!-- pagination -->
					<div class="pagination">
						<ul>
							<li> <a href="#none" class="not-allowed" disabled="">
									<span class="fa fa-angle-double-left" aria-hidden="true"></span>
								</a>
							</li>
							<li><a class="active" href="#page">1</a></li>
							<li>
								<a href="#page">2</a>
							</li>
							<li>
								<a href="#page">3</a>
							</li>
							<li>
								<a href="#page"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- left side blog post content -->

				<!-- right side bar -->
				<div class="right-side-bar">
					<aside>
						<h3 class="aside-title mb-3">Buscar</h3>
						<form class="form-inline search-form" action="#" method="post">
							<input class="form-control" id="buscador" type="search" placeholder="Buscar..." aria-label="email" required="">
							<button class="btn search" type="submit"><span class="fa fa-search"></span></button>
						</form>
					</aside>
					<aside class="posts p-4 border">
						<h3 class="aside-title">Todas las categorias</h3>


						<?php $sqlCategoria = "SELECT * FROM categoria";

						$categoria = $conn->query($sqlCategoria);

						?>

						<table>

						<thead>
                        <tr class="headings">
                            <th>
								
								
							<a href="#link"> <span class="fa fa-angle-right"></span>Todas</a>
							   	
								
						</th>
						</tr>
						</thead>


						<tbody id="tablita">

						<tr>
							<td>

							<ul class="category" >
							<?php
							while ($row_categoria = $categoria->fetch_assoc()) {

							?>

								<li><a href="#link"><span class="fa fa-angle-right"></span><?= $row_categoria['Nombre']; ?></a></li>

							<?php } ?>
						</ul>


							</td>
						</tr>


						

						</tbody>

						</table>

						

					</aside>
					<aside class="posts p-4 border">
						<h3 class="aside-title">Entradas Recientes</h3>
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
						<h3 class="aside-title">Publicidades de Twitter</h3>
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
<?php require_once "./componentes/footer.php"; ?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
	$(function() {
		$('.navbar-toggler').click(function() {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->

<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
	$(document).ready(function() {
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




    // buscador
    $(document).ready(function() {
        $("#buscador").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tablita tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });





</script>
<!-- //script -->




</body>

</html>
<!-- // grids block 5 -->