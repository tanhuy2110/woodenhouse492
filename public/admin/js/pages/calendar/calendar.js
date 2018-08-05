"use strict";
$.get('http://hoianwooden.com/admin/calendarAPI', function (datas) {
    var arrReservation = [];
    datas.map(function (data) {
        var dateReservation = data.date;
        var nameCus = data.name_customer
        arrReservation.push(
            {
                title: nameCus,
                start: dateReservation,
                className: 'l-green'
            }
        )

    })

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        editable: false, // move tag day
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function() {
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },
        eventLimit: true, // allow "more" link when too many events
        events: arrReservation
    });

})


    