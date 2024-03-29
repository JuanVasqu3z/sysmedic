<?php $this->layout('layouts/admin') ?>
<!--form-->
<div class="row jc">
    <div class="col-md-10 mt-4">
        <div class="card card-widget p-3">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="<?= assets('image/avatar.png') ?>" alt="User Image" id="imagen">
                    <span class="username text-primary" id="nombreCompleto"><?= $atencionPrimaria->Nombre ?> <?= $atencionPrimaria->Apellido ?></span>
                </div>
                <!-- /.user-block -->
            </div>
            <div class="card-header">
                <!-- post text -->
                <div class="d-flex form-fila mt-2 je">
                    <div class="col-3">
                        <small class="">Cedula</small>
                        <p class="" id="cedula"><?= $atencionPrimaria->Cedula ?> </p>
                    </div>
                    <div class="col-4">
                        <small>Direccion</small>
                        <p class="" id="direccion"><?= $atencionPrimaria->Direccion ?></p>
                    </div>
                    <div class="col-3">
                        <small>Numero Telefonico</small>
                        <p id="numerot"><?= $atencionPrimaria->NumeroTelefono ?></p>
                    </div>
                </div>

                <div class="d-flex mt-3 form-fila je">
                    <div class="col-3">
                        <small class="">Sexo</small>
                        <p class="" id="sexo"><?= $atencionPrimaria->Sexo ?></p>
                    </div>
                    <div class="col-4">

                    </div>
                    <div class="col-3">

                    </div>
                </div>
                <div class="d-flex jc mt-3">
                    <div class="col-11">
                        <small class="">Motivo de Consulta</small>
                        <p><?= $atencionPrimaria->MotivoDeconsulta ?></p>

                    </div>
                </div>
            </div>
            <form action="/atencion-medica/save" method="POST" class="card-body">
                <div class="d-flex jc fila-form mb-2">
                    <div class="col-11">
                        <h4 class="d-inline">Atencion Medica</h4>
                    </div>
                </div>
                <div class="d-flex jc fila-form">
                    <div class="col-11">
                        <label>Diagnostico</label>
                        <input type="hidden" name="idAtencionPrimaria" value="<?= $atencionPrimaria->IdAtencionP ?>">
                        <textarea class="form-control text-descriccion" name="diagnostico" type="text" placeholder="Descripcion..." required></textarea>
                    </div>
                </div>
                <div class="d-flex mt-3 jc fila-form">
                    <div class="col-11">
                        <label>Recipe</label>
                        <textarea class="form-control text-descriccion" name="recipe" type="text" placeholder="Descripcion..."></textarea>
                    </div>
                </div>
                <div class="d-flex mt-3 jc fila-form">
                    <div class="col-11">
                        <div class="form-group">
                            <label>Indicaciones</label>
                            <textarea class="form-control text-descriccion" name="indicaciones" rows="3" placeholder="Descripcion ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex jc mt-3 fila-form">
                    <div class="col-11 d-flex jend">
                        <a href="/Medicina/Entrega/<?= $atencionPrimaria->IdPersona ?>?idAtencion=<?= $atencionPrimaria->IdAtencionP ?>" class="btn btn-secondary mr-3 disabled">Entregar Medicamento</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="row jc">
    <div class="col-md-10 mt-4">
        <?php if (isset($medica)) : ?>
            <div class="card card-widget p-3">
                <div class="card-body table-responsive mt-3">
                    <h4 class="ml-2 mb-0">Historial del Paciente</h4>
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Motivo</th>
                                <th>Diagnostico</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($atencionMedica as $medica) : ?>
                                <tr>
                                    <td><?= $medica->MotivoDeconsulta ?></td>
                                    <td><?= $medica->Diagnostico ?></td>
                                    <td><?= $medica->Fecha ?></td>
                                    <td><?= $medica->Hora ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif ?>
        <?php if (!isset($medica)) : ?>
            <div class="card card-widget p-5 justify-content-center">
                <h4 class="text-center">La Persona no tiene historial medico</h4>
            </div>
        <?php endif ?>
    </div>

</div>
</div>