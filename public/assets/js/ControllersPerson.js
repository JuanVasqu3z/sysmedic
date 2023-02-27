let Resultado;

fetch("../assets/js/Person.json")
  .then((response) => response.json())
  .then((Person) => (Resultado = Person))
  .catch((error) => {
  });

const Form = document.getElementById("MyForm");

Form.addEventListener("submit", function (e) {
  e.preventDefault();
  const dataC = new FormData(Form);

  CI = dataC.get("CedulaPersona");

  let encontrePapa = Resultado.filter((indice) => indice.Cedula == CI);
  console.log(encontrePapa[0]);
  if (encontrePapa.length == 0) {
    document.getElementById("MyForm").submit();
  } else {
    // guardar
    let nameFull = encontrePapa[0].FullName.split(" ");
    let formPost = {
      nombre: nameFull[0],
      apellido: nameFull[nameFull.length - 1],
      cedula: encontrePapa[0].Cedula,
      direccion: encontrePapa[0].Diretion,
      telefono: encontrePapa[0].NumeroTelefonico,
      sexo: encontrePapa[0].Sexo,
      tipo: encontrePapa[0].Tipo,
      carrera: encontrePapa[0].Carrera
    };

    fetch("/persona/api/save" + queryBuilder(formPost), {
      method: "GET",
    })
      .then((res) => {
        window.location = "/?cedula=" + encontrePapa[0].Cedula;
      })
      .catch((e) => console.log(e));
  }
});

function queryBuilder(objectGeneral) {
  let valueGetBuilder = "?";
  Object.keys(objectGeneral).forEach(
    (key) => (valueGetBuilder += key + "=" + objectGeneral[key] + "&")
  );
  return valueGetBuilder;
}
