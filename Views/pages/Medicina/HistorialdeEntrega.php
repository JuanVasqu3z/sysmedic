<?php $this->layout('layouts/admin') ?>

<div class="row jc">
    <div class="col-md-10 mt-4">
            <div class="card list-table p-3">
                <div class="card-header">
                    <h4 class="d-inline">Historial de Entrega</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-borderless table-hover ">
                        <thead>
                            <tr>
                                <th>Medicamento</th>
                                <th>Nombre del Paciente</th>
                                <th>Cantidad Entregada</th>
                                <th>Fecha de Entrega</th>
                                <th>Responsable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($entregas as $entrega) : ?>
                                <tr>
                                    <td><?=$entrega->NombreMedicamento?> <?=$entrega->Presentancion?> <?=$entrega->CantidadMedicamento?></td>
                                    <td><?=$entrega->Nombre?> <?=$entrega->Apellido?></td>
                                    <td><?=$entrega->Cantidad?></td>
                                    <td><?=$entrega->FechaEntrega?></td>
                                    <td><?=$entrega->NombreMedico?> <?=$entrega->ApellidoMedico?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
    </div>
</div>
</div>