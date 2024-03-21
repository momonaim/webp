//step 1 load the script in the main php file
//<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

//step 2 initialize the chart in the php file
//<div>
//  <canvas id="myChart"></canvas>
//</div>

//step 3 chart code structure

//setup block
const data = {
   labels: ['Red', 'Blue', 'boyyy', 'Grveen', 'ff', 'Orange'],
      datasets: [{
        label: '# click me',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
        borderColor: '#007bff',
      backgroundColor: '#007bff',
      }]
};

//config block
const config = {
  type: 'line',
  data: data,
  options: {
    animations: {
      tension: {
        duration: 1000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
    scales: {
      y: { // defining min and max so hiding the dataset does not change scale range
        min: 0,
        max: 20
      }
    },
    responsive: true, // Make the chart responsive
      maintainAspectRatio: false // Prevent the chart from maintaining aspect ratio
    
  }
};

 // Get the canvas element
  const canvas = document.getElementById('barchart');
  const canvas2 = document.getElementById('nut');
    // Set initial dimensions
 //canvas.width = window.innerWidth * 0.8; // 80% of window width
  //canvas.height = window.innerHeight * 0.9; // 60% of window height

//init render block
  const barchart = new Chart(
    canvas,
    config
  );

   // Resize listener to update dimensions on window resize
  //window.addEventListener('resize', () => {
    //canvas.width = window.innerWidth * 0.8;
    //canvas.height = window.innerHeight * 0.9;
    //barchart.update(); // Update the chart to reflect the new dimensions
 // });
