const labels = [
  'January',
  'February',
  'March',
];

const data = {
  labels: labels,
  datasets: [{
    label: 'Covid Cases',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [180, 230, 210,],
  }]
};

const config = {
  type: 'line',
  data: data,
  options: {
    responsive: true,
    maintainAspectRatio: false
  }
};


const myChart = new Chart(
  document.getElementById('myChart'),
  config
);