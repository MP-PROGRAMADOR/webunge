<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-noticia-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">NUEVA NOTICIA</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- aqui comienza mi formulario -->
                <form action="./php/guardar_noticia.php" method="POST">

                    <!-- aqui empieza la fila del row -->
                    <div class="row">
                        <div class="col-md-12">

                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Títulos de la noticia" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Descripción</label>
                                <textarea name="descripcion" id="ckeditor" class="ckeditor" required> </textarea>
                                <!-- <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Títulos de la noticia" required> -->
                            </div>
                            <div class="mb-3 fechaNoticia">
                                <div class="dia">
                                    <label for="dia">Dia</label>
                                    <select class="form-control" name="dia" id="dia" class="form-label">
                                        <option value="">Seleccione un dia.....</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div class="mes">
                                    <label for="dia">Mes</label>
                                    <select class="form-control" name="mes" id="dia" class="form-label">
                                        <option value="">Seleccione un mes.....</option>
                                        <option value="Ene">Enero</option>
                                    </select>
                                </div>
                                <div class="agno">
                                    <label for="dia">Año</label>
                                    <select class="form-control" name="agno" id="dia" class="form-label">
                                        <option value="">Seleccione un año.....</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                            </div>

                            <?php

                            $sqlFacultad = "SELECT * FROM facultad";
                            $resulGrupo = mysqli_query($conn, $sqlFacultad);

                            ?>

                            <div class="mb-3">

                                <label for="facultad" class="form-label">FACULTAD</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="ubicacion facultad" name="facultad" required>
                                    <option selected value="">seleccione una facultad.....</option>
                                    <?php while ($grupos = mysqli_fetch_array($resulGrupo)) { ?>
                                        <option value="<?php echo $grupos['Id']; ?>"><?php echo $grupos['Nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <?php

                            $sqlCategoria = "SELECT * FROM categoria";
                            $resulCateg = mysqli_query($conn, $sqlCategoria);

                            ?>

                            <div class="mb-3">

                                <label for="categoria" class="form-label">CATEGORIA</label>
                                <select class="form-control" aria-label=".form-select-lg example" id="categoria" name="categoria" required>
                                    <option selected value="">seleccione una categoria.....</option>
                                    <?php while ($grupos = mysqli_fetch_array($resulCateg)) { ?>
                                        <option value="<?php echo $grupos['Id']; ?>"><?php echo $grupos['Nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="imgnoti">
                                <input type="file" name="imgnoti">
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