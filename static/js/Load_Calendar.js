document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      events: '../home/ConnectionDB/Crud.php?action=list',
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });
