const btnEditar = document.querySelectorAll('.btn-editar');
const btnEliminar = document.querySelectorAll('.btn-eliminar');

btnEliminar.forEach(boton => {
    boton.addEventListener('click', function () {
        const matricula = this.dataset.matricula;

        const confirm = window.confirm('desea al alumno ' + matricula + '?');

        if (confirm) {
            httpRequest('http://localhost/cursoPHP/MVC/consulta/eliminarAlumno/' + matricula, function () {
                console.log(this.responseText);
                document.querySelector('.respuesta').innerHTML = this.responseText;

                const tbody = document.querySelector('#tbody-alumnos');
                const fila = document.querySelector("#fila-" + matricula);

                tbody.removeChild(fila);


            });
        }
    })
})

function httpRequest(url, callback) {
    const http = new XMLHttpRequest();

    http.open("GET", url);
    http.send();

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback.apply(http);
        }
    }
}