<?php
require_once "./admin/php/conexion.php";
require_once "./componentes/header.php";
?>

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">

    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>
                    La UNGE participa en los trabajos para reactivar la Conferencia de Rectores de Universidades...
                  </h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="historia.php">Leer Más</a>
                </div>

              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>El Embajador Gilmour se reunió con el Excmo. Rector Magnífico de la UNGE, Filiberto Ntutumu para discutir... </h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Leer Más</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>
                    2.135 Egresados de la UNGE recibirán sus títulos académicos.
                    0
                  </h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Leer Más</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>
                    La Universidad Nacional de Guinea Ecuatorial recibe información sobre la Planificación Familiar.
                  </h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Leer Más</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

  </div>


  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
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
  <!-- /main-slider -->
</section>
<section class="w3l-feature-3" id="features">
  <div class="grid top-bottom mb-lg-5 pb-lg-5">
    <div class="container">

      <div class="middle-section grid-column text-center">
        <div class="three-grids-columns">
          <span class="fa fa-laptop"></span>
          <h4>Campus Virtual</h4>
          <p>El Campus virtual UNGE es un espacio de formación, de respeto a la dignidad de las personas y de intercambio de ideas
            y conocimientos. El Campus virtual UNGE es una plataforma destinada a estudiar y a enseñar.</p>
          <a href="https://campusvirtualunge.com/login/index.php" target="_blank" class="btn btn-secondary btn-theme3 mt-4">Acceder </a>
        </div>
        <div class="three-grids-columns">
          <span class="fa fa-users"></span>
          <h4>La UNGE</h4>
          <p>La Universidad Nacional de Guinea Ecuatorial, en anagrama UNGE, se creó a iniciativa de S.E. OBIANG NGUEMA MBASOGO
            mediante Decreto Ley Nº 12, de fecha 6 de enero de 1.995, con el objetivo de formar cuadros nacionales en el suelo
            patrio...</p>
          <a href="historia.php" class="btn btn-secondary btn-theme3 mt-4">Leer Más </a>
        </div>
        <div class="three-grids-columns">
          <!-- <span class="fa fa-book"></span> -->
          <h4>Últimas Noticias</h4>
          <?php require_once("./componentes/slider.php"); ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- features-4 block -->
<section class="w3l-index1" id="about">
  <div class="calltoaction-20  py-5 editContent">
    <div class="container py-md-3">

      <div class="calltoaction-20-content row">
        <div class="column center-align-self col-lg-6 pr-lg-5">
          <h5 class="editContent">Bienvenidos a nuestro Campus</h5>
          <h3 class="editContent">Acceso a la UNGE</h3>
          <p class="more-gap editContent">Para poder acceder a a la Universidad Nacional de Guinea Ecuatorial, el estudiante
            debe poseer los siguientes documentos.
          </p>
					<a class="btn btn-secondary btn-theme2 mt-3" href="#acceso"> Leer Más</a>
				</div>
				<div class="column ccont-left col-lg-6">
					<img src="assets/images/unge/principal2.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- features-4 block -->
<section class="services-12" id="course">
  <div class="form-12-content">
    <div class="container">
      <div class="grid grid-column-2 ">

        <div class="column1">
          <div class="heading">
            <h3 class="head text-white">La UCM se implanta en la UNGE</h3>
            <h4></h4>
            <p class="my-3 text-white"> La Universidad Complutense de Madrid (UCM) impulsa las relaciones de cooperación con la Universidad Nacional de Guinea Ecuatorial (UNGE).</p>
          </div>
        </div>
        <div class="column2">
          <a class="btn btn-secondary btn-theme2 mt-3" href="https://www.ucm.es/eca/" target="_blank"> Ver Más</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //inicio de acceso a la UNGE -->
