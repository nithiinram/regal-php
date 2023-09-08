<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    

    <title>Result</title>
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="skyblue" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Results</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      
      <a class="mr-5 hover:text-gray-900">Over-All</a>
      
    </nav>
    <button class="inline-flex items-center bg-yellow-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Dashboard
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-20 mx-auto">
    <div class="flex_flex-wrap_-m-4_1">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-black-500 mb-4">
            
            <text x="7" y="18" fill="navyblue"><b>Reasoning</b></text> 
            
          </div>
         <div class="programming-stats">
            <div class="chart-container">
                <canvas class="my-chart"></canvas>
            </div>
            <div class="details ul">
                <ul>
                    <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData = {
  labels: ["Correct", "Incorrect", "Un-Answered",],
  data: [ 5, 15, 30,],
};

const myChart = document.querySelector(".my-chart");
const ul = document.querySelector(".programming-stats .details ul");

new Chart(myChart, {
  type: "doughnut",
  data: {
    labels: chartData.labels,
    datasets: [
      {
        label: "  ",
        data: chartData.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl = () => {
  chartData.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}</span>`;
    ul.appendChild(li);
  });
};

populateUl();
</script>
<style>
    .chart-container {
  width: 100px;
}
.programming-stats {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats .details ul {
  list-style: none;
  padding: 0;
}

.programming-stats .details ul li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats .details .percentage {
  font-weight: 700;
  color: #023047;
}
</style>



</div>
</div>
      </div>
      <div class="flex_flex-wrap_-m-4_2">
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-pink-200 text-black-500 mb-4">
            <text x="7" y="18" fill="navyblue"><b>English</b></text>
            </div>
            <div class="programming-stats1">
            <div class="chart-container1">
                <canvas class="my-chart1"></canvas>
            </div>
            <div class="details_ul1">
                <ul>
                <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData1 = {
  labels: ["Correct", "Incorrect", "Un-Answered",],
  data: [5, 15, 30,],
};

const myChart1 = document.querySelector(".my-chart1");
const ul1 = document.querySelector(".programming-stats1 .details_ul1");

new Chart(myChart1, {
  type: "doughnut",
  data: {
    labels: chartData1.labels,
    datasets: [
      {
        label: "  ",
        data: chartData1.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl1 = () => {
  chartData1.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'>${chartData1.data[i]}</span>`;
    ul1.appendChild(li);
  });
};

populateUl1();
</script>
<style>
    .chart-container1 {
  width: 100px;
}
.programming-stats1 {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats1:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats1 .details_ul1 {
  list-style: none;
  padding: 0;
}

.programming-stats1 .details_ul1 li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats1 .details_ul1 .percentage {
  font-weight: 700;
  color: #023047;
}
</style>
</div>
</div>
         
      </div>
      <div class="flex_flex-wrap_-m-4_3">
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-black-500 mb-4">
            <text x="7" y="18" fill="navyblue"><b>General Knowledge</b></text>
           </div>
           <div class="programming-stats2">
            <div class="chart-container2">
            <canvas class="my-chart2"></canvas>
            </div>
            <div class="details_ul2">
                <ul>
                <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData2 = {
  labels: [ "Correct", "Incorrect", "Un-Answered",],
  data: [5, 15, 30,],
};

const myChart2 = document.querySelector(".my-chart2");
const ul2 = document.querySelector(".programming-stats2 .details_ul2");

new Chart(myChart2, {
  type: "doughnut",
  data: {
    labels: chartData2.labels,
    datasets: [
      {
        label: "  ",
        data: chartData2.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl2 = () => {
  chartData.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'><b>${chartData2.data[i]}</b></span>`;
    ul2.appendChild(li);
  });
};

populateUl2();
</script>
<style>
    .chart-container2 {
  width: 100px;
}
.programming-stats2 {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats2:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats2 .details_ul2 {
  list-style: none;
  padding: 0;
}

.programming-stats2 .details_ul2 li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats2 .details_ul2.percentage {
  font-weight: 700;
  color: #023047;
}
</style>
</div>
</div>
</div>
      <div class="flex_flex-wrap_-m-4_4">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-black-500 mb-4">
          <text x="7" y="18" fill="navyblue"><b>Aptitude</b></text> 
          </div>
          <div class="programming-stats3">
            <div class="chart-container3">
                <canvas class="my-chart3"></canvas>
            </div>
            <div class="details_ul3">
                <ul>
                <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData3 = {
  labels: ["Correct", "Incorrect", "Un-Answered",],
  data: [5, 15, 30,],
};

const myChart3 = document.querySelector(".my-chart3");
const ul3 = document.querySelector(".programming-stats3 .details_ul3");

new Chart(myChart3, {
  type: "doughnut",
  data: {
    labels: chartData3.labels,
    datasets: [
      {
        label: "  ",
        data: chartData3.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl3 = () => {
  chartData3.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'>${chartData3.data[i]}</span>`;
    ul3.appendChild(li);
  });
};

populateUl3();
</script>
<style>
    .chart-container3 {
  width: 100px;
}
.programming-stats3 {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats3:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats3 .details_ul3 {
  list-style: none;
  padding: 0;
}

.programming-stats3 .details_ul3 li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats3 .details_ul3 .percentage {
  font-weight: 700;
  color: #023047;
}
</style>
</div>
</div>
</div>
            
            <div class="flex_flex-wrap_-m-4_5">
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-black-500 mb-4">
          <text x="7" y="18" fill="navyblue"><b>Logical</b></text> 
          </div>
          <div class="programming-stats4">
            <div class="chart-container4">
                <canvas class="my-chart4"></canvas>
            </div>
            <div class="details_ul4">
                <ul>
                <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData4 = {
  labels: ["Correct", "Incorrect", "Un-Answered",],
  data: [5, 15, 30],
};

const myChart4 = document.querySelector(".my-chart4");
const ul4 = document.querySelector(".programming-stats4 .details_ul4");

new Chart(myChart4, {
  type: "doughnut",
  data: {
    labels: chartData4.labels,
    datasets: [
      {
        label: "  ",
        data: chartData4.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl4 = () => {
  chartData4.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'><b>${chartData4.data[i]}</b></span>`;
    ul4.appendChild(li);
  });
};

populateUl4();
</script>
<style>
    .chart-container4 {
  width: 100px;
}
.programming-stats4 {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats4:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats4 .details_ul4 {
  list-style: none;
  padding: 0;
}

.programming-stats4 .details_ul4 li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats4.details_ul4 .percentage {
  font-weight: 700;
  color: #023047;
}
</style>
</div>
</div>
</div>
<div class="flex_flex-wrap_-m-4_6">
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-black-500 mb-4">
          <text x="7" y="18" fill="navyblue"><b> Practice</b></text> 
          </div>
          <div class="programming-stats5">
            <div class="chart-container5">
                <canvas class="my-chart5"></canvas>
            </div>
            <div class="details_ul5">
                <ul>
                <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData5 = {
  labels: ["Correct", "Incorrect", "Un-Answered",],
  data: [5, 15, 30],
};

const myChart5 = document.querySelector(".my-chart5");
const ul5 = document.querySelector(".programming-stats5 .details_ul5");

new Chart(myChart5, {
  type: "pie",
  data: {
    labels: chartData5.labels,
    datasets: [
      {
        label: "  ",
        data: chartData5.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl5 = () => {
  chartData5.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'><b>${chartData5.data[i]}</b></span>`;
    ul5.appendChild(li);
  });
};

populateUl5();
</script>
<style>
    .chart-container5 {
  width: 150px;
}
.programming-stats5 {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats5:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats5 .details_ul5 {
  list-style: none;
  padding: 0;
}

.programming-stats5 .details_ul5 li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats5.details_ul5 .percentage {
  font-weight: 700;
  color: #023047;
}
</style>
</div>
</div>
</div>
<div class="flex_flex-wrap_-m-4_7">
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="border border-gray-200 p-5 rounded-lg">
          <div class="w-40 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-black-500 mb-4">
          <text x="7" y="18" fill="navyblue"><b>Test</b></text> 
          </div>
          <div class="programming-stats6">
            <div class="chart-container6">
                <canvas class="my-chart6"></canvas>
            </div>
            <div class="details_ul6">
                <ul>
                <li>Attended:<b> 60</b> </li>
                    
</ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   const chartData6 = {
  labels: ["Correct", "Incorrect", "Un-Answered",],
  data: [5, 15, 30],
};

const myChart6 = document.querySelector(".my-chart6");
const ul6 = document.querySelector(".programming-stats6 .details_ul6");

new Chart(myChart6, {
  type: "pie",
  data: {
    labels: chartData6.labels,
    datasets: [
      {
        label: "  ",
        data: chartData6.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderRadius: 2,
    hoverBorderWidth: 0,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

const populateUl6 = () => {
  chartData6.labels.forEach((l, i) => {
    let li = document.createElement("li");
    li.innerHTML = `${l}: <span class='percentage'><b>${chartData6.data[i]}</b></span>`;
    ul6.appendChild(li);
  });
};

populateUl6();
</script>
<style>
    .chart-container6 {
  width: 250px;
}
.programming-stats6 {
  font-family: "Rubik", sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}
.programming-stats6:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats6 .details_ul6 {
  list-style: none;
  padding: 0;
}

.programming-stats6 .details_ul6 li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats6.details_ul6 .percentage {
  font-weight: 700;
  color: #023047;
}
</style>
</div>
</div>
</div>

<style>
   .flex_flex-wrap_-m-4_1{
                position: absolute;
                top:15.5%;
                right: 20px;
                left: 50px;
            }  

            .flex_flex-wrap_-m-4_2{
                position: absolute;
                top:15.5%;
                right: 20px;
                left: 520px;
            }
            .flex_flex-wrap_-m-4_3{
                position: absolute;
                top:15.5%;
                right: 20px;
                left: 980px;
                width: 60%;
            }
            .flex_flex-wrap_-m-4_4{
                position: absolute;
                top:61.5%;
                right: 20px;
                left: 50px;
            }
            .flex_flex-wrap_-m-4_5{
                position: absolute;
                top:61.5%;
                right: 20px;
                left: 520px;
            }
            .flex_flex-wrap_-m-4_6{
                position: absolute;
                top:61.5%;
                right: 20px;
                left: 980px;
                width: 65%;
            }
            .flex_flex-wrap_-m-4_7{
                position: absolute;
                top:108.5%;
                right: 20px;
                left: 350px;
                width: 105%;
            }
            
            </style>
            
         
    
</section>    
</body>
</html>