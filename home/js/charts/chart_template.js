//step 1 load the script in the main php file
//<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

//step 2 initialize the chart in the php file
//<div>
//  <canvas id="myChart"></canvas>
//</div>

//step 3 chart code structure

//setup block
const data = {
   labels: ['Red', 'Blue', 'boyyy', 'Green', 'yesssfdfsdfisiririr', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
};

//config block
const config = {
    type: 'bar',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
};

//init render block
const myChart = new Chart(
  document.getElementById('myChart'),
  config
);

 
