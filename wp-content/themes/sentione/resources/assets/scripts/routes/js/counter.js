function getTimeRemaining( endtime ) {
  const total = Date.parse( endtime ) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  const days = Math.floor(total / (1000 * 60 * 60 * 24));
  
  return {
    total,
    days,
    hours,
    minutes,
    seconds,
  };
}

const format = (t) => {
  return t < 10 ? '0' + t : t;
};

function initializeClock(item, endtime) {
  const clock = document.querySelector(item);
  const daysSpan = clock.querySelector('.days');
  const hoursSpan = clock.querySelector('.hours');
  const minutesSpan = clock.querySelector('.minutes');
  const secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    const t = getTimeRemaining(endtime);

    daysSpan.innerHTML = format(t.days);
    hoursSpan.innerHTML = format(t.hours);
    minutesSpan.innerHTML = format(t.minutes);
    secondsSpan.innerHTML = format(t.seconds);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

Date.prototype.addDays = function(days) {
  var date = new Date(this.valueOf());
  date.setDate(date.getDate() + days);
  return date;
}

const endDate = new Date(Date.parse(new Date().addDays(4)));

initializeClock('.item__counter', endDate);