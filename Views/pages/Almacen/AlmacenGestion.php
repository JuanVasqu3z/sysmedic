<?php $this->layout('layouts/admin') ?>

    <div class="row jc">
        <div class="col-md-10 mt-4">
            <?php if (isset($_GET['permise'])) : ?>
                <?php if ($_GET['action'] == 'success') : ?>
                    <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
                        <strong>exito!</strong> Registrado satisfactoriamente la consulta al paciente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="card p-3">
                <div class="card-header">
                    <h4 class="d-inline">Gestion de Almacen</h4>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <a href="/Almacen/Crear" class="btn  btn-primary">Crear Almacen</a>
                        </div>
                    </div>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Peldaño</th>
                                    <th>Cantidad</th> 
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($almacenes as $almacen): ?>
                                <tr>
                                    <td><?=$almacen->IdAlmacen?></td>
                                    <td><?=$almacen->Nombre?></td>
                                    <td><?=$almacen->Peldanos?></td>
                                    <td><?=$almacen->Cantidad?></td>
                                    <td>
                                        <a href=""><i class="fa fa-regular fa-pen mr-2"></i></a>
                                        <a href=""><i class="fa fa-regular fa-trash text-danger mr-2"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>