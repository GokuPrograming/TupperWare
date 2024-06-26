function mostrarProductos() {
    $.ajax({
        url: '../controller/user_controller.php?opc=mostrar_todos_los_productos',
        type: 'GET',
        success: function(response) {
            $('#mostrar_todos_los_productos').html(response);
        },
        error: function() {
        }
    });
}
function mostrar_Nav_bar(){
    $.ajax({
        url: '../controller/user_controller.php?opc=barra_navegacion',
        type: 'GET',
        success: function(response) {
            $('#nav_bar').html(response);
        },
        error: function() {
        }
    });
}