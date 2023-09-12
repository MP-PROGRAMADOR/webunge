 <!-- page content -->
 <div class="col-md-12 col-sm-12">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3> Eventos </h3>
             </div>
         </div>

         <div class="clearfix"></div>

         <div class="row">
             <div class="col-md-12">
                 <div class="x_panel">
                     <div class="x_title">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-agenda-modal-lg"><i class="fa fa-plus"></i> Nuevo Evento</button>
                         <ul class="nav navbar-right panel_toolbox">
                             <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                             </li>
                             <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <a class="dropdown-item" href="#">Settings 1</a>
                                     <a class="dropdown-item" href="#">Settings 2</a>
                                 </div>
                             </li>
                             <li><a class="close-link"><i class="fa fa-close"></i></a>
                             </li> -->
                             <input type="text" class="form-control" placeholder="Buscar...">
                         </ul>
                         <div class="clearfix"></div>
                     </div>
                     <div class="contenido">
                         <?php

                            $qLugar = "SELECT lugar.Id, lugar.FechaEvento, lugar.HoraEvento, lugar.Facultad, evento.titulo FROM lugar INNER JOIN evento ON lugar.Evento = evento.Id ORDER BY Id DESC";
                            $ResulLugar = mysqli_query($conn, $qLugar);
                            while ($filas = mysqli_fetch_array($ResulLugar)) {
                            ?>

                             <div class="event">
                             <?php
                                    $idFacul = $filas['Facultad'];
                                    $qFacul = "SELECT facultad.Nombre FROM facultad WHERE facultad.Id = '$idFacul'";
                                    $ResulFacul = mysqli_query($conn, $qFacul);
                                    while ($Facu = mysqli_fetch_array($ResulFacul)) {
                                    ?>
                                 <div class="topEvent">Lugar: <?php echo $Facu['Nombre']; ?></div>
                                 <?php }?>
                                 <div class="bodyEvent">
                                     <div class="fechaEvent">
                                         <?php

                                            $fecha = $filas['FechaEvento'];
                                            $fechaEntera = strtotime($fecha);
                                            $dia = date('d', $fechaEntera);
                                            $mes = date('M', $fechaEntera);
                                            $yearEvent = date('Y', $fechaEntera);
                                           
                                            ?>
                                         <div class="dia"><?php echo $dia; ?></div>
                                         <div class="mes"><?php echo $mes; ?></div>
                                         <div class="yearEv"><?php echo $yearEvent; ?></div>
                                     </div>
                                     <div class="detallesEvent">
                                         <div class="tituloEvent"><?php echo $filas['titulo']; ?></div>
                                         <div class="pie">
                                             <div class="hora"><?php echo $filas['HoraEvento']; ?>H</div>
                                             <div class="descrip">
                                                 <button type="button" class="btnVer" data-toggle="modal" data-target=".bs-noticia-modal-lgs"><i class="fa fa-eye"></i></button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         <?php } ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /page content -->

 <Script>
     // *********************
     function alertarEliminar(id) {
         // e.preventDefault();
         // alert("Estas seguro que quieres eliminar");
         var codigo = id;
         //  alert("Estas seguro que quieres eliminar"+codigo);
         //  return false;
         Swal.fire({
             title: '¿Realmente quieres eliminar este Campus?',
             text: "¡Este Campu será eliminada permanentemente!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Sí, Eliminar',
             cancelButtonText: 'No'
         }).then((result) => {
             if (result.isConfirmed) {
                 EliminarSala(id);
             }
         })
     }
     // *******************



     function alertarSala(id) {
         // alert("el id recibido es: "+id);  
         parametro = {
             "id": id
         }
         $.ajax({
             data: parametro,
             url: './php/eliminarNoticia.php',
             type: 'POST',
             beforeSend: function() {},
             success: function() {
                 Swal.fire(
                     '¡Eliminado!',
                     'La carrera ha sido eliminado exitosamente',
                     'success'

                 )
                 // location.reload();            
             }

         })

     }



     // agregar datos al formulario
     function agregarForm(datos) {
         var d = datos.split('||');
         // alert("los datos son: "+d);
         // return false;
         $('#idNoticia').val(d[0]);
         $('#tituloNoticia').val(d[1]);
         $('#descripcionNoticia').val(d[2]);
         $('#diaNoticia').val(d[3]);
         $('#mesNoticia').val(d[4]);
         $('#agnoNoticia').val(d[5]);
         $('#facultadNoticia').val(d[6]);
         $('#categoriaNoticia').val(d[7]);
     }
 </Script>