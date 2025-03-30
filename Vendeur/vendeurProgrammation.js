const listItems = document.querySelectorAll(".sidebar-list li");

listItems.forEach((item) => {
  item.addEventListener("click", () => {
    let isActive = item.classList.contains("active");

    listItems.forEach((el) => {
      el.classList.remove("active");
    });

    if (isActive) item.classList.remove("active");
    else item.classList.add("active");
  });
});

const toggleSidebar = document.querySelector(".toggle-sidebar");
const logo = document.querySelector(".logo-box");
const sidebar = document.querySelector(".sidebar");

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

logo.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

/*ljlkhouih */

const calendar = document.querySelector(".calendar"),
  date = document.querySelector(".date"),
  daysContainer = document.querySelector(".days"),
  prev = document.querySelector(".prev"),
  next = document.querySelector(".next"),
  todayBtn = document.querySelector(".today-btn"),
  gotoBtn = document.querySelector(".goto-btn"),
  dateInput = document.querySelector(".date-input");
  const eventDay=document.querySelector(".event-day"),
  eventDate=document.querySelector(".event-date"),
  eventsContainer=document.querySelector(".events"),
  addEventSubmit=document.querySelector(".add-event-btn");



let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
//  const eventsArr = [
//   {
//    day: 16,
//  month: 2,
//   year: 2023,
//  events: [
//      {
//      title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
//      time: "10:00 AM",
//      },
//      {
//       title: "Event 2",
//       time: "11:00 AM",
//     },
//     ],
//  }, 
//  {day: 19,
//  month: 2,
//   year: 2023,
//  events: [
//      {
//      title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
//      time: "10:00 AM",
//      },
//      {
//       title: "Event 2",
//       time: "11:00 AM",
//     },
//     ],
//  },
//  ];
let eventsArr=[];
getEvents();

//function to add days in days with class day and prev-date next-date on previous month and next month days and active on today
function initCalendar() {
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const prevLastDay = new Date(year, month, 0);
  const prevDays = prevLastDay.getDate();
  const lastDate = lastDay.getDate();
  const day = firstDay.getDay();
  const nextDays = 7 - lastDay.getDay() - 1;

 date.innerHTML=months[month] +" " + year;

let days="";

for(let x=day;x>0;x--){
    days += `<div class="day prev-date">${prevDays - x +1}</div>`;
     
}
for(let i = 1 ; i<= lastDate ; i++){
let event=false;
eventsArr.forEach((eventObj)=>{

     if (
        eventObj.day === i &&
        eventObj.month === month + 1 &&
        eventObj.year === year
      ) {
        event = true;
      }
});
   


    if(
        i == new Date().getDate() && 
        year == new Date().getFullYear() &&
        month == new Date().getMonth()
    ){
        activeDay=i;
        getActiveDay(i);
        updateEvents(i);
       if(event){
        days += `<div class="day today active event">${i}</div>`;
       }else{
        days += `<div class="day today active">${i}</div>`;
       }
   
    }
    else{
        if(event){
            days += `<div class="day  event">${i}</div>`;
           }else{
            days += `<div class="day ">${i}</div>`;
           }
    }
   
}
 for(let j=1;j<= nextDays;j++){
        days += `<div class="day next-date">${j}</div>`;
   
    }


daysContainer.innerHTML=days;
addListner();
}
initCalendar();

function prevMonth() { 
    month--;
    if (month < 0) {
      month = 11;
      year--;
    }
    initCalendar();
  }
  
  function nextMonth() {
    month++;
    if (month > 11) {
      month = 0;
      year++;
    }
    initCalendar();
  }

  prev.addEventListener("click", prevMonth);
  next.addEventListener("click", nextMonth);



  //Today btn

  todayBtn.addEventListener("click", () => {
    today = new Date();
    month = today.getMonth();
    year = today.getFullYear();
    initCalendar();
  });

//inpuut 

dateInput.addEventListener("input", (e) => {
    dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
    if (dateInput.value.length === 2) {
      dateInput.value += "/";
    }
    if (dateInput.value.length > 7) {
      dateInput.value = dateInput.value.slice(0, 7);
    }
    if (e.inputType === "deleteContentBackward") {
      if (dateInput.value.length === 3) {
        dateInput.value = dateInput.value.slice(0, 2);
      }
    }
  });
  gotoBtn.addEventListener("click", gotoDate);

function gotoDate() {
  console.log("here");
  const dateArr = dateInput.value.split("/");
  if (dateArr.length === 2) {
    if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
      month = dateArr[0] - 1;
      year = dateArr[1];
      initCalendar();
      return;
    }
  }
  alert("Date enter est incorrect");
}


