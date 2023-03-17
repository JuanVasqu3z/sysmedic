let Resultado;

function getPersonIntranet(pin) {
  let dataJson = {
    pin, // es la misma del parametro
    token: '123'
  }
  try {
    fetch(window.path_url + "/directory/search_person.json?pin=" + dataJson.pin + "&token=" + dataJson.token, {
      method: 'GET',
      headers: new Headers({
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*',
      }),
      mode: 'cors',
      //body: dataJson
    })
      .then((response) => response.json())
      .then((Person) => {
        Resultado = Person;
        return Person[0].data
      })
      .catch((error) => {
        console.log(error)
        return []
      });
  } catch (error) {
    console.log('A ocurrido un error' + error);
    return []
  }

}

console.log(getPersonIntranet('28250060'));

// funcion transform
function transformPersonIntranetASistema(jsonInput) {
  let jsonTransformado = [];
  if(jsonInput){
    jsonInput.forEach(element => {
      jsonTransformado.push({
        "FullName": element.fullname,
        "Cedula": element.pin,
        "Diretion": "",
        "NumeroTelefonico": "",
        "Sexo": element.sex_str,
        "Tipo": element.type_str,
        "Carrera": element.additional,
        "img": element.profile_image_url
      })
    })
  }
  
  return jsonTransformado;
}


const Form = document.getElementById("MyForm");

Form.addEventListener("submit", function (e) {
  e.preventDefault();
  const dataC = new FormData(Form);

  CI = dataC.get("CedulaPersona");

  let encontrePapa = transformPersonIntranetASistema(
    getPersonIntranet('28250060')//[0].data
  ).filter((indice) => indice.Cedula == CI);
  // console
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
      carrera: 'estudiante'//encontrePapa[0].Carrera[0]
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
