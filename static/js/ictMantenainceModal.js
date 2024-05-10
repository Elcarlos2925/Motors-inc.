function modalAdd(){
    $("#FormMantenaince").modal('show');
    $('.clockpicker').clockpicker()
}

$(document).ready(function() {

    $('#button-add').on('click', function() {
        var Title = $('#title-input').val();
        var Responsible = $('#responsible-input').val();
        var Activity = $('#activity-input').val();
        var startDay = $('#Start-date-input').val() + " " + $('#Start-time-input').val(); //Todo: Format 2024-05-09 12:00:00
        var limitDay = $('#Limit-date-input').val() + " " + $('#Limit-time-input').val();
        var Finished = $('#finished-input').prop('checked') ? 1 : 0;

        
        $.ajax({
            type: 'POST',
            url: '../home/ConnectionDB/CrudMantenaince.php?action=add',
            data: {
                Title: Title,
                Responsible: Responsible,
                Activity: Activity,
                startDay: startDay ,
                limitDay: limitDay,
                Finished: Finished
            },
            success: function(response) {
                $('#FormMantenaince').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        })
    })
})