$(".counter-up").counterUp({
    delay: 10,
    time:1000
})

let dateArr =["sep 31",'sep 23',"sep 22","sep 28","sep 19","sep 21","sep 14","sep 15",];
let orderCountArr =[4,6,7,8,2,1,7,8,9,4];
let viewercountArr = [23,54,7,83,23,43,34,22,12];

var ctx = document.getElementById('ov').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [
            {
            label: 'order',
            data: orderCountArr,
            backgroundColor: [
                '#7fabdb30',
               
            ],
            borderColor: [
                '#6610f2',
               
            ],
            borderWidth: 1,
            tension:0
        },
        {
            label: 'viewer',
            data: viewercountArr,
            backgroundColor: [
                '#007bff30',
               
            ],
            borderColor: [
                '#007bff',
               
            ],
            borderWidth: 1,
            tension:0
        }
    ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            },
            xAxes:{
                gridLines:[
                    {
                        display:false
                    }
                ]
            },
           
        }
    }
});

let orderplace = [5,23,5,6,9];
let place = ['YGN','MDY','SHAN','MGW','PAGO'];


var ctx = document.getElementById('op').getContext('2d');
var opChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: place,
        datasets: [{
            label: 'place',
            data: orderplace,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    options: {
        legend: {
            display: true,
          position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
    
    
});


