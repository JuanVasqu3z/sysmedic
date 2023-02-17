<?php $this->layout('layouts/admin')?>
    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <div class="card card-widget p-3">
                <div class="card-header">
                    <div class="user-block">
                        <img class="img-circle" src="<?= assets('image/avatar.png') ?>" alt="User Image" id="imagen">
                        <span class="username text-primary" id="nombreCompleto">Juan Vasquez</span>
                        <div class="d-flex sub-nombre">
                            <small class="mr-2" id="tipo">Estudiante</small>
                            <small class="mr-2">de</small>
                            <small id="carrera">Informatica</small>
                        </div>
                    </div>
                    <!-- /.user-block -->
                </div>
                <div class="card-header">
                    <!-- post text -->
                    <div class="d-flex form-fila mt-2 je">
                        <div class="col-3">
                        <small class="">Cedula</small>
                        <p class="" id="cedula">28250060</p>
                        </div>
                        <div class="col-4">
                        <small>Direccion</small>
                        <p class="" id="direccion">Brasil Sector III</p>
                        </div>
                        <div class="col-3">
                        <small>Numero Telefonico</small>
                        <p id="numerot">04121893287</p>
                        </div>
                    </div>

                    <div class="d-flex mt-3 form-fila je">
                        <div class="col-3">
                        <small class="">Sexo</small>
                        <p class="" id="sexo">Masculino</p>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-3">

                        </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form mb-2">
                        <div class="col-6">
                            <h4 class="d-inline">Atencion Medica</h4>
                        </div>
                    </div>
                    <div class="d-flex jb fila-form">
                        <div class="col-6">
                            <label>Diagnostico</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Recipe</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex mt-3 jb fila-form">
                        <div class="col">
                            <div class="form-group">
                                <label>Indicacciones</label>
                                <textarea class="form-control text-descriccion" rows="3" placeholder="Descripcion ..."></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="d-flex jend mt-1">
                        <button class="btn btn-secondary mr-3">Entregar Medicamento</button>
                        <button class="btn btn-primary">Atender</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>