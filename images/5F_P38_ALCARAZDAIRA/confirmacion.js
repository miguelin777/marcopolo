function confirmacion (e) {
    if (confirm("¿Estás seguro de eliminar este registro?")) {
        return true;
    }
    else{
        //cancelar evento
        e.preventDefault();
    }
}
//Si le da clic en SI
//Para guardar los enlaces...
let linkDelete=document.querySelectorAll(".table_item_link_eliminar");
for (var  i= 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}