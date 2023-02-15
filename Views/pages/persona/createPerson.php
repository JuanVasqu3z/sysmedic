<?php $this->layout('layouts/admin') ?>

<?php if (isset($_GET['resolve'])) : ?>
    <div class="d-flex jc">
        <div class="alert alert-warning alert-dismissible fade show col-md-10" role="alert">
            <strong>Advertencia!</strong> El Usuario no se encuentra registrado en el sistema
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>

<?php if (isset($_GET['action'])) : ?>
    <div class="d-flex jc">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Advertencia!</strong> El usuario ya se encuentra registrado en el sistema
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>

<div class="row jc">
    <div class="col-md-10 mt-4">
        <div class="card card-widget py-2">
            <div class="card-header">
                    <h3 class="d-inline">Crear Persona</h3>
                </div>
            <form action="/persona/save" method="POST" class="row col-12 px-3">
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Apellido</label>
                        <input type="text" name="apellido" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Cedula</label>
                        <input type="text" name="cedula" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Teléfono</label>
                        <input type="text" name="telefono" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Sexo</label>
                        <select type="text" name="sexo" id="" class="form-control" required>
                            <option >Masculino</option>
                            <option >Femenino</option>
                        </select>

                </div>
                <div class="col-12 mt-4 d-flex justify-content-end">
                    <button class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>