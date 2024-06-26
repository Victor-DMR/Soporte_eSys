import { getDatos } from "../helper/helper";
let urlgeneral = location.origin;
let cambiar_color=null;
let tr_conten=null;

document.addEventListener('DOMContentLoaded', async (e)=>{
    let soportes = await getDatos(urlgeneral + '/soportes');
    console.log(soportes);

    new DataTable('#tableSoporte', {
            scrollX: true,
            scrollY: 500
    });
});


document.addEventListener('change', (e) => {
    if (e.target.closest('.cambiar_color')) {
        if (e.target.closest('.cambiar_color').value == '1') {
            e.target.closest('.tr_conten').style.backgroundColor='#7DCEA0';
        }else if(e.target.closest('.cambiar_color').value == '2'){
            e.target.closest('.tr_conten').style.backgroundColor='#F8C471';
        }else if(e.target.closest('.cambiar_color').value == '3'){
            e.target.closest('.tr_conten').style.backgroundColor='#F1948A';
        }else{
            e.target.closest('.tr_conten').style.backgroundColor='';
        }
    }
});
    


/* cambiar_color.addEventListener("change", ()=>
{
    if (cambiar_color.value == '1') {
        tr_conten.style.backgroundColor='#7DCEA0';
    }else if(cambiar_color.value == '2'){
        tr_conten.style.backgroundColor='#F8C471';
    }else if(cambiar_color.value == '3'){
        tr_conten.style.backgroundColor='#F1948A';
    }else{
        tr_conten.style.backgroundColor='';
    }
}); */