const addEventBtn=document.querySelector(".add-event"),
addEventContainer=document.querySelector(".add-event-wrapper"),
addEventClose=document.querySelector(".close"),
addEventTitle=document.querySelector(".event-name"),
addEventFrom=document.querySelector(".event-time-from"),
addEventTo=document.querySelector(".event-time-to");

addEventClose.addEventListener("click", () => {
    addEventContainer.classList.remove("active");
  });

addEventBtn.addEventListener("click", () => {
    addEventContainer.classList.toggle("active");
  });
  
  addEventClose.addEventListener("click", () => {
    addEventContainer.classList.remove("active");
  });
  document.addEventListener("click", (e) => {
    if (e.target !== addEventBtn && !addEventContainer.contains(e.target)) {
      addEventContainer.classList.remove("active");
    }
  });
  //allow 50 char
  addEventTitle.addEventListener("input", (e) => {
    addEventTitle.value = addEventTitle.value.slice(0, 50);
  });

  //allow only time in eventtime from and to
addEventFrom.addEventListener("input", (e) => {
  addEventFrom.value = addEventFrom.value.replace(/[^0-9:]/g, "");
  if (addEventFrom.value.length === 2) {
    addEventFrom.value += ":";
  }
  if (addEventFrom.value.length > 5) {
    addEventFrom.value = addEventFrom.value.slice(0, 5);
  }
});
addEventTo.addEventListener("input", (e) => {
    addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
  if (addEventTo.value.length === 2) {
    addEventTo.value += ":";
  }
  if (addEventTo.value.length > 5) {
    addEventTo.value = addEventTo.value.slice(0, 5);
  }
});
  
//function to add active on day
function addListner() {
    const days = document.querySelectorAll(".day");
    days.forEach((day) => {
      day.addEventListener("click", (e) => {
        activeDay = Number(e.target.innerHTML);
        getActiveDay(e.target.innerHTML);
       updateEvents(Number(e.target.innerHTML));
        days.forEach((day)=>{
            day.classList.remove("active");
        });

if (e.target.classList.contains("prev-date")) {
          prevMonth();

 setTimeout(() => {

 const days = document.querySelectorAll(".day");
            days.forEach((day) => {
              if (
                !day.classList.contains("prev-date") &&
                day.innerHTML === e.target.innerHTML
              ) {
                day.classList.add("active");
              }
            });
        },100);
    }else if (e.target.classList.contains("next-date")) {
        nextMonth();

setTimeout(() => {

const days = document.querySelectorAll(".day");
          days.forEach((day) => {
            if (
              !day.classList.contains("next-date") &&
              day.innerHTML === e.target.innerHTML
            ) {
              day.classList.add("active");
            }
          });
      },100);
  }
  else{
    e.target.classList.add("active"); 
  }
});
    });
}


 

  //function get active day day name and date and update eventday eventdate
  function getActiveDay(date) {
    const day = new Date(year, month, date);
    const dayName = day.toString().split(" ")[0];
    eventDay.innerHTML = dayName;
    eventDate.innerHTML = date + " " + months[month] + " " + year;
  }
  
//function update events when a day is active
function updateEvents(date) {
    let events = "";
    eventsArr.forEach((event) => {
      if (
        date === event.day &&
        month + 1 === event.month &&
        year === event.year
      ) {
        event.events.forEach((event) => {
          events += `<div class="event">
              <div class="title">
                <i class="fas fa-circle"></i>
                <h3 class="event-title">${event.title}</h3>
              </div>
              <div class="event-time">
                <span class="event-time">${event.time}</span>
              </div>
          </div>`;
        });
      }
    });
    if (events == "") {
      events = `<div class="no-event">
              <h3></h3>
          </div>`;
    }
   
    eventsContainer.innerHTML = events;
saveEvents();
  }
  //function to add event to eventsArr
