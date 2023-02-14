<?php $this->layout('layouts/admin') ?>

    <div class="row jc">
        <div class="col-md-10 mt-4">
            <div class="card p-3">
              <div class="card-header">
                <h3 class="d-inline">Registro general de pacientes</h3>

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
                      <th>Fecha</th>
                      <th>Hora</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>28250060</td>
                      <td>Barbara Guerra</td>
                      <td>Juan Vasquez</td>
                      <td>11-7-2014</td>
                      <td>02:14 AM</td>
                    </tr>
                    <tr>
                      <td>14419103</td>
                      <td>Liduvina Vasquez</td>
                      <td>Juan Vasquez</td>
                      <td>11-7-2014</td>
                      <td>09:40 AM</td>
                    </tr>
                    <tr>
                      <td>14419103</td>
                      <td>Liduvina Vasquez</td>
                      <td>Juan Vasquez</td>
                      <td>11-7-2014</td>
                      <td>09:40 AM</td>
                    </tr>
                    <tr>
                      <td>14419103</td>
                      <td>Liduvina Vasquez</td>
                      <td>Juan Vasquez</td>
                      <td>11-7-2014</td>
                      <td>09:40 AM</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>