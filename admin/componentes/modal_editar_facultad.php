






<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-facultad2-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">EDITANDO FACULTAD</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- aqui comienza mi formulario -->
                <form action="./php/actualizarFacultad.php" method="POST">

                    <!-- aqui empieza la fila del row -->
                    <div class="row">
                        <div class="col-md-12">
                     <input type="hidden" id="idFacultad" name="idFacultad">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="nombreFacultad" name="nombreFacultad" placeholder="Nombre de la Facultad" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">SEDE</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="sedeFacultad" name="sedeFacultad" required>
                                    <option selected value="">seleccione.....</option>

                                    <?php

                                    while ($row_sede2 = $sede2->fetch_assoc()) { ?>

                                        <option value=" <?php echo  $row_sede2['Id'];  ?>  "> <?php echo  $row_sede2['Nombre']; ?> </option>

                                    <?php }  ?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="campus" class="form-label">CAMPUS</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="campusFacultad" name="campusFacultad" required>
                                    <option selected value="">seleccione.....</option>

                                    <?php

                                    while ($row_campus2 = $campus2->fetch_assoc()) { ?>

                                        <option value=" <?php echo  $row_campus2['Id'];  ?>  "> <?php echo  $row_campus2['Nombre']; ?> </option>

                                    <?php }  ?>

                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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