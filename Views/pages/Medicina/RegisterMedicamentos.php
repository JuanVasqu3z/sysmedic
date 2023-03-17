<?php $this->layout('layouts/admin') ?>


    <!--form-->
    <div class="row jc">
        <div class="col-md-10 mt-4">
            <form class="card card-widget p-3" action="/medicine/save" method="POST">
                <div class="card-header">
                    <h4 class="d-inline">Registro de Medicamentos</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Codigo</label>
                            <input class="form-control" type="text" placeholder="Codigo del Medicamento" name="codigo">
                        </div>
                        <div class="col-6">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Nombre del Medicamento" name="nombre">
                        </div>
                    </div>
                    <div class="d-flex jb fila-form mb-4">
                        <div class="col-6">
                            <label>Tipo</label>
                            <select name="tipo" class="form-control">
                                <option>Analgésico</option>
                                <option>Antipiretico</option>
                                <option>Antiinflamatorios</option>
                                <option>Atialèrgicos</option>
                                <option>Laxante</option>
                                <option>Antidiarreicos</option>
                                <option>Antiinfecciosos</option>
                                <option>Antiacidos</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Presentacion</label>
                            <select name="presentacion" class="form-control">
                                <option >cápsula</option>
                                <option >tableta</option>
                                <option >supositorio</option>
                                <option >implante</option>
                                <option >pomada</option>
                                <option >crema</option>
                                <option >solucion</option>
                                <option >jarabe</option>
                                <option >locion</option>
                                <option >inyectable</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex jb fila-form">
                        <div class="col-6">
                            <label>Unidad</label>
                            <input class="form-control" type="number" placeholder="Numero de Pastilla" name="unidad">
                        </div>
                        <div class="col-6">
                            <label>Cantidad</label>
                            <input class="form-control" type="text" placeholder="Concentracción del Medicamento" name="cantidad">
                        </div>
                    </div>
                    <div class="d-flex jend mt-5 col">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
</ method="POST"div>