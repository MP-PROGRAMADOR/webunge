<h2>Carreras</h2>
<div class="col-md-12 col-sm-12  ">


    <!-- alerta -->

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'insertado') {
    ?>

        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Hola!</strong> su registro se ha insertado.
        </div>

    <?php

    }

    ?>


<!-- alerta -->

<?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>

        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Eroor !</strong> al insertar los registros.
        </div>

    <?php

    }

    ?>




    <div class="x_panel">
        <div class="x_title">

            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Nuevo Campus </a> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-carrera-modal-lg"><i class="fa fa-plus"></i>  Nueva Carrera</button>
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
                <!-- <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div> -->
                <input type="text" id="buscador" class="form-control" placeholder="Buscar...">
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">


            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                                <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">NOMBRE DEL CAMPUS</th>
                            <th class="column-title">FACULTAD </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody id="tablita">


                        <?php while ($row_carrera = $carrera->fetch_assoc()) {  ?>

                            <tr class="even pointer">

                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>

                                <td> <?= $row_carrera['Id']; ?></td>
                                <td> <?= $row_carrera['Nombre']; ?></td>
                                <td> <?= $row_carrera['Facultad']; ?></td>

                                <td>
                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target=".bs-editar-modal-lg" data-bs-id_usuario="<?= $row_carrera['Id'];   ?>">EDITAR</a>

                                    <a href="#" onclick="alertarEliminar();" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModalusuario" data-bs-id_usuario="<?= $row_carrera['Id'];   ?>">ELIMINAR</a>

                                </td>
                            </tr>


                        <?php } ?>


                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>

<script>
                function alertarEliminar(){
                    // e.preventDefault();
                  // alert("Estas seguro que quieres eliminar");
                   Swal.fire({
                    title: '¿Estas seguro?',
                    text: "¡No podrás recuperarlo más!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'sí, eliminarlo!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                      Swal.fire(
                      '¡Eliminado!',
                      'Su registro ha sido eliminado.',
                      'success'
                      )
                    }
                    })                 
                }
                $(document).ready(function(){
                  $("#buscador").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#tablita tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
              </script>