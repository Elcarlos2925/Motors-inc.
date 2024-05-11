function modalAdd(){
    $("#FormPcbsLocation").modal('show');
}

$(document).ready(function() {

    $('#button-add').on('click', function() {
        var client = $('#client-input').val();
        var models = $('#models-input').val();
        var department = $('#department-input').val();
        var expirationVerification = $('#expirationVerification-input').val();
        var status = $('#status-input').prop('checked') ? 1 : 0;
        var tipPcbTypele = $('#tipPcbTypele-input').val();
        var position = $('#position-input').val();

        
        $.ajax({
            type: 'POST',
            url: '../home/ConnectionDB/CrudPcbsLocation.php?action=add',
            data: {
                client: client,
                models: models,
                department: department,
                expirationVerification: expirationVerification,
                status: status,
                tipPcbTypele: tipPcbTypele,
                position: position
            },
            success: function(response) {
                $('#FormPcbsLocation').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        })
    })
})