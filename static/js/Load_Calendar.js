document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar')
  var calendar = new FullCalendar.Calendar(calendarEl, {
    events: '../home/ConnectionDB/Crud.php?action=list',
    initialView: 'dayGridMonth',
    dateClick: function(info) {
      cleanForm()
      $('#button-add').show()
      $('#button-Modify').hide()
      $('#button-delete').hide()

      if (info.allDay) {
        $('#Start-date').val(info.dateStr)
        $('#End-date').val(info.dateStr)
      } else {
        let dateTime = info.dateStr.split("T")
        $('#Start-date').val(dateTime[0])
        $('#End-date').val(dateTime[0])
        $('#Start-time').val(dateTime[1])
        $('#End-time').val(dateTime[1].substring(0,5))
      }

      $("#FormEvent").modal('show')
    }
  })
  calendar.render()
  $('.clockpicker').clockpicker()

  //eventos de botones

  $('#button-add').click(function(){
    let register = returnData()
    addRegister(register)
    $('#FormEvent').modal('hide')
  });

  // Funciones para comunicarse con el servidor Ajax
  function addRegister(register) {
    $.ajax({
      type: 'POST',
      url: '../home/ConnectionDB/Crud.php?action=add',
      data: register,
      success: function(msg) {
          calendar.refetchEvents()
      },
      error: function(error) {
        alert("error adding event: " + error)
      }
    })
  }

  // Función para limpiar el formulario
  function cleanForm () {
    $('#Id').val('')
    $('#Title-task').val('')
    $('#Start-date').val('')
    $('#Start-time').val('')
    $('#End-date').val('')
    $('#End-time').val('')
    $('#Description').val('')
    $('#Background-color').val('#284B63')
    $('#Text-color').val('#ffffff')
  }

  function returnData (){
    let register = {
      idEvent: $('#Id').val(),
      title: $('#Title-task').val(),
      descriptionEvent: $('#Description').val(),
      startEvent: $('#Start-date').val()+' '+$('#Start-time').val(),
      endEvent: $('#End-date').val()+' '+$('#End-time').val(),
      textColor: $('#Text-color').val(),
      backgroundColor: $('#Background-color').val()
    }
    return register
  }

})