function modal(id, username, name, subarea, role, phone) {
    $("#FormUser").modal('show');
    $('#employeeid-input').val(id);
    $('#username-input').val(username);
    $('#name-input').val(name);
    $('#select-subarea').val(subarea);
    $('#privileges-input').val(role);
    $('#phone-input').val(phone);

    $('#button-add').hide()
    $('#password-group').hide()
    $('#button-Modify').show()
    $('#button-delete').show()
    $('#employeeid-group').show()
}

function modalAdd(){
    clearVar()
    $("#FormUser").modal('show')
    $('#button-add').show()
    $('#password-group').show()
    $('#button-Modify').hide()
    $('#employeeid-group').show()
    $('#button-delete').hide()
}
function deleteUser(id){
    $.ajax({
        type: 'POST',
        url: '../home/ConnectionDB/CrudUser.php?action=delete',
        data: {
            idUser: id
        },
        success: function(response) {
            $('#FormUser').modal('hide');
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
    location.reload();
}

function clearVar() {
    $('#employeeid-input').val('');
    $('#username-input').val('');
    $('#name-input').val('');
    $('#select-subarea').val('');
    $('#privileges-input').val('');
    $('#phone-input').val('');
}

$(document).ready(function() {

    $('.Edit-user-btn').on('click', function() {
        var id = $(this).closest('tr').find('td:eq(0)').text().trim();
        var username = $(this).closest('tr').find('td:eq(1)').text().trim();
        var name = $(this).closest('tr').find('td:eq(2)').text().trim();
        var subarea = $(this).closest('tr').find('td:eq(3)').text().trim();
        var role = $(this).closest('tr').find('td:eq(4)').text().trim();
        var phone = $(this).closest('tr').find('td:eq(5)').text().trim();

        modal(id, username, name, subarea, role, phone);
    });

    $('#button-Modify').on('click', function() {
        var id = $('#employeeid-input').val();
        var username = $('#username-input').val();
        var name = $('#name-input').val();
        var subarea = $('#select-subarea').val();
        var role = $('#privileges-input').val();
        var phone = $('#phone-input').val();

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
                $('#FormUser').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        })
    })

    $('#button-add').on('click', function() {
        var id = $('#employeeid-input').val();
        var username = $('#username-input').val();
        var name = $('#name-input').val();
        var subarea = $('#select-subarea').val();
        var role = $('#privileges-input').val();
        var phone = $('#phone-input').val();
        var password = $('#password-input').val();

        $.ajax({
            type: 'POST',
            url: '../home/ConnectionDB/CrudUser.php?action=add',
            data: {
                idUser: id,
                username: username,
                name: name,
                subarea: subarea,
                role: role,
                phone: phone,
                password: password
            },
            success: function(response) {
                $('#FormUser').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        })
    })
})