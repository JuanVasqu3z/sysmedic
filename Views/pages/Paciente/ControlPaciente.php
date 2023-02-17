<?php $this->layout('layouts/admin') ?>

    <div class="row jc">
        <form class="col-md-10 mt-4">
            <div class="card p-3">
              <div class="card-header">
                <h4 class="d-inline">Control de Pacientes</h4>

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
                      <th>Cedula</th>
                      <th>Nombre</th>
                      <th>Doctor</th>
                      <th>Visitas</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>28250060</td>
                      <td>Barbara Guerra</td>
                      <td>Juan Vasquez</td>
                      <td>6</td>
                      <td>
                        <a href=""><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                        <a href=""><a href=""><i class="fa fa-regular fa-trash text-danger"></i></a></a>
                      </td>
                    </tr>
                    <tr>
                      <td>14419103</td>
                      <td>Liduvina Vasquez</td>
                      <td>Juan Vasquez</td>
                      <td>6</td>
                      <td>
                        <a href=""><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                        <a href=""><a href=""><i class="fa fa-regular fa-trash text-danger"></i></a></a>
                      </td>
                    </tr>
                    <tr>
                      <td>14419103</td>
                      <td>Liduvina Vasquez</td>
                      <td>Juan Vasquez</td>
                      <td>6</td>
                      <td>
                        <a href=""><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                        <a href=""><a href=""><i class="fa fa-regular fa-trash text-danger"></i></a></a>
                      </td>
                    </tr>
                    <tr>
                      <td>14419103</td>
                      <td>Liduvina Vasquez</td>
                      <td>Juan Vasquez</td>
                      <td>6</td>
                      <td>
                        <a href=""><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                        <a href=""><a href=""><i class="fa fa-regular fa-trash text-danger"></i></a></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </form>
  </div>

</div>