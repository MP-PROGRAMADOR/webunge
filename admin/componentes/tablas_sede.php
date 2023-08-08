<h2>Sede</h2>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-sede-modal-lg"><i class="fa fa-plus"></i> Nueva Sede</button>
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
                            <th class="column-title">NOMBRE DE LA SEDE</th>
                            <th class="column-title">DIRECCION </th>
                            <th class="column-title no-link last"><span class="nobr">ACCIONES</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody id="tablita">


                        <?php
                        while ($row_sede = $sede->fetch_assoc()) {
                            $datos = $row_sede['Id'] . "||" . $row_sede['Nombre'] . "||" . $row_sede['Direccion'];
                        ?>

                            <tr class="even pointer">

                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>

                                <td> <?= $row_sede['Id']; ?></td>
                                <td> <?= $row_sede['Nombre']; ?></td>
                                <td> <?= $row_sede['Direccion']; ?></td>

                                <td>
                                    <a href="#" onclick="agregarForm('<?php echo $datos; ?>');" class="btn btn-sm btn-warning" data-toggle="modal" data-target=".bs-editarSede-modal-lg">EDITAR</a>

                                    <a href="#" onclick="alertarEliminar('<?php echo $row_sede['Id']; ?>');" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModalusuario" data-bs-id_usuario="<?= $row_sede['Id'];   ?>">ELIMINAR</a>

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
    function EliminarSala(id) {
        // alert("el id recibido es: "+id);  
        parametro = {
            "id": id
        }
        $.ajax({
            data: parametro,
            url: './php/eliminarSede.php',
            type: 'POST',
            beforeSend: function() {},
            success: function() {
                Swal.fire(
                    '¡Eliminado!',
                    'La carrera ha sido eliminado exitosamente',
                    'success'
                )
                setInterval('location.reload()', 3000);
            }

        })

    }
    // *********************
    function alertarEliminar(id) {
        // e.preventDefault();
        // alert("Estas seguro que quieres eliminar");
        var codigo = id;
        //  alert("Estas seguro que quieres eliminar"+codigo);
        //  return false;
        Swal.fire({
            title: '¿Realmente quieres eliminar esta Sede?',
            text: "¡Esa Sede será eliminada permanentemente!",
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
    // agregar datos al formulario
    function agregarForm(datos) {
        var d = datos.split('||');
        // alert("los datos son: "+d);
        // return false;
        $('#idSede').val(d[0]);
        $('#nombreSede').val(d[1]);
        $('#direccionSede').val(d[2]);
    }

    // esta funcion actualiza los datos
    function actualizarSede() {
        var idSede = $('#idSede').val();
        var nomSede = $('#nombreSede').val();
        var direccionSede = $('#direccionSede').val();

        var cadena = "idSede=" + idSede +
            "&nomSede=" + nomSede +
            "&direccionSede=" + direccionSede;

        $.ajax({
            type: "POST",
            url: "./php/actualizarSede.php",
            data: cadena,
            success: function(r) {
                if (r == 1) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Sede actualizado exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal!',
                        footer: '<a href="">¿Por qué tengo este problema?</a>'
                    })
                }
            }
        })
    }


    $(document).ready(function() {
        $("#buscador").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tablita tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>