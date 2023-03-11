<?php $this->layout('layouts/admin') ?>

    <!--form-->
    <div class="row jc">
    <?php if (isset($_GET['error'])) : ?>
        <div class="d-flex jc">
            <div class="alert alert-warning alert-dismissible fade show col-md-10" role="alert">
                <strong>Advertencia!</strong> El lote no se encuentra disponible
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>
        <div class="col-md-10 mt-4">
            <div class="card card-widget p-3">
                <div class="card-header">
                    <h4 class="d-inline">Entrega de Medicamentos</h4>
                </div>
                <form action="/entrega/save" method="post" class="card-body">
                    <div class="">
                        <input type="hidden" name="idAtencionPrimaria" value="<?= $atencionMedica->IdAtencionMedica ?>">
                        <input type="hidden" name="IdPersona" value="<?= $atencionMedica->IdPersona?>">
                        <input type="hidden" name="IdAtencionP" value="<?= $atencionMedica->IdAtencionP?>">
                        <?php $user = Auth(); ?>
                            <input type="hidden" name="idMedico" value="<?= $user->IdMedico?>">
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        
                        <div class="col-6">
                            <label>Lote</label>
                            <select class="form-control" name="lote-id" type="text" placeholder="Default">
                                <?php foreach ($lotes as $lote) : ?>
                                    <option value="<?=$lote->IdLote?>"><?= $lote->medicaNombre.' '. $lote->CantidadMedicamento?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" name="cantidad" max="<?=$lote->CantidadLote?>" type="number" placeholder="Cantidad de Medicamento">
                            <span class="text-gray mt-4" style="font-size: 12px; font-style:italic;">Cantidades disponibles: <span class="text-dark text-bold"><?=$lote->CantidadLote?> unidades</span></span>
                        </div>
                    </div>
                    <div class="d-flex jend mt-5 mr-5">
                        <button class="btn btn-primary">Entregar</button>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>