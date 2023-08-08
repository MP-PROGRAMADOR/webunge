<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-editarSede-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="EditarModalCampusLabel">EDITANDO REGISTROS CAMPUS</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- aqui comienza mi formulario -->
                <form>

                    <!-- aqui empieza la fila del row -->
                    <div class="row">
                        <div class="col-md-12">

                            <input type="hidden" class="form-control" id="idSede" name="id" required>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="nombreSede" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="direccionSede" name="nombre" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="btnActualizarSede">GUARDAR</button>
                            </div>

                        </div>



                    </div>
                    <!-- aqui termina la fila del row -->

                </form>

            </div>


        </div>
    </div>
</div>