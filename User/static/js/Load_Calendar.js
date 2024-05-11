document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar')
  var calendar = new FullCalendar.Calendar(calendarEl, {
    events: '../home/ConnectionDB/CrudCalendar.php?action=list',
    initialView: 'dayGridMonth',
    dateClick: function(info) {
      cleanForm()
      $('#button-add').hide()
      $('#button-Modify').hide()
      $('#button-delete').hide()
      $('#button-cancel').hide()
      
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
      disabledForm()
      $('#button-add').hide()
      $('#button-Modify').hide()
      $('#button-delete').hide()
      $('#button-cancel').hide()

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

  // Función para limpiar el formulario
  function disabledForm () {
    document.getElementById("Id").readOnly = true;
    document.getElementById("Title-task").readOnly = true;
    document.getElementById("Start-date").readOnly = true;
    document.getElementById("Start-time").readOnly = true;
    document.getElementById("End-date").readOnly = true;
    document.getElementById("End-time").readOnly = true;
    document.getElementById("Description").readOnly = true;
    document.getElementById("Background-color").readOnly = true;
    document.getElementById("Text-color").readOnly = true;
  }
})