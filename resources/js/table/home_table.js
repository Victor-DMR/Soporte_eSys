import {post} from '../helper/helper';

let urlgeneral = location.origin;

new DataTable('#example', {
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function (row) {
                    var data = row.data();
                    return 'Details for ' + data[0] + ' ' + data[1];
                }
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
                tableClass: 'table'
            })
        }
    },
    columnDefs: [
        { responsivePriority: 1, targets: -2 },
        { responsivePriority: 2, targets: -4 }
    ]
});

document.addEventListener('click', async (e) => {
    if (e.target.closest('#btn_save_agregar')) {
        let url = urlgeneral+'/agregar';
        let data = 'hola';
        let  res = await post(url, data);
        console.log(res);
    }
});
