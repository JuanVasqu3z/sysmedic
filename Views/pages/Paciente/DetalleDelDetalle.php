<?php $this->layout('layouts/admin') ?>

<div class="row jc">
        <div class="col-md-10 mt-4">
            <!-- Box Comment -->
            <div class="card card-widget">
                <div class="card-header">
                    <div class="user-block">
                        <img class="img-circle" src="<?= assets('image/avatar.png') ?>" alt="User Image" id="imagen">
                        <span class="username text-primary" id="nombreCompleto"><?=$Detalle->Nombre?> <?=$Detalle->Apellido?></span>
                        <div class="d-flex sub-nombre">
                        </div>
                    </div>
                    <!-- /.user-block -->
                </div>
                <!-- /.card-header -->
           
                <div class="card-body">
                    <!-- post text -->
                    <div class="d-flex mt-2 mb-2 form-fila je">
                        <div class="col-11">
                            <h5 class="">Atencion Primaria</h5>
                        </div>
                    </div>

                    <div class="d-flex form-fila mt-2 je">
                        <div class="col-3">
                        <small class="">Responsable</small>
                        <p class=""><?=$Detalle->NombreAsistente?> <?=$Detalle->ApellidoAsistente?></p>
                        </div>
                        <div class="col-4">
                        <small>Fecha</small>
                        <p class=""><?=$Detalle->Fecha?></p>
                        </div>
                        <div class="col-3">
                        <small>Hora</small>
                        <p><?=$Detalle->Hora?></p>
                        </div>
                    </div>

                    <div class="d-flex mt-3 form-fila je">
                        <div class="col-11">
                        <small class="">Motivo</small>
                            <p class=""><?=$Detalle->MotivoDeconsulta?></p>
                        </div>
                    </div>
                </div>
                <!-- Detalle de la Atencion Medica -->
                <div class="card-body bordT">
                    <!-- post text -->
                    <div class="d-flex mt-2 mb-2 form-fila je">
                        <div class="col-11">
                            <h5 class="">Atencion Medica</h5>
                        </div>
                    </div>
                    <div class="d-flex form-fila mt-2 je">
                        <div class="col-11">
                        <small class="">Doctor</small>
                        <p class=""><?=$Detalle->NombreMedico?> <?=$Detalle->ApellidoMedico?></p>
                        </div>
                    </div>

                    <div class="d-flex form-fila mt-2 je">
                        <div class="col-11">
                            <small>Diagnostico</small>
                            <p class=""><?=$Detalle->Diagnostico?></p>
                        </div>
                        
                    </div>

                    <div class="d-flex form-fila mt-2 je">
                        <div class="col-11">
                            <small class="">Recipe</small>
                            <p class=""><?=$Detalle->Recipe?></p>
                        </div>
                        
                    </div>

                    <div class="d-flex mt-3 form-fila je">
                        <div class="col-11">
                        <small class="">Indicaciones</small>
                            <p class=""><?=$Detalle->Indicacciones?></p>
                        </div>
                    </div>
                </div>
                <div class="card-body arr col-11 table-responsive p-0 mb-3">
                    <table class="table table-borderless table-hover ">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Presentacion</th>
                                <th>Cantidad</th>
                                <th>Tipo</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($entregas as $entrega) : ?>
                                <tr>
                                    <td><?=$entrega->NombreMedicamento?></td>
                                    <td><?=$entrega->Presentancion?></td>
                                    <td><?=$entrega->CantidadMedicamento?></td>
                                    <td><?=$entrega->Tipo?></td>
                                    <td><?=$entrega->Cantidad?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

</div>