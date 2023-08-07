<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-carrera2-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">EDITANDO CARRERAS</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- aqui comienza mi formulario -->
                <form >

                    <!-- aqui empieza la fila del row -->
                    <div class="row">
                        <div class="col-md-12">

                        <input type="hidden" name="idCarrera" id="idCarrera">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" placeholder="Nombre de la Carrera" required>
                            </div>

                            <?php

                                $sqlFacultad = "SELECT * FROM facultad";
                                $resulGrupo = mysqli_query($conn, $sqlFacultad);

                            ?>

                            <div class="mb-3">

                                <label for="departamento" class="form-label">FACULTAD</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="facultadCarrera" name="facultadCarrera" required>
                                    <option selected value="">seleccione una facultad.....</option>
                                    <?php while ($grupos = mysqli_fetch_array($resulGrupo)) { ?>
                                        <option value="<?php echo $grupos['Id']; ?>"><?php echo $grupos['Nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" id="btnActualizarCarreras" class="btn btn-primary">ACTUALIZAR</button>
                            </div>

                        </div>


                    </div>
                    <!-- aqui termina la fila del row -->

                </form>

            </div>


        </div>
    </div>
</div>