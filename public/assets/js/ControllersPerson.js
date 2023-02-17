    let Resultado;
    
    fetch('../assets/js/Person.json')
    .then((response) => response.json())
    .then((Person) => Resultado = Person)
    .catch((error) => {
        alert('erros:', error)
    });

 const Form = document.getElementById('MyForm');

Form.addEventListener('submit', function(e) {
    e.preventDefault();
    const dataC = new FormData(Form);
    
    CI = (dataC.get('CedulaPersona'));

    for (let i of Resultado){
        console.log(i)
        Resultado.filter(indice => indice.Cedula == CI)
        busqueda = i;
        return busqueda
    }
    console.log(busqueda)

    fetch((isset(['CedulaPersona'])) ,{
        method:'POST',
        body: busqueda
    })

    
    
})