addEventSubmit.addEventListener("click",()=>{
const eventTitle =addEventTitle.value;
const eventTimeFrom=addEventFrom.value;
const eventTimeTo=addEventTo.value;
if(
eventTitle ==""|| 
eventTimeFrom ==""||
eventTimeTo ==""
){
    alert("Remplir tout les champs");
    return;
}
 const timeFormArr=eventTimeFrom.split(":");
 const timetoArr=eventTimeTo.split(":");
 if(
    timeFormArr.length !==2 ||
    timetoArr.length !==2 ||
timeFormArr[0] > 23||
timeFormArr[1]>59 ||
timetoArr[0] > 23||
timetoArr[1]>59 
 ){
    alert("Format enter est invalid");
 }
 const timeFrom=convertTime(eventTimeFrom);
 const timeTo =convertTime(eventTimeTo);

 const newEvent = {
    title: eventTitle,
    time: timeFrom + " - " + timeTo,
  };

  let eventAdded=false;
  
  if (eventsArr.length > 0) {
    eventsArr.forEach((item) => {
      if (
        item.day === activeDay &&
        item.month === month + 1 &&
        item.year === year
      ) {
        item.events.push(newEvent);
        eventAdded = true;
      }
    });
  }

  if (!eventAdded) {
    eventsArr.push({
      day: activeDay,
      month: month + 1,
      year: year,
      events: [newEvent],
    });
  }

addEventContainer.classList.remove("active");
addEventTitle.value = "";
addEventFrom.value = "";
addEventTo.value = "";  

updateEvents(activeDay);

const activeDayElem=document.querySelector(".day.active");
if(!activeDayElem.classList.contains("event")){
  activeDayElem.classList.add("event");
}

});
  //TOUS EST BIEN 
  function convertTime(time) {
    //convert time to 24 hour format
    let timeArr = time.split(":");
    let timeHour = timeArr[0];
    let timeMin = timeArr[1];
    let timeFormat = timeHour >= 12 ? "PM" : "AM";
    timeHour = timeHour % 12 || 12;
    time = timeHour + ":" + timeMin + " " + timeFormat;
    return time;
  }

//function to delete event when clicked on event
eventsContainer.addEventListener("click", (e) => {
  if (e.target.classList.contains("event")) {
    if (confirm("aimeriez-vous supprimmer cette horaire?")) {
      const eventTitle = e.target.children[0].children[1].innerHTML;
      eventsArr.forEach((event) => {
        if (
          event.day === activeDay &&
          event.month === month + 1 &&
          event.year === year
        ) {
          event.events.forEach((item, index) => {
            if (item.title === eventTitle) {
              event.events.splice(index, 1);
            }
          });
          //if no events left in a day then remove that day from eventsArr
          if (event.events.length === 0) {
            eventsArr.splice(eventsArr.indexOf(event), 1);
            //remove event class from day
            const activeDayEl = document.querySelector(".day.active");
            if (activeDayEl.classList.contains("event")) {
              activeDayEl.classList.remove("event");
            }
          }
        }
      });
      updateEvents(activeDay);
    }
  }
});

//function to save events in local storage
function saveEvents() {
  console.log("yes");
  localStorage.setItem("events", JSON.stringify(eventsArr));
}

//function to get events from local storage
function getEvents() {
  //check if events are already saved in local storage then return event else nothing
  if (localStorage.getItem("events") === null) {
    return;
  }
  else {eventsArr.push(...JSON.parse(localStorage.getItem("events")));
}}

/*
  
 
function defineProperty() {
  var osccred = document.createElement("div");
  osccred.innerHTML =
    "A Project By <a href='https://www.youtube.com/channel/UCiUtBDVaSmMGKxg1HYeK-BQ' target=_blank>Open Source Coding</a>";
  osccred.style.position = "absolute";
  osccred.style.bottom = "0";
  osccred.style.right = "0";
  osccred.style.fontSize = "10px";
  osccred.style.color = "#ccc";
  osccred.style.fontFamily = "sans-serif";
  osccred.style.padding = "5px";
  osccred.style.background = "#fff";
  osccred.style.borderTopLeftRadius = "5px";
  osccred.style.borderBottomRightRadius = "5px";
  osccred.style.boxShadow = "0 0 5px #ccc";
  document.body.appendChild(osccred);
}

defineProperty();



addEventTo.addEventListener("input", (e) => {
  addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
  if (addEventTo.value.length === 2) {
    addEventTo.value += ":";
  }
  if (addEventTo.value.length > 5) {
    addEventTo.value = addEventTo.value.slice(0, 5);
  }
});



  //check if event is already added
  let eventExist = false;
  eventsArr.forEach((event) => {
    if (
      event.day === activeDay &&
      event.month === month + 1 &&
      event.year === year
    ) {
      event.events.forEach((event) => {
        if (event.title === eventTitle) {
          eventExist = true;
        }
      });
    }
  });
  if (eventExist) {
    alert("Event already added");
    return;
  }

  console.log(newEvent);
  console.log(activeDay);
  let eventAdded = false;

  

  console.log(eventsArr);
  addEventWrapper.classList.remove("active");


 
  //select active day and add event class if not added
  const activeDayEl = document.querySelector(".day.active");
  if (!activeDayEl.classList.contains("event")) {
    activeDayEl.classList.add("event");
  }
});


*/