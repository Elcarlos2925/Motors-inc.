function modal(id, username, name, subarea, role, phone) {
    $("#FormUser").modal('show');
    $('#employeeid-input').val(id);
    $('#username-input').val(username);
    $('#name-input').val(name);
    $('#select-subarea').val(subarea);
    $('#privileges-input').val(role);
    $('#phone-input').val(phone);
}

function deleteUser(id){
    // Realizar la solicitud AJAX para eliminar el registro
    $.ajax({
        type: 'POST',
        url: '../home/ConnectionDB/CrudUser.php?action=delete',
        data: {
            idUser: id
        },
        success: function(response) {
            // Manejar la respuesta del servidor aquí
            console.log(response);
            // Cerrar el modal después de eliminar
            $('#FormUser').modal('hide');
        },
        error: function(xhr) {
            // Manejar errores aquí
            console.error(xhr.responseText);
        }
    });
    location.reload();
}
$(document).ready(function() {

    $('.Edit-user-btn').on('click', function() {
        var id = $(this).closest('tr').find('td:eq(0)').text().trim();
        var username = $(this).closest('tr').find('td:eq(1)').text().trim();
        var name = $(this).closest('tr').find('td:eq(2)').text().trim();
        var subarea = $(this).closest('tr').find('td:eq(3)').text().trim();
        var role = $(this).closest('tr').find('td:eq(4)').text().trim();
        var phone = $(this).closest('tr').find('td:eq(5)').text().trim();

        // Llamar a la función modal para cargar los datos en el modal
        modal(id, username, name, subarea, role, phone);
    });

    // Función para cargar datos en el modal al hacer clic en el botón "Modify"
    $('#button-Modify').on('click', function() {
        var id = $('#employeeid-input').val();
        var username = $('#username-input').val();
        var name = $('#name-input').val();
        var subarea = $('#select-subarea').val();
        var role = $('#privileges-input').val();
        var phone = $('#phone-input').val();

        // Realizar la solicitud AJAX para modificar el registro
        $.ajax({
            type: 'POST',
            url: '../home/ConnectionDB/CrudUser.php?action=modify',
            data: {
                idUser: id,
                username: username,
                name: name,
                subarea: subarea,
                role: role,
                phone: phone
            },
            success: function(response) {
                // Manejar la respuesta del servidor aquí
                console.log(response);
                // Cerrar el modal después de modificar
                $('#FormUser').modal('hide');
                // Recargar la página
                location.reload();
            },
            error: function(xhr) {
                // Manejar errores aquí
                console.error(xhr.responseText);
            }
        })
    })
})