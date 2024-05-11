function modalAdd(){
    $("#FormEquipmentInventory").modal('show');
}

$(document).ready(function() {

    $('#button-add').on('click', function() {
        var name = $('#name-input').val();
        var hostName = $('#hostname-input').val();
        var ipAddress = $('#ipAddress-input').val();
        var classification = $('#classification-input').val();
        var location = $('#location-input').val();
        var department = $('#department-input').val();
        var assignedTo = $('#assignedTo-input').val();
        var trademark = $('#trademark-input').val();
        var model = $('#model-input').val();
        var cpu = $('#cpu-input').val();
        var hddSize = $('#hddSize-input').val();
        var ramSize = $('#ramSize-input').val();
        var serviceTag = $('#serviceTag-input').val();
        var serialNumber = $('#serialNumber-input').val();

        
        $.ajax({
            type: 'POST',
            url: '../home/ConnectionDB/CrudEquipmentInventory.php?action=add',
            data: {
                name: name,
                hostName: hostName,
                ipAdress: ipAddress,
                classification: classification,
                location: location,
                department: department,
                assignedTo: assignedTo,
                trademark: trademark,
                model: model,
                cpu: cpu,
                hddSize: hddSize,
                ramSize: ramSize,
                serviceTag: serviceTag,
                serialNumber: serialNumber
            },
            success: function(response) {
                $('#FormEquipmentInventory').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        })
    })
})