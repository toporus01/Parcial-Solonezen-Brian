

document.addEventListener("DOMContentLoaded", function() {
    cargarComentarios();
});

function cargarComentarios() {
    fetch('bs_obtener_comentarios.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('lista-comentarios').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}
