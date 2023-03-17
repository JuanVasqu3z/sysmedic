<?php $this->layout('layouts/admin') ?>

<div class="row jc">
  <div class="col-md-10 mt-4">
    <div class="card p-3">
      <div class="card-header">
        <h4 class="d-inline">Control de Lotes</h4>

        <div class="card-tools">
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover table-borderless">
          <thead>
            <tr>
              <th>Almacen</th>
              <th>Medicamento</th>
              <th>F.Ingreso</th>
              <th>F.Vencimiento</th>
              <th>F.Expedicion</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lotes as $lote) : ?>
              <tr>
                <td><?= $lote->almacenNombre ?></td>
                <td><?= $lote->medicaNombre ?></td>
                <td><?= $lote->FechaIngreso ?></td>
                <td><?= $lote->FechaVencimiento ?></td>
                <td><?= $lote->FechaExpedicion ?></td>
                <td><?= $lote->CantidadLote ?></td>
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