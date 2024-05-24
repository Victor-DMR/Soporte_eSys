const TOKEN = () => document.querySelector('meta[name="csrf-token"]').getAttribute("content");

export async function postDatos(url, formData) {
    try {
        let res = await fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                "X-CSRF-TOKEN": TOKEN(),
            }
        });

        if (!res.ok) {
            let menssage = 'Proceso fallido';
            let icon = 'warning';
            alert(menssage, icon);
            throw new Error(`Error en la solicitud: ${res.status}`);
        }else{
            let menssage = 'Proceso exitoso';
            let icon = 'success';
            alert(menssage, icon);
        }
  
        return await res.json();
    } catch (error) {
        console.error("Error en la solicitud:", error.message);
        throw error;
    }
}

export async function getDatos(url){
    try {
        let res = await fetch(url, {
            method: 'GET',
        });
        return await res.json();
    } catch (error) {
        console.error("Error en la solicitud:", error.message);
        throw error;
    }
};

function alert(menssage, icon){
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: icon,
        title: menssage
      });
}