<section class="w3l-features-1" id="acceso">
  <!-- /features -->
  <div class="features py-4">
    <h3 class="head" style="text-align: center; padding:20px; font-weight: bold;">Acceso a la UNGE</h3>
    <p style="text-align: center; padding-bottom:10px;">Para cursar una carrera en la Universidad Nacional de Guinea Ecuatorial debes cumplir con los siguientes requisitos.</p>
    <div class="container pb-5">

      <div class="fea-gd-vv row ">
        <div class="float-lt feature-gd col-lg-4 col-sm-6">

          <div class="icon-info">
            <h5>Nuevos Estudiantes</h5>
            <p>Documentación:</p>
            <ul class="cont-4">
              <li><span class="fa fa-check"></span>Instancia de solicitud de matricula dirigida al decano de la facultad</li>
              <li><span class="fa fa-check"></span>Certificado de selectividad o estudios equivalentes </li>
              <li><span class="fa fa-check"></span>Hoja académica actualizada de los estudios realizados</li>
              <li><span class="fa fa-check"></span>Fotocopia de documento de identidad personal o pasaporte en vigor </li>
              <li><span class="fa fa-check"></span>Dos Fotografías de tamaño carnet en color </li>
              <li><span class="fa fa-check"></span>Importe de la matricula </li>
            </ul>
            <a href="contact.php" class="btn btn-secondary btn-theme2 mt-md-5 mt-4">Solicita</a>
          </div>

        </div>
        <div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">

          <div class="icon-info">
            <h5>Estudiantes de la UNGE</h5>
            <p>Documentación:</p>
            <ul class="cont-4">
              <li><span class="fa fa-check"></span>Historial Académico del curso anterior</li>
              <li><span class="fa fa-check"></span>Dos fotografías de tamaño carnet</li>
              <li><span class="fa fa-check"></span>Importe de matricula</li>
            </ul>

          </div>
        </div>
        <div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-4">

          <div class="icon-info">
            <h5>Estudiantes de otra Procedencia</h5>
            <p>Documentación:</p>
            <ul class="cont-4">
              <li><span class="fa fa-check"></span>
                De conformidad con la Ley General de Educación vigente, el acceso a los estudios
                Universitarios de los estudiantes con estudios extranjeros y diferentes a los del Sistema Educativo
                Nacional, pasan por la vía de convalidación de los mismos. <br>
                Los estudiantes extranjeros y nacionales que hayan cursado estudios superiores de nivel medio
                del Sistema Educativo Nacional sin haber superado la Prueba de selectividad, sus estudios serán
                equiparados. <br> <a href="#">
                  Ver las normas de régimen académico sobre el acceso de estudiantes a la UNGE.
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- //features -->
</section>
<!-- //fin de acceso a la UNGE -->

<!--  form-12 
<section class="w3l-form-12">
		<div class="form-12-content py-5" id="services">
    <h3 style="text-align:center; text-transform:uppercase;" class="head text-primary">Nuestras Carreras </h3>
			<div class="container py-md-3">
				<div class="grid grid-column-2 py-md-5">    -->

<!--<div class="column1">
						<h4 class="tagline">Find your course</h4>
						<p>Fill in below form to find your courses</p>
							<form action="/" method="Get">
								<div class="">
									<input type="text" name="name" class="form-input" placeholder="Course Name">
								</div>
								<div class="">
									<select id="sel1">
										<option>Category</option>
										<option>Computer</option>
										<option>Science</option>
										<option>History</option>
										<option>Economics</option>
									  </select>
								</div>
								
								
								<button type="submit" class="btn btn-secondary btn-theme2">Submit</button>
							</form>
						</div>-->
<!--<div class="column2">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-6">
								<a href="services.html"><div class="courses-item">
									<span class="fa fa-male"></span>
									<p>Socioligy</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6">
								<a href="services.html"><div class="courses-item">
									<span class="fa fa-suitcase"></span>
									<p>Business</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
								<a href="services.html"><div class="courses-item">
									<span class="fa fa-code"></span>
									<p>Web Dev</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
								<a href="services.html"><div class="courses-item">
									<span class="fa fa-flask"></span>
									<p>Science</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="services.html"><div class="courses-item mt-2">
									<span class="fa fa-money"></span>
									<p>Ecomomics</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="services.html"><div class="courses-item mt-2">
									<span class="fa fa-gg"></span>
									<p>Biology</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="services.html"><div class="courses-item mt-2">
									<span class="fa fa-desktop"></span>
									<p>Computing</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="services.html"><div class="courses-item mt-2">
									<span class="fa fa-mouse-pointer"></span>
									<p>Web Design</p>
								</div></a>
							</div>
						</div>
						</div>
				</div>
			</div>
		</div>
	</section>-->
<!-- // form-12 -->



<!-- specifications -->
<section class="w3l-index2">
  <div class="main-w3 py-5" id="stats">
    <div class="container py-lg-3">
      <div class="row main-cont-wthree-fea">
        <div class="col-lg-3 col-sm-6  mt-lg-0 mt-4">
          <div class="grids-speci1">
            <h3 class="title-spe">1995</h3>
            <p>AÑO DE CREACIÓN</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="grids-speci1">
            <h3 class="title-spe">+700</h3>
            <p>INSTRUCTORES <br>PROFESIONALES</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
          <div class="grids-speci1">
            <h3 class="title-spe">+5062</h3>
            <p>ESTUDIANTES <br>GRADUADOS</p>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
          <div class="grids-speci1">
            <h3 class="title-spe">+500</h3>
            <p>ESTUDIATES</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- //specifications -->
