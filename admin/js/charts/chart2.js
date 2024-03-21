  const ctx = document.getElementById('nut');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
         borderColor: '#007bff',
      backgroundColor: '#007bff',
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
    responsive: true, // Make the chart responsive
      maintainAspectRatio: false // Prevent the chart from maintaining aspect ratio
    
    }
  });