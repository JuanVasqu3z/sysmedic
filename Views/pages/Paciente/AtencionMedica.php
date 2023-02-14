<?php $this->layout('layouts/admin')?>
    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <div class="card card-widget py-2">
                <div class="card-header">
                    <h3 class="d-inline">Atencion Medica</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form">
                        <div class="col-6">
                            <label>Diagnostico</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label>Recipe</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="d-flex mt-3 jb fila-form">
                        <div class="col">
                            <div class="form-group">
                                <label>Indicacciones</label>
                                <textarea class="form-control text-descriccion" rows="3" placeholder="Descripcion ..."></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="d-flex jend mt-1">
                        <button class="btn btn-primary">Atender</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>