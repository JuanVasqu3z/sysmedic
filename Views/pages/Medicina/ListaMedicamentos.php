<?php $this->layout('layouts/admin') ?>

<div class="row jc">
        <div class="col-md-10 mt-4">
    
        <div class="card p-3">
            <div class="card-header">
                <h4 class="d-inline">Lista de Medicamentos</h4>
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
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Presentacion</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($medicamentos as $medicamento): ?>
                            <tr>
                                <td><?=$medicamento->Codigo?></td>
                                <td><?=$medicamento->Nombre?></td>
                                <td><?=$medicamento->Tipo ?></td>
                                <td><?=$medicamento->Presentancion ?></td>
                                <td><?=$medicamento->Unidad?></td>
                                <td><?=$medicamento->Cantidad?></td>
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