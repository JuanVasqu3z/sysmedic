<?php $this->layout('layouts/admin') ?>


    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <form class="card card-widget py-2" action="/medicine/save" method="POST">
                <div class="card-header">
                    <h4 class="d-inline">Registro de Medicamentos</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Codigo</label>
                            <input class="form-control" type="text" placeholder="Default input" name="codigo">
                        </div>
                        <div class="col-6">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Default input" name="nombre">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Tipo</label>
                            <input class="form-control" type="text" placeholder="Default input" name="tipo">
                        </div>
                        <div class="col-6">
                            <label>Presentacion</label>
                            <input class="form-control" type="text" placeholder="Default input" name="presentacion">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form">
                        <div class="col-6">
                            <label>Unidad</label>
                            <input class="form-control" type="text" placeholder="Default input" name="unidad">
                        </div>
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" type="text" placeholder="Default input" name="cantidad">
                        </div>
                    </div>
                    <div class="d-flex jend mt-5">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
</ method="POST"div>