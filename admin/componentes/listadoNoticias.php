 <!-- page content -->
 <div class="col-md-12 col-sm-12">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3> Noticias </h3>
             </div>

             <div class="title_right">
                 <!-- <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search for...">
                         <span class="input-group-btn">
                             <button class="btn btn-default" type="button">Go!</button>
                         </span>
                     </div>
                 </div> -->
             </div>
         </div>

         <div class="clearfix"></div>

         <div class="row">
             <div class="col-md-12">
                 <div class="x_panel">
                     <div class="x_title">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-noticia-modal-lg"><i class="fa fa-plus"></i> Nueva Noticia</button>
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
                     <div class="x_content">

                         <div class="row">
                             <?php


                                $sqlCarreras = "SELECT * FROM noticias";

                                $carreras = $conn->query($sqlCarreras);

                                ?>

                             <?php while ($carrera = mysqli_fetch_array($carreras)) {

                                    $datos = $carrera['Id'] . "||" . $carrera['Titulo'] . "||" . $carrera['Descripcion']
                                    . "||" . $carrera['Dia']. "||" . $carrera['Mes']. "||" . $carrera['Agno']. "||"
                                     . $carrera['Categoria']. "||" . $carrera['Facultad'];

                                     

                                ?>

                                 <div class="col-md-55"> 
                                     <div class="thumbnail">
                                         <div class="image view view-first">
                                             <img style="width: 100%; display: block;" src="./images/noticias/<?php echo $carrera['Img']; ?>" alt="image" />
                                             <div class="mask">
                                                 <?php
                                                    $CodCate = $carrera['Categoria'];
                                                    $qCateg = "SELECT * FROM categoria WHERE Id = '$CodCate'";
                                                    $categorias = $conn->query($qCateg);

                                                    while ($categori = mysqli_fetch_array($categorias)) {
                                                    ?>
                                                     <p><?php echo $categori['Nombre']; ?></p>
                                                 <?php } ?>

                                                 <div class="tools tools-bottom">
                                                     <a href="#"><i class="fa fa-eye"></i></a>
                                                    
                                                     <a href="#" onclick="agregarForm('<?php echo $datos; ?>');" class="btn btn-sm" data-toggle="modal" data-target=".bs-noticia2-modal-lg"> <i class="fa fa-pencil"></i></a>
                                                     <a href="#" onclick="alertarEliminar('<?php echo $carrera['Id']; ?>');" data-bs-id_usuario="<?= $carrera['Id'];   ?>" ><i class="fa fa-times"></i></a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="caption">
                                             <p><?php echo $carrera['Titulo']; ?></p>
                                         </div>
                                     </div>
                                 </div>
                             <?php  } ?>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /page content -->

<Script>


function alertarEliminar(id) {
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
