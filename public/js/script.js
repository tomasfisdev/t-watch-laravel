'use strict';
//Menu hamburguesa
let iconoHamburguesa = document.querySelector('#icono-hamburguesa');
let nav = document.querySelector('header nav');

iconoHamburguesa.onclick = function () {
    nav.classList.toggle("abierto");
    if (iconoHamburguesa.classList.contains('bx-menu-alt-right')) {
        iconoHamburguesa.classList.remove('bx-menu-alt-right');
        iconoHamburguesa.classList.add('bx-x');

    } else {
        iconoHamburguesa.classList.remove('bx-x');
        iconoHamburguesa.classList.add('bx-menu-alt-right');
    }

}

//toast

let toast = document.querySelector('.success-message');
if (toast != null) {
    setTimeout(function () {
        toast.classList.add("hide");
    }, 3600);
}

//confirm de eliminar producto o artículo

let formEliminarProducto=document.querySelectorAll('.form-eliminar-producto');
for (const form of formEliminarProducto) {
    form.onsubmit=function(){
        return confirm('Estás seguro de que querés eliminar este producto');
    }
}

let formEliminarArticulo=document.querySelectorAll('.form-eliminar-articulo');
for (const form of formEliminarArticulo) {
    form.onsubmit=function(){
        return confirm('Estás seguro de que querés eliminar este artículo');
    }
}