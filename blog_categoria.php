<?php
require './admin/php/conexion.php';

$categoria=$_GET['id'];
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
				<div class="single-left ">



					<?php $sqlBloc = "SELECT * FROM noticias WHERE Categoria=$categoria";

					$bloc = $conn->query($sqlBloc);
					$dir = "./admin/php/fotos/";


					?>

					<?php
					while ($row_bloc = $bloc->fetch_assoc()) {

					?>





						<div class="single-left1 mt-2">
							<div class="blg-img"">
								<a href="blog-single.php?id=<?= $row_bloc['Id']; ?>"><img src="<?= $dir . $row_bloc['Id'] . '.jpg'; ?>" width="400" height="300" alt=" " class="img-responsive img-fluid">
								<div class="bl-top">
									<h4><?= $row_bloc['Dia']; ?> <?= $row_bloc['Mes']; ?> </h4>
									<h6><?= $row_bloc['Agno']; ?></h6>
								</div>
								</a>
							</div>

							<div class="btom-cont">
								<h5 class="card-title"><a href="blog-single.php"><?= $row_bloc['Titulo']; ?></a></h5>
								<ul class="admin-post">
									<li>
										<a href="blog-single.php?id=<?= $row_bloc['Id']; ?>"><span class="fa fa-user"></span> Felisa NCHAMA</a>
									</li>
									<li>
										<a href="blog-single.php?id=<?= $row_bloc['Id']; ?>"><span class="fa fa-tag"></span>Peridista</a>
									</li>
									<li>
										<a href="blog-single.php?id=<?= $row_bloc['Id']; ?>"><span class="fa fa-comments-o"></span>Comentarios (20)</a>
									</li>
								</ul>


								<p class=""><?= $row_bloc['Descripcion']; ?></p>



								<a href="blog-single.php?id=<?= $row_bloc['Id']; ?>" class="btn btn-theme2 mt-3">Leer Más</a>

							</div>

						</div>
					<?php } ?>







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
						
					<h3 class="aside-title">Todas las Categorias</h3>
						<ul class="category">

							<?php $sqlCategoria = "SELECT * FROM categoria";

							$categoria = $conn->query($sqlCategoria);

							?>

							<li><a href="blog.php"><span class="fa fa-angle-right"></span>Todas <label> (11)</label></a></li>



							<?php
							while ($row_categoria = $categoria->fetch_assoc()) {

							?>

								<li><a href="blog_categoria.php?id=<?= $row_categoria['Id']; ?>"><span class="fa fa-angle-right"></span><?= $row_categoria['Nombre']; ?></a></li>

							<?php } ?>

						</ul>


					</aside>








					<?php $sqlRecientes = "SELECT * FROM noticias ORDER BY Id DESC LIMIT 3";

					$recientes = $conn->query($sqlRecientes);

					?>

					<aside class="posts p-4 border">

							<h3 class="aside-title">Entradas Recientes</h3>
							<div class="posts-grids">
							<?php
						while ($row_recientes = $recientes->fetch_assoc()) {

						?>
								<div class="posts-grid-inner">
									<div class="posts-grid-left pr-0">
										<a href="blog-single.php?id=<?= $row_recientes['Id']; ?>">
											<img src="<?= $dir . $row_recientes['Id'] . '.jpg'; ?>" alt=" " class="img-responsive ">
										</a>
									</div>
									<div class="posts-grid-right">
										<h4>
											<a href="blog-single.php?id=<?= $row_recientes['Id']; ?>" class="text-bl"><?= $row_recientes['Titulo']; ?></a>
										</h4>
										<span class="price"> 11 Minutes ago</span>
									</div>
								</div>

								<?php } ?>

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