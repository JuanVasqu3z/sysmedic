<?php $this->layout('layouts/admin') ?>

<!--form-->
<div class="row jc">
    <div class="col-md-10 mt-4">
        <div class="card card-widget p-3">
            <div class="card-header">
                <h4 class="d-inline">Registro de Lote</h4>
            </div>
            <form action="/lote/save" method="POST" class="card-body">
                <div class="d-flex jb fila-form mb-4">
                    <div class="col-6">
                        <label>Almacen</label>
                        <select class="form-control" name="almacen_id" id="almacen_id">
                            <?php foreach ($almacenes as $almacen) : ?>
                                <option value="<?= $almacen->IdAlmacen ?>"><?= $almacen->Nombre ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label>Medicamento</label>
                        <select class="form-control" name="medicamento_id" id="medicamento_id">
                            <?php foreach ($medicamentos as $medicamento) : ?>
                                <option value="<?= $medicamento->Codigo  ?>"><?= $medicamento->Nombre ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="d-flex jb fila-form mb-4">
                    <div class="col-6">
                        <label>Fecha de Ingreso</label>
                        <input class="form-control" type="date" name="date_input" placeholder="Default input">
                    </div>
                    <div class="col-6">
                        <label>Fecha de Vencimiento</label>
                        <input class="form-control" type="date" name="date_due" placeholder="Default input">
                    </div>
                </div>
                <div class="d-flex jb fila-form mb-4">
                    <div class="col-6">
                        <label>Fecha de Expedicion</label>
                        <input class="form-control" type="date" name="date_exp" placeholder="Default input">
                    </div>
                    <div class="col-6">
                        <label>Cantidad</label>
                        <input class="form-control" type="number" name="cantidad" placeholder="Default input">
                    </div>
                </div>
                <div class="d-flex jend mt-4">
                    <button class="btn btn-primary">Registrar</button>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

</div>