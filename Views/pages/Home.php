<?php $this->layout('layouts/admin') ?>

<?php if (isset($_GET['action'])) : ?>
  <?php if ($_GET['action'] == 'success') : ?>
    <div class="d-flex jc">
      <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
        <strong>exito!</strong> Registrado satisfactoriamente la consulta al paciente
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>

<div class="row jc">
  <div class="col-md-10 mt-4">
    <!-- Box Comment -->
    <div class="card card-widget">
      <div class="card-header">
        <div class="user-block">
          <?php if (isset($persona)) : ?>
            <img class="img-circle" src="<?= assets('image/avatar.png') ?>" alt="User Image" id="imagen">
            <span class="username text-primary" id="nombreCompleto"><?= $persona->Nombre ?> <?= $persona->Apellido ?></span>
            <div class="d-flex sub-nombre">
              <small class="mr-2" id="tipo">Estudiante</small>
              <small class="mr-2">de</small>
              <small id="carrera">Informatica</small>
            </div>
          <?php endif; ?>
        </div>
        <!-- /.user-block -->
        <form action="/persona/search" method="GET" class="card-tools d-flex" id="MyForm">
          <input class="form-control mr-3" type="text" placeholder="Buscar por Cedula" name="CedulaPersona" id="CedulaPersona" required>
          <button class="btn btn-primary mr-2" type="submit"><i class="fas fa-search" onclick="Busqueda()"></i></button>
        </form>
      </div>
      <!-- /.card-header -->
      <?php if (isset($persona)) : ?>
        <div class="card-body">
          <!-- post text -->
          <div class="d-flex form-fila mt-2 je">
            <div class="col-3">
              <small class="">Cedula</small>
              <p class="" id="cedula"><?= $persona->Cedula ?></p>
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
      <?php endif; ?>
    </div>
  </div>
</div>
<!--form-->
<?php if (isset($persona)) : ?>
  <div class="row jc">
    <div class="col-md-10 mt-2">
      <form action="/atencion-primaria/save" method="POST" class="card card-widget">
        <div class="card-header">
          <h5 class="d-inline">Iniciar Consulta</h5>
        </div>
        <div class="card-body">
          <div class="d-flex form-fila">
            <!-- <div class="col-6">
              <label>Fecha</label>
              <input class="form-control" name="date" type="date" placeholder="Default input">
            </div> -->
            <div class="col-6">
              <label>Hora</label>
              <input class="form-control" name="time" type="time" placeholder="Default input">
            </div>
          </div>
          <input type="hidden" name="persona_id" value="<?= $persona->IdPersona ?>">
          <div class="d-flex form-fila  mt-3">
            <div class="col">
              <div class="form-group">
                <label>Motivo de la Consulta</label>
                <textarea class="form-control text-descriccion" name="description" rows="3" placeholder="Descripcion ..."></textarea>
              </div>
            </div>
          </div>
          <div class="d-flex jend mt-1">
            <button class="btn btn-primary">Iniciar Consulta</button>
          </div>
        </div>
        <!-- /.card-body -->
      </form>
    </div>
  </div>
<?php endif; ?>