<?php $this->layout('layouts/admin') ?>

  <div class="row jc">
    <div class="col-md-10 mt-4">
      <!-- Box Comment -->
      <div class="card card-widget">
        <div class="card-header">
          <div class="user-block">
            <img class="img-circle" src="<?= assets('image/avatar.png') ?>" alt="User Image" id="imagen">
            <span class="username text-primary" id="nombreCompleto">Juan de Jesus Vasquez Vasquez</span>
              <div class="d-flex sub-nombre"> 
                <small class="mr-2" id="tipo">Estudiante</small>
                <small class="mr-2">de</small> 
                <small class="" id="carrera">Informatica</small>
              </div>
          </div>
          <!-- /.user-block -->
          <div class="card-tools d-flex">
            <input class="form-control mr-3" type="text" placeholder="Busqueda" name="CedulaPersona" id="CedulaPersona">
            <button class="btn btn-primary mr-2"><i class="fas fa-search" onclick="Busqueda()"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- post text -->
          <div class="d-flex form-fila mt-2 je">
            <div class="col-3">
              <small class="">Cedula</small>
              <p class="" id="cedula">28250060</p>
            </div>
            <div class="col-4">
              <small >Direccion</small>
              <p class="" id="direccion">Brasil Sector 3 Calle 13 Casa 42</p>
            </div>
            <div class="col-3">
              <small >Numero Telefonico</small>
              <p id="numerot">04129460194</p>
            </div>
          </div>

          <div class="d-flex mt-3 form-fila je">
            <div class="col-3">
              <small class="" >Sexo</small>
              <p class="" id="sexo">Hombre</p>
            </div>
            <div class="col-4">
              
            </div>
            <div class="col-3">
              
            </div>
          </div>
          <div class="d-flex jend mt-4">
              <button class="btn btn-primary mx-2">Registrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--form-->
  <div class="row jc">
    <div class="col-md-10 mt-2">
      <div class="card card-widget">
        <div class="card-header">
          <h5 class="d-inline">Iniciar Consulta</h5>
        </div>
        <div class="card-body">
          <div class="d-flex form-fila">
            <div class="col-6">
              <label>Fecha</label>
              <input class="form-control" type="date" placeholder="Default input">
            </div>
            <div class="col-6">
              <label>Hora</label>
              <input class="form-control" type="time" placeholder="Default input">
            </div>
          </div>
          <div class="d-flex form-fila  mt-3">
            <div class="col">
              <div class="form-group">
                <label>Motivo de la Consulta</label>
                <textarea class="form-control text-descriccion" rows="3" placeholder="Descripcion ..."></textarea>
              </div>  
            </div>
          </div>
          <div class="d-flex jend mt-1">
              <button class="btn btn-primary">Iniciar Consulta</button>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>