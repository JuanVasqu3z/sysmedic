  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= assets('image/logo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 logo-uptos">
          <span class="brand-text font-weight-light">Sys Medic</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar side">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= assets('image/avatar4.png') ?>" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="/" class="nav-link active">
                        <i class="fa fa-home fa-house-blank mr-1"></i>
                          <p>
                              Inicio
                              
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/ListaRegistro" class="nav-link">
                        <i class="fa fa-sharp fa-regular fa-list mr-2"></i>
                        <p>
                            Lista de Espera
                        </p>
                      </a>
                  </li>
                    <li class="nav-item">
                        <a href="/Medicina/Entrega" class="nav-link">
                        <i class="fa fa-sharp fa-regular fa-capsules mr-1"></i>
                            <p>Entrega de Medicamentos</p>
                        </a>
                    </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-sharp fa-regular fa-bed mr-1"></i>
                          <p>
                              Paciente
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                              <a href="/Paciente/AtencionMedica" class="nav-link">
                                  <p class="ml-4">Atencion Medica</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/Paciente/Control" class="nav-link">
                                  <p class="ml-4">Control de Pacientes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/charts/chartjs.html" class="nav-link">
                                  <p class="ml-4">Historial de Paciente</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  
                  <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-sharp fa-regular fa-syringe mr-1"></i>
                            <p>
                                Medicina
                                <i class="right fas fa-angle-left"></i>
                            </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/Medicina/Lista" class="nav-link">
                                  <p class="ml-4">Lista de Medicamentos</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/Medicina/Register" class="nav-link">
                                  <p class="ml-4">Registro de Medicamentos</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="fa fa-light fa-box mr-1"></i>
                          <p>
                              Almacen
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/Almacen/AlmacenGestion" class="nav-link">
                                  <p class="ml-4">Gestion de Almacen</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/Almacen/ControlLotes" class="nav-link">
                                  <p class="ml-4">Control de Lotes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/Almacen/Register" class="nav-link">
                                  <p class="ml-4">Registro de Lote</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>