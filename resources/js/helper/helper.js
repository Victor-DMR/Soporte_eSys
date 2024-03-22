const TOKEN = () => document.querySelector('meta[name="csrf-token"]').getAttribute("content");

export async function post(url, data) {
    try {
        let res = await fetch(url, {
            method: 'POST',
            body: JSON.stringify({ data }),
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": TOKEN(),
            }
        });

        if (!res.ok) {
            // Manejar el caso en que la respuesta no es exitosa (puede lanzar una excepción)
            console.log('Error en la solicitud');
            throw new Error(`Error en la solicitud: ${res.status}`);
        }

        return res;
    } catch (error) {
        console.error("Error en la solicitud:", error.message);
        // Puedes lanzar el error nuevamente o manejarlo de alguna manera específica
        throw error;
    }
}



