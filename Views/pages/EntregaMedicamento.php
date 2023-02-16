<?php $this->layout('layouts/admin') ?>

    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <div class="card card-widget p-3">
                <div class="card-header">
                    <h4 class="d-inline">Entrega de Medicamentos</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Atencion Medica</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Lote</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Fecha</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form">
                        <div class="col-6">
                            <label>Responsable</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex jend mt-5">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>