<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-editar-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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

                        <input type="hidden" class="form-control" id="idCamp" name="id" required>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="nombreCamp" name="nombre"  required>
                            </div>

                            <div class="mb-3">
                                
                                <label for="departamento" class="form-label">DEPARTAMENTO</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="ubicacionCamp" name="ubicacion" required>
                                    <option selected value="">seleccione.....</option>
                                    <option value="CAMPUS I DE MALABO">CAMPUS I DE MALABO</option>
                                    <option value="CAMPUS II DE MALABO">CAMPUS II DE MALABO</option>
                                    <option value="CAMPUS DE BATA">CAMPUS DE BATA</option>
                                    <option value="CAMPUS DE MONGOMO">CAMPUS DE MONGOMO</option>
                                </select>
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