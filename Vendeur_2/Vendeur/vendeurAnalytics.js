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

/*--------------chart---------------------*/
var options = {
  series: [{
  name: 'XYZ MOTORS',
  data: dates
}],
  chart: {
  type: 'area',
  stacked: false,
  height: 350,
  zoom: {
    type: 'x',
    enabled: true,
    autoScaleYaxis: true
  },
  toolbar: {
    autoSelected: 'zoom'
  }
},
dataLabels: {
  enabled: false
},
markers: {
  size: 0,
},
title: {
  text: 'Stock Price Movement',
  align: 'left'
},
fill: {
  type: 'gradient',
  gradient: {
    shadeIntensity: 1,
    inverseColors: false,
    opacityFrom: 0.5,
    opacityTo: 0,
    stops: [0, 90, 100]
  },
},
yaxis: {
  labels: {
    formatter: function (val) {
      return (val / 1000000).toFixed(0);
    },
  },
  title: {
    text: 'Price'
  },
},
xaxis: {
  type: 'datetime',
},
tooltip: {
  shared: false,
  y: {
    formatter: function (val) {
      return (val / 1000000).toFixed(0)
    }
  }
}
};

var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
chart.render();


