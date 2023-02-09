<?php $this->layout('layouts/app') ?>

<div class="login-contenedor">
    <!-- /.login-logo -->
    <div class="card col-lg-4 col-md-5 card-login">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Sys</b>Medic</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Inicia sesión para iniciar tu sesión</p>

            <form action="/start/singin" method="post">
                <div class="input-group mb-4">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="social-auth-links text-center mt-2 mb-4">
                    <button type="submit" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Iniciar Sesion
                    </button>
                </div>
            </form>
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

</div>

<!-- /.login-box -->