</section>
<!-- customers4 block -->
<!--<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">
  
     <div class="section-title align-center row">
      <div class="item-top col-md-6 pr-md-5">
        <div class="heading">
          <h3 class="head text-white">Hear what our students have to say</h3>
          <p class="my-3 head text-white">Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Nulla mollis dapibus nunc, ut rhoncus
            turpis sodales quis. Integer sit amet mattis quam.</p>
            <p class="my-3 head text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
     </div>
          <div class="item-top col-md-6 mt-md-0 mt-4">
            <div class="item text-center">
             <div class="imgTitle">
               <img src="assets/images/c3.jpg" class="img-responsive" alt="" />
              </div>
              <h6 class="mt-3">Jessey Rosey</h6>
              <p class="">Student</p>
              <p> Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
              
          </div>
         </div>
    </div>
  </div>
  </div>
  
 
</section>-->
<section class="w3l-price-2" id="news">
  <div class="price-main py-5">
    <div class="container py-md-3">
      <div class="pricing-style-w3ls row py-md-5">
        <div class="pricing-chart col-lg-6">
          <h3 class="">Noticias</h3>

          <div class="tatest-top mt-md-5 mt-4">
            <?php

            $qNoti = "SELECT * FROM noticias ORDER BY Id DESC LIMIT 3";
            $ResulNoti = mysqli_query($conn, $qNoti);
            while ($noticias = mysqli_fetch_array($ResulNoti)) {
            ?>

              <div class="price-box btn-layout bt6">
                <div class="grid grid-column-2">
                  <div class="column-6">
                    <img src="admin/php/fotos/<?php echo $noticias['Id'].".jpg"; ?>" alt="" class="img-fluid">
                  </div>
                  <div class="column1">

                    <div class="job-info">

                      <h6 class="pricehead"><a href="blog-single.php?id=<?= $noticias['Id']; ?>"> <?php echo $noticias['Titulo']; ?></a></h6>
                      <P class=""><?=  substr($noticias['Descripcion'],0,100); ?></P>
                      <h5><?php echo $noticias['Dia']; ?> <?php echo $noticias['Mes']; ?>, <?php echo $noticias['Agno']; ?></h5>

                    </div>
                  </div>

                </div>
              </div>
            <?php } ?>




          </div>
          <div class="text-right mt-4">
            <a class="btn btn-secondary btn-theme2" href="blog.php"> Ver Todas</a>
          </div>
        </div>

        <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
          <h3 class="">Próximos Eventos</h3>
          <?php

          $qLugar = "SELECT lugar.Id, lugar.FechaEvento, lugar.HoraEvento, lugar.Facultad, evento.titulo FROM lugar INNER JOIN evento 
          ON lugar.Evento = evento.Id ORDER BY Id DESC LIMIT 2";
          $ResulLugar = mysqli_query($conn, $qLugar);
          while ($filas = mysqli_fetch_array($ResulLugar)) {
          ?>

            <div class="events-top mt-md-5 mt-4">
              <div class="events-top-left">
                <div class="icon-top">
                  <?php

                  $fecha = $filas['FechaEvento'];
                  $fechaEntera = strtotime($fecha);
                  $dia = date('d', $fechaEntera);
                  $mes = date('M', $fechaEntera);
                  $yearEvent = date('Y', $fechaEntera);

                  ?>
                  <h3><?php echo $dia; ?></h3>
                  <p><?php echo $mes; ?></p>
                  <span><?php echo $yearEvent; ?></span>
                </div>
              </div>
              <div class="events-top-right">
                <h6 class="pricehead"><a href="blog.php">
                    <?php echo $filas['titulo']; ?></a></h6>
                <!-- <p class="mb-2 mt-3">
                  Este evento anual tiene como objetivo acercar el conocimiento cultural, científico y tecnológico a la comunidad universitaria
                  y a la sociedad.
                </p> -->
                <li><?php echo $filas['HoraEvento']; ?>H </li>
                <?php
                $idFacul = $filas['Facultad'];
                $qFacul = "SELECT facultad.Nombre FROM facultad WHERE facultad.Id = '$idFacul'";
                $ResulFacul = mysqli_query($conn, $qFacul);
                while ($Facu = mysqli_fetch_array($ResulFacul)) {
                ?>
                  <li class="melb">lUGAR: <?php echo $Facu['Nombre']; ?></li>
                <?php } ?>
              </div>
            </div>
          <?php } ?>

          <div class="text-right mt-4">
            <a class="btn btn-secondary btn-theme2" href="blog.php"> Ver Todos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- grids block 5 footer-->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->