<?php $this->layout('layouts/admin') ?>

<div class="row jc">
  <div class="col-md-10 mt-4">

    <div class="card p-3">
      <div class="card-header">
        <h4 class="d-inline">Control de Pacientes</h4>

        <div class="card-tools">
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-borderless table-hover">
          <thead>
            <tr>
              <th>Cedula</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Visitas</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($personas as $persona) : ?>
              <?php if ($persona->Cedula != '123') : ?>
                <tr>
                  <td><?= $persona->Cedula ?></td>
                  <td><?= $persona->Nombre ?></td>
                  <td><?= $persona->Apellido ?></td>
                  <td><?= calculateVisitas($persona->Cedula, $atencionesMedicas) ?></td>
                  <td>
                    <a href="/Paciente/Detalle/<?= $persona->IdPersona ?>"><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                  </td>
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

  </div>
</div>
</div>

</div>