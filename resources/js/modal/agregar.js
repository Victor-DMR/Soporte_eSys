import { postDatos } from '../helper/helper';
import { getDatos } from '../helper/helper';
let urlgeneral = location.origin;
let formData = new FormData();

document.addEventListener('click', async (e)=>{
    if (e.target.closest('#btn_save_agregar')) {
        e.preventDefault();
        let formData = getValues();
        await postDatos(urlgeneral + '/agregar', formData)
        .then(responseData => {
            cleanInputs();
        })
        .catch(error => {
            console.error("Error en la solicitud:", error);
        });
        await getDatos(urlgeneral + '/soportes');
    }
});

function getValues(){
    let Nit = document.querySelector('#Nit').value;
    let Cliente = document.querySelector('#Cliente').value;
    let AnyDesk = document.querySelector('#AnyDesk').value;
    let Telefono = document.querySelector('#Telefono').value;
    let Tecnico = document.querySelector('#Tecnico').value;
    let Descripcion = document.querySelector('#Descripcion').value;
    let archivo = document.querySelector('#archivo').files[0];

    formData.append('Nit', Nit);
    formData.append('Cliente', Cliente);
    formData.append('AnyDesk', AnyDesk);
    formData.append('Telefono', Telefono);
    formData.append('Tecnico', Tecnico);
    formData.append('Descripcion', Descripcion);
    formData.append('archivo', archivo);

    return formData;
}

function cleanInputs(){
    document.querySelector('#Nit').value = "";
    document.querySelector('#Cliente').value = "";
    document.querySelector('#AnyDesk').value = "";
    document.querySelector('#Telefono').value = "";
    document.querySelector('#Tecnico').value = "";
    document.querySelector('#Descripcion').value = "";
    document.querySelector('#archivo').value = "";
}

