<?php $this->layout('layouts/admin') ?>

    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <form class="card card-widget p-3" action="/almacen/save" method="POST">
                <div class="card-header">
                    <h4 class="d-inline">Crear Almacen</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" type="text" placeholder="Default input" name="cantidad">
                        </div>
                        <div class="col-6">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Default input" name="nombre">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Peldaño</label>
                            <input class="form-control" type="text" placeholder="Default input" name="peldanos">
                        </div>
                        <div class="col-6">
                            <label>Codigo</label>
                            <input class="form-control" type="text" placeholder="Default input" name="idalmacen">
                        </div>
                    </div>
                    
                    <div class="d-flex jb fila-form">

                    </div>
                    <div class="d-flex jend mt-5">
                        <button class="btn btn-primary">Crear Almacen</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>

</ method="POST"div>