<?php $this->layout('layouts/app') ?>
<?php if (isset($_GET['permise'])) : ?>
    <?php if ($_GET['permise'] == 'error') : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            No tiene permiso para acceder a esta pantalla
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <?php if ($_GET['permise'] == 'true') : ?>
        <div class="alert alert-warning" role="alert">
            Usuario o contraseña incorrecta
        </div>
    <?php endif; ?>
<?php endif; ?>
<div class="login-contenedor">


    <!-- /.login-logo -->
    <div class="card col-lg-4 col-md-5 card-login">
        <div class="card-header text-center">
            <img class="img-circle img-login" src="<?= assets('image/uptos.png') ?>" alt="User Image" id="imagen">
            <p class="h2 text-primary"><b>Sistema Medico</b></p>
        </div>
        <div class="card-body">
            <form action="/start/singin" method="post">
                <div class="input-group mb-4">
                    <input type="email" name="email" class="form-control" placeholder="Correo Electronico" required>
                </div>
                <div class="input-group mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="social-auth-links text-center mt-2 mb-4">
                    <button type="submit" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Iniciar Sesion
                    </button>
                </div>
            </form>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

</div>

<!-- /.login-box -->