const formularioContactos = document.querySelector('#contacto');

eventListener();

function eventListener(){
    //Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e){
    e.preventDefault();

    //Leer los datos de los inputs
    const nombre = document.querySelector('#nombre').value,
            empresa = document.querySelector('#empresa').value,
            telefono = document.querySelector('#telefono').value;
    
    if(nombre === '' || empresa === '' || telefono === ''){
        console.log('El campo está vacio');
    }else{
        console.log('Tiene algo');
    }
}