<?php $this->layout('layouts/admin') ?>

    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <div class="card card-widget p-3">
                <div class="card-header">
                    <h4 class="d-inline">Entrega de Medicamentos</h4>
                </div>
            
                <div class="card-body">
                    <div class="">
                        <input type="hidden" name="idAtencionPrimaria" value="<?= $atencionMedica->IdAtencionMedica ?>">
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        
                        <div class="col-6">
                            <label>Lote</label>
                            <select class="form-control" name="medicamento_id" type="text" placeholder="Default">
                                <?php foreach ($lotes as $lote) : ?>
                                    <option value="<?=$lote->IdLote?>"><?= $lote->medicaNombre.'  '. $lote->Unidad. $lote->Presentancion?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" type="number" placeholder="Cantidad de Medicamento">
                        </div>
                    </div>
                    <div class="d-flex jend mt-5 mr-5">
                        <button class="btn btn-primary">Entregar</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>