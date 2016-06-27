var deadline = 'July 9 2016 14:30:00 GMT+01:00';

function getRemainingTime(endTime) {
    var now = new Date();
    var time = Date.parse(endTime) - Date.parse(now);
    var seconds = Math.floor((time/1000)%60);
    var minutes = Math.floor((time/(1000*60))%60);
    var hours = Math.floor((time/(1000*60*60))%24);
    var days = Math.floor(time/(1000*60*60*24));

    return {
        'total'  : time,
        'days'   : days,
        'hours'  : hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endTime) {
    var clock       = document.getElementById(id);
    var daysSpan    = clock.querySelector('.days');
    var hoursSpan   = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var time = getRemainingTime(endTime);
        daysSpan.innerHTML    = time.days;
        hoursSpan.innerHTML   = ('0'+time.hours).slice(-2);
        minutesSpan.innerHTML = ('0'+time.minutes).slice(-2);
        secondsSpan.innerHTML = ('0'+time.seconds).slice(-2);

        return time;
    }

    time = updateClock();

    if (time.total <= 0) {
        return;
    }

    var timeInterval = setInterval(
        function () {
            var time = updateClock();

            if (time.total <= 0) {
                clearInterval(timeInterval);
            }
        },
        1000
    );
}

start = function () {
    initializeClock('countdown', deadline);
};

window.onload = start;
