<?php $this->layout('layouts/admin') ?>

<div class="row jc">
    <div class="col-md-10 mt-4">
        <?php if ($listaEspera == true) : ?>
            <div class="card list-table p-3">
                <div class="card-header">
                    <h4 class="d-inline">Lista de espera</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th>Nombre del Paciente</th>
                                <th>Personal De Salud</th>
                                <th>Motivo de Consulta</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <?php if (validatePermise('crear_persona')) : ?>
                                    <th>Accion</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaEspera as $tupla) : ?>
                                <tr>
                                    <td><?= $tupla->Nombre ?> <?= $tupla->Apellido ?></td>
                                    <td><?= $tupla->NombreMedico ?> <?= $tupla->ApellidoMedico ?></td>
                                    <td><?= $tupla->MotivoDeConsulta ?></td>
                                    <td><?= $tupla->Fecha ?></td>
                                    <td><?= $tupla->Hora ?></td>
                                    <td>
                                        <?php if (validatePermise('crear_persona')) : ?>
                                            <a href="/Paciente/AtencionMedica/<?= $tupla->IdAtencionP ?>"><i class="fa fa-regular fa-check mr-2 text-success"></i></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        <?php endif ?>
        <?php if ($listaEspera == false) : ?>
            <div class="card list-table p-3 justify-content-center">
                <h3 class="text-center">La lista de espera esta vacia</h3>
            </div>
        <?php endif ?>

    </div>
</div>
</div>