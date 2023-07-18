<?php require_once"./componentes/header.php";?>

<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Contactanos</h2>
      <p><a href="index.php">Inicio</a> &nbsp; / &nbsp; Contacto</p>
    </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
               
                <!-- contact address -->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">
                            
                           <div class="cont-add-rgt">
                            <h4>Direecion:</h4>
                            <p class="contact-text-sub">Avenida Hassan II</p>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add add-2">
                            
                           <div class="cont-add-rgt">
                            <h4>Email:</h4>
                            <a href="mailto:ungecooperacion@gmail.com">
                                <p class="contact-text-sub">ungecooperacion@gmail.com</p>
                            </a>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add">
                           
                            <div class="cont-add-rgt">
                                 <h4>Telefono:</h4>
                                 <a href="tel:+240 333 09 16 44">
                                    <p class="contact-text-sub">+240 333 09 16 44</p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                        </div>
                        <div class="cont-add add-3">
                           
                            <div class="cont-add-rgt">
                                 <h4>Síguenos en:</h4>
                                 <div class="main-social-1 mt-2">
                                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="cont-add-lft">
                               
                           </div>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">
                   
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Tu Nombre" name="w3lName" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
                        <input type="text" placeholder="Numero de Telefono" name="w3lName" id="w3lName" required="">
                        <textarea placeholder="Escriba tu mensaje aqui" name="w3lMessage" id="w3lMessage" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-theme2">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63700.232559648764!2d8.711345521679686!3d3.7524755000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10669fa93ae37353%3A0xf256aae31ecef5d8!2sUniversidad%20Nacional%20de%20Guinea%20Ecuatorial%2C%20Campus%202!5e0!3m2!1sen!2s!4v1685187917146!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
<!-- grids block 5 -->
<?php require_once"./componentes/footer.php";?>
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


