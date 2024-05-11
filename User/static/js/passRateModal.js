function modalAdd(){
    $("#FormPassRate").modal('show');
}

$(document).ready(function() {

    $('#button-add').on('click', function() {
        var model = $('#model-input').val();
        var total_production = $('#total-production-input').val();
        var fr = $('#fr-input').val();
        var ok = $('#ok-input').val();
        var fr_percentage = $('#fr-percentage-input').val();
        var ok_percentage = $('#ok-percentage-input').val();

        $.ajax({
            type: 'POST',
            url: '../home/ConnectionDB/CrudPassRate.php?action=add',
            data: {
                model: model,
                total_production: total_production,
                fr: fr,
                ok: ok,
                fr_percentage: fr_percentage,
                ok_percentage: ok_percentage
            },
            success: function(response) {
                $('#FormPassRate').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        })
    })
})