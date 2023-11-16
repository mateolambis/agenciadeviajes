function confirmacion(e) {
    if (confirm("¡Esta seguro que desea eliminar el registro?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

let linkdelete = document.querySelectorAll(".ri-eraser-line");

for (var i=0; i < linkdelete.length; i++) {
    linkdelete[i].addEventListener('click', confirmacion);
}