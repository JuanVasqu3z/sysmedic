<?php $this->layout('layouts/admin') ?>

<?php if (isset($_GET['resolve'])) : ?>
    <div class="alert alert-warning" role="alert">
        El usuario no encuentra registrado en el sistema
    </div>
<?php endif; ?>

<?php if (isset($_GET['action'])) : ?>
    <div class="alert alert-warning" role="alert">
        El usuario ya se encuentra registrado en el sistema
    </div>
<?php endif; ?>

<div class="row jc">
    <div class="col-md-10 mt-4">
        <div class="card card-widget py-3">
            <h4 class="text-center">Crear persona</h4>
            <form action="/persona/save" method="POST" class="row col-12 px-3">
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Apellido</label>
                        <input type="text" name="apellido" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Cedula</label>
                        <input type="number" name="cedula" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Teléfono</label>
                        <input type="text" name="telefono" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-2">
                    <div class="group-form">
                        <label for="">Sexo</label>
                        <input type="text" name="sexo" id="" class="form-control">
                    </div>
                </div>
                <div class="col-12 mt-4 d-flex justify-content-end">
                    <button class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>