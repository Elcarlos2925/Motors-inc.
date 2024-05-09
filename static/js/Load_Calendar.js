document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar')
  var calendar = new FullCalendar.Calendar(calendarEl, {
    events: '../home/ConnectionDB/CrudCalendar.php?action=list',
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
    },
    //AQUÓ MODIFIQUÉ
    eventClick: function (info){
      $('#button-add').hide()
      $('#button-Modify').show()
      $('#button-delete').show()

      $('#Id').val(info.event.id)
      $('#Title-task').val(info.event.title)
      $('#Description').val(info.event.extendedProps.descripcion);
      $('#Start-date').val(moment(info.event.start).format("YYYY-MM-DD"))
      $('#End-date').val(moment(info.event.end).format("YYYY-MM-DD"))
      $('#Start-time').val(moment(info.event.start).format("HH:mm"))
      $('#End-time').val(moment(info.event.end).format("HH:mm"))
      $('#Background-color').val(info.event.backgroundColor)
      $('#Text-color').val(info.event.textColor)
      

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

  $('#button-Modify').click(function(){
    let register =  returnData()
    modifyRegister(register)
    $('#FormEvent').modal('hide')
  });

  $('#button-delete').click(function(){
    let register =  returnData()
    deleteRegister(register)
    $('#FormEvent').modal('hide')
  });

  // Funciones para comunicarse con el servidor Ajax
  function addRegister(register) {
    $.ajax({
      type: 'POST',
      url: '../home/ConnectionDB/CrudCalendar.php?action=add',
      data: register,
      success: function(msg) {
          calendar.refetchEvents()
      },
      error: function(error) {
        alert("error adding event: " + error)
      }
    })
  }

  //AQUÍ MODIFIQUÉE
  function modifyRegister(register) {
    $.ajax({
      type: 'POST',
      url: '../home/ConnectionDB/CrudCalendar.php?action=modify',
      data: register,
      success: function(msg) {
          calendar.refetchEvents()
      },
      error: function(error) {
        alert("error modify event: " + error)
      }
    })
  }

  function deleteRegister(register) {
    $.ajax({
      type: 'POST',
      url: '../home/ConnectionDB/CrudCalendar.php?action=delete',
      data: register,
      success: function(msg) {
          calendar.refetchEvents()
      },
      error: function(error) {
        alert("error delete event: " + error)
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