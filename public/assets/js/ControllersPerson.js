let Resultado;

fetch('../assets/js/Person.json')
    .then((response) => response.json())
    .then((Person) => Resultado = Person)
    .catch((error) => {
        console.log('erros:', error)
});






const Busqueda = () => {

    let CI = document.getElementById("CedulaPersona").value;
    let Filtro = Resultado.filter(Resultado => Resultado.Cedula == CI)
    console.log(Filtro)

    let cedula = Filtro[0].Cedula;
    let direccion = Filtro[0].Diretion
    let numerot = Filtro[0].NumeroTelefonico
    let sexo = Filtro[0].Sexo
    let tipo = Filtro[0].Tipo
    let carrera =  Filtro[0].Carrera
    let nombreCompleto = Filtro[0].FullName
    let imagen = Filtro[0].img

    cedula = document.getElementById('cedula').innerHTML = cedula;
    direccion = document.getElementById('direccion').innerHTML = direccion;
    numerot = document.getElementById('numerot').innerHTML = numerot;
    sexo = document.getElementById('sexo').innerHTML = sexo;
    tipo = document.getElementById('tipo').innerHTML = tipo;
    carrera = document.getElementById('carrera').innerHTML = carrera;
    nombreCompleto = document.getElementById('nombreCompleto').innerHTML = nombreCompleto;
    imagen = document.getElementById('imagen').src= imagen;
    console.log(Filtro)
}


