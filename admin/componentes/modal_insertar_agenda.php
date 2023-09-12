<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-agenda-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">AGENDANDO UN EVENTO</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- aqui comienza mi formulario -->
                <form action="./php/guardar_agenda.php" method="POST">

                    <!-- aqui empieza la fila del row -->
                    <div class="row">
                        <div class="col-md-12">

                            <div class="mb-3">

                                <label for="departamento" class="form-label">Evento</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="ubicacion" name="evento" required>
                                    <option selected value="">seleccione un evento.....</option>
                                    <?php while ($eventos = mysqli_fetch_array($Evento)) { ?>
                                        <option value="<?php echo $eventos['Id']; ?>"><?php echo $eventos['titulo']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">

                                <label for="departamento" class="form-label">¿Dónde se realizará el evento?</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="ubicacion" name="facultad" required>
                                    <option selected value="">seleccione una facultad.....</option>
                                    <?php while ($facultad = mysqli_fetch_array($facul)) { ?>
                                        <option value="<?php echo $facultad['Id']; ?>"><?php echo $facultad['Nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>



                            <div class="mb-3">
                                <label for="nombre" class="form-label">FECHA DEL EVENTO</label>
                                <input type="date" class="form-control" id="nombre" name="fecha" placeholder="Nombre de la Carrera" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">HORA DEL EVENTO</label>
                                <input type="time" class="form-control" id="nombre" name="hora" placeholder="Nombre de la Carrera" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </div>

                        </div>



                    </div>
                    <!-- aqui termina la fila del row -->

                </form>

            </div>


        </div>
    </div>
</div>