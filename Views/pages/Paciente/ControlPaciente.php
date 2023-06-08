<?php $this->layout('layouts/admin') ?>

<div class="row jc">
  <div class="col-md-10 mt-4">

    <div class="card p-3">
      <div class="card-header">
        <h4 class="d-inline">Control de Pacientes</h4>

        <div class="card-tools">
          <button class="btn btn-outline-secondary" onclick="guardarPDF()">Guardar <i class="ml-2 fa fa-regular fa-download"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-borderless table-hover" id="miTabla">
          <thead>
            <tr>
              <th>Cedula</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Visitas</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($personas as $persona) : ?>
              <?php if ($persona->Cedula != '123') : ?>
                <tr>
                  <td><?= $persona->Cedula ?></td>
                  <td><?= $persona->Nombre ?></td>
                  <td><?= $persona->Apellido ?></td>
                  <td><?= calculateVisitas($persona->Cedula, $atencionesMedicas) ?></td>
                  <td>
                    <a href="/Paciente/Detalle/<?= $persona->IdPersona ?>"><i class="text-primary fa fa-solid fa-eye mr-2"></i></a>
                  </td>
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>
<script>
function guardarPDF() {
  // Crear un nuevo documento PDF
  const doc = new jsPDF();

  // Agregar el título al documento PDF
  doc.setFontSize(20);
  doc.setFont("times", "bold");
  doc.text("Control de Pacientes", 10, 20, { align: "center" });

  // Agregar la fecha al documento PDF
  const fechaActual = new Date();
  const dia = fechaActual.getDate();
  const mes = fechaActual.toLocaleString("default", { month: "long" });
  const anio = fechaActual.getFullYear();
  doc.setFontSize(14);
  doc.setFont("times", "normal");
  doc.text(`Fecha: ${dia} de ${mes} de ${anio}`, 150, 20);

  // Agregar la tabla al documento PDF
  const table = document.getElementById("miTabla");
  const rows = table.getElementsByTagName("tr");
  let startY = 50;
  const margin = 10;
  const pageHeight = doc.internal.pageSize.height;
  const pageWidth = doc.internal.pageSize.width;
  const maxWidth = pageWidth - (margin * 2);
  const tableHeaders = ["Cédula", "Nombre", "Apellido", "Visitas"];

  // Agregar los encabezados de la tabla
  doc.setFontSize(12);
  doc.setFont("times", "bold");
  doc.autoTable({
    head: [tableHeaders],
    startY: startY,
    margin: margin,

  });
    
    // Agregar los registros de la tabla
  doc.setFontSize(10);
  doc.setFont("times", "normal");
  startY = doc.autoTable.previous.finalY;
  for (let i = 0; i < rows.length; i++) {
    const cells = rows[i].getElementsByTagName("td");

    // Recorrer cada celda de la fila
    let rowData = [];
    for (let j = 0; j < cells.length; j++) {
      rowData.push(cells[j].innerText);
    }

    // Agregar la fila a la tabla
    doc.autoTable({
      body: [rowData],
      startY: startY,
      margin: margin,
      fillColor: [255, 255, 255, 0],
      columnStyles: {
        0: { cellWidth: 44 },
        1: { cellWidth: 52 },
        2: { cellWidth: 54 },
        3: { cellWidth: 40 },
        4: { cellWidth: 0 }
      },
    });

    // Obtener la posición final de la tabla
    const finalY = doc.autoTable.previous.finalY;
    startY = finalY + 2;

    // Verificar si la tabla excede el límite de la página
    if (finalY > pageHeight - margin) {
      doc.addPage();
      startY = margin;
    }
  }

  // Guardar el documento PDF
  doc.save("tabla_pacientes.pdf");
}
</script>