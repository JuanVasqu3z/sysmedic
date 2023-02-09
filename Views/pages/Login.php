<?php $this->layout('layouts/app') ?>

    <div class="login-contenedor">
        <!-- /.login-logo -->
        <div class="card col-lg-4 col-md-5 card-login">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Sys</b>Medic</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Inicia sesión para iniciar tu sesión</p>

                <form action="../../index3.html" method="post">
                    <div class="input-group mb-4">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    
                </form>

                <div class="social-auth-links text-center mt-2 mb-4">
                    <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Iniciar Sesion
                    </a>
                    
                </div>
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
