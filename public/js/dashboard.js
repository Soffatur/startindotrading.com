var ctx = document.getElementById('myChart').getContext('2d');

var Year = [];
var Value = [];
count.forEach(function(count){
    Year.push(count.year)
    Value.push(count.value)
});

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: Year,
        datasets: [{
            label: Year.length + ' hari terakhir',
            data: Value,
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
