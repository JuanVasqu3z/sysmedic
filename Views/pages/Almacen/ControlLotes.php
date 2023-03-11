<?php $this->layout('layouts/admin') ?>

<div class="row jc">
  <div class="col-md-10 mt-4">
    <div class="card p-3">
      <div class="card-header">
        <h4 class="d-inline">Control de Lotes</h4>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>Almacen</th>
              <th>Medicamento</th>
              <th>F.Ingreso</th>
              <th>F.Vencimiento</th>
              <th>F.Expedicion</th>
              <th>Cantidad</th>
              <th>Total</th>
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
                <td><?= $lote->Total?></td>
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