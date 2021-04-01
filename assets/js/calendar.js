let calendarEl = document.getElementsByClassName("c-calendar")[0];
let calendar = new FullCalendar.Calendar(calendarEl, {
    googleCalendarApiKey: 'AIzaSyBaoUSMaZMNX82MVdBWIAEIO5xn4wmIo18',
    headerToolbar: {
        left: "prev",
        center: 'title',
        right: 'next dayGridMonth dayGridWeek listMonth'
    },
    buttonText: {
        today: "Today",
        month: "Month",
        week: "Week",
        day: "Day",
        list: "List"
    },
    events: {
      googleCalendarId: '3hmrgdenqgnq04khu0gakrd16s@group.calendar.google.com'
    }
  });

calendar.render();

const setCalendarStyle = () => {
    if (document.documentElement.clientWidth < 768) {
        const listButton = document.getElementsByClassName("fc-listMonth-button")[0];
        listButton.click();
    } else {
        const gridButton = document.getElementsByClassName("fc-dayGridMonth-button")[0];
        gridButton.click();
    }
}



window.addEventListener("DOMContentLoaded", setCalendarStyle);

window.addEventListener("resize", setCalendarStyle);