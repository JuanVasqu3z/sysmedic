<?php

use App\Models\AtencionMedica;

 $this->layout('layouts/admin') ?>
<div class="row jc">
    <div class="col-md-10 mt-4 p-2">
        <!-- Box Comment -->
        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="<?= assets('image/avatar.png') ?>" alt="User Image" id="imagen">
                    <span class="username text-primary" id="nombreCompleto"><?= $persona->Nombre ?> <?= $persona->Apellido ?></span>
                    <div class="d-flex sub-nombre">
                        <small class="mr-2" id="tipo">Estudiante</small>
                        <small class="mr-2">de</small>
                        <small id="carrera">Informatica</small>
                    </div>
                </div>
                <!-- /.user-block -->
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <!-- post text -->
                <div class="d-flex form-fila mt-2 je">
                    <div class="col-3">
                        <small class="">Cedula</small>
                        <p class="" id="cedula"><?= $persona->Cedula ?> </p>
                    </div>
                    <div class="col-4">
                        <small>Direccion</small>
                        <p class="" id="direccion"><?= $persona->Direccion ?></p>
                    </div>
                    <div class="col-3">
                        <small>Numero Telefonico</small>
                        <p id="numerot"><?= $persona->NumeroTelefono ?></p>
                    </div>
                </div>

                <div class="d-flex mt-3 form-fila je">
                    <div class="col-3">
                        <small class="">Sexo</small>
                        <p class="" id="sexo"><?= $persona->Sexo ?></p>
                    </div>
                    <div class="col-4">

                    </div>
                    <div class="col-3">

                    </div>
                </div>
            </div>

            <!-- Tabla de Atencion Medica-->
            <div class="card-body table-responsive mt-3 px-5">
                <?php if(isset($atencionMedica)) :?>
                    <h4 class="ml-2 mb-0">Atendidas</h4>
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th>Motivo</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($atencionMedica as $medica) : ?>
                                <tr>
                                    <td><?= $medica->MotivoDeconsulta ?></td>
                                    <td><?= $medica->Fecha ?></td>
                                    <td><?= $medica->Hora ?></td>
                                    <td>
                                        <a href="/Paciente/Detail/<?= $medica->IdAtencionMedica?>"><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif;?>
                <?php if(!isset($atencionMedica)) :?>
                    <div class=" p-3 justify-content-center">
                        <h2 class="text-center">El Paciente no a sido atendido</h2>
                    </div>
                <?php endif;?>
            </div>
            <!-- Tabla de AtencionPrimaria  -->
            <?php if($primariaAtencion == true) :?>
                <div class="card-body table-responsive mt-5 bordT px-5">
                    <h4 class="ml-2 mb-0">No Atendidas</h4>
                    <table class="table table-hover  table-borderless">
                        <thead>
                            <tr>
                                <th>Motivo</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($primariaAtencion as $primaria) : ?>
                                <tr>
                                    <td><?= $primaria->MotivoDeconsulta ?></td>
                                    <td><?= $primaria->Fecha  ?></td>
                                    <td><?= $primaria->Hora  ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
</div>