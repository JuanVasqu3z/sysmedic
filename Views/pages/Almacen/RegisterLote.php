<?php $this->layout('layouts/admin') ?>

    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <div class="card card-widget py-2">
                <div class="card-header">
                    <h4 class="d-inline">Registro de Lote</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Almacen</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Medicamento</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Fecha de Ingreso</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Fecha de Vencimiento</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Fecha de Expedicion</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form">
                        <div class="col-6">
                            <label>Total</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jend mt-4">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>