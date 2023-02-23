<?php $this->layout('layouts/admin') ?>

<div class="row jc">
    <div class="col-md-10 mt-4">
        <div class="card list-table p-3">
            <div class="card-header">
                <h4 class="d-inline">Lista de espera</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Asistente Medico</th>
                            <th>Motivo de Consulta</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaEspera as $tupla) : ?>
                            <tr>
                                <td><?= $tupla->Nombre ?> <?= $tupla->Apellido ?></td>
                                <td>Sherman Santa Cruz</td>
                                <td><?= $tupla->MotivoDeconsulta ?></td>
                                <td><?= $tupla->Fecha ?></td>
                                <td><?= $tupla->Hora ?></td>
                                <td>
                                    <a href="/Paciente/AtencionMedica/<?= $tupla->IdAtencionP ?>"><i class="fa fa-regular fa-check mr-2 text-success"></i></i></a>
                                    <a href=""><i class="fa fa-regular fa-trash text-danger"></i></a>
                                </td>
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