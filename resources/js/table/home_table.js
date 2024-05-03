import {post} from '../helper/helper';

let urlgeneral = location.origin;

new DataTable('#example', {
    responsive: true,
    scrollX: true,
    scrollY: 500
});

document.addEventListener('click', async (e) => {
    if (e.target.closest('#btn_save_agregar')) {
        let url = urlgeneral+'/agregar';
        let data = 'hola';
        let  res = await post(url, data);
        console.log(res);
    }
});
