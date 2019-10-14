<!DOCTYPE html>
<html>
<head>
<style>
    table{
        table-layout:automatic;
        width:30%;
        border:1px solid #666666
    }
</style>
    <title></title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
</head>
<br><br>
<body bgcolor="#22222">
    <canvas id="MyChart7" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart7').getContext('2d');
var MyChart7 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['01/05/2019', '02/05/2019', '03/05/2019', '04/05/2019','05/05/2019','06/05/2019','07/05/2019', '08/05/2019', '09/05/2019', '10/05/2019', '11/05/2019', '12/05/2019', '13/05/2019', '14/05/2019', '15/05/2019', '16/05/2019', '17/05/2019', '18/05/2019', '19/05/2019', '20/05/2019', '21/05/2019', '22/05/2019', '23/05/2019', '24/05/2019', '25/05/2019', '26/05/2019', '27/05/2019', '28/05/2019', '29/05/2019', '30/05/2019', '31/05/2019'],
        datasets: [{
            label: 'จำนวนคนล็อคอินLogin',
            data: [12, 19, 3, 5,10,35,40,12, 19, 3, 5,10,35,40,12, 19, 3, 5,10,35,40,12, 19, 3, 5,10,35,40,16,35,31],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<br><br><br>
<canvas id="myChart" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Login',
            data: [12, 19, 3, 5],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><h2>เปอร์เซ็นการล็อคอินใน 1 เดือน(Week of mont)</h2></center>
<br><br><br>
    <canvas id="MyChart8" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart8').getContext('2d');
var MyChart8 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday','Thuesday','Friday','Saturday'],
        datasets: [{
            label: 'Login(Day of Week)',
            data: [28, 19, 3, 5,10,30,35],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><table border="4" bgcolor="white">

    <caption><font color="white"><h3>จำนวนคนล็อคอิน day of week</h3></font></caption>
    <tr>
        <td>Day</td>
        <td>Number of Users</td>
    </tr>
    <tr>
        <td>Sunday</td>
        <td>28</td>
    </tr>
    <tr>
        <td>Monday</td>
        <td>19</td>
    </tr>
    <tr>
        <td>Tuesday</td>
        <td>3</td>
    </tr>
    <tr>
        <td>Wednesday</td>
        <td>5</td>
    </tr>
    <tr>
        <td>Thursday</td>
        <td>10</td>
    </tr>
    <tr>
        <td>friday</td>
        <td>30</td>
    </tr>
    <tr>
        <td>Saturday</td>
        <td>35</td>
    </tr>
</table></center>
    <br><br><br><br><br>
    <canvas id="MyChart1" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart1').getContext('2d');
var MyChart1 = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Profile', 'Dashboard', 'Show case', 'classroom','Calrendar'],
        datasets: [{
            label: 'Pageviews',
            data: [12, 19, 3, 5,10],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><table>
	<tr>
		<caption><h3>เก็บข้อมูลของUserว่าคนส่วนมากเข้าไปหน้าไหนมากที่สุด</h3></caption>
	</tr>
</table></center>
<br><br><br>
<canvas id="MyChart9" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart9').getContext('2d');
var MyChart9 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['01/05/2019', '02/05/2019', '03/05/2019', '04/05/2019','05/05/2019','06/05/2019','07/05/2019', '08/05/2019', '09/05/2019', '10/05/2019', '11/05/2019', '12/05/2019', '13/05/2019', '14/05/2019', '15/05/2019', '16/05/2019', '17/05/2019', '18/05/2019', '19/05/2019', '20/05/2019', '21/05/2019', '22/05/2019', '23/05/2019', '24/05/2019', '25/05/2019', '26/05/2019', '27/05/2019', '28/05/2019', '29/05/2019', '30/05/2019', '31/05/2019'],
        datasets: [{
            label: 'Assignment',
            data: [12, 19, 3, 5,10,35,40,12, 19, 3, 5,10,35,40,12, 19, 3, 5,10,35,40,12, 19, 3, 5,10,35,40,12, 19, 35],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<br><br><br>
    <canvas id="MyChart2" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart2').getContext('2d');
var MyChart2 = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Assignment/week',
            data: [12, 19, 3, 5],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><h2>เปอร์เซ็นในการทำAssignmentของแต่ละWeek</h2></center>
<br><br><br>
    <canvas id="MyChart3" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart3').getContext('2d');
var MyChart3 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday','Thuesday','Friday','Saturday'],
        datasets: [{
            label: 'จำนวน นศ.ที่ทำAssignment',
            data: [12, 19, 3, 5,10,35,40],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><table border="4" bgcolor="white">

    <caption><font color="white"><h3>จำนวนคนทำAssignment (day of week)</h3></font></caption>
    <tr>
        <td>Day</td>
        <td>Number of Users</td>
    </tr>
    <tr>
        <td>Sunday</td>
        <td>28</td>
    </tr>
    <tr>
        <td>Monday</td>
        <td>19</td>
    </tr>
    <tr>
        <td>Tuesday</td>
        <td>3</td>
    </tr>
    <tr>
        <td>Wednesday</td>
        <td>5</td>
    </tr>
    <tr>
        <td>Thursday</td>
        <td>10</td>
    </tr>
    <tr>
        <td>friday</td>
        <td>30</td>
    </tr>
    <tr>
        <td>Saturday</td>
        <td>35</td>
    </tr>
</table></center>
<br><br><br>
<canvas id="MyChart10" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart10').getContext('2d');
var MyChart10 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['01/05/2019', '02/05/2019', '03/05/2019', '04/05/2019','05/05/2019','06/05/2019','07/05/2019', '08/05/2019', '09/05/2019', '10/05/2019', '11/05/2019', '12/05/2019', '13/05/2019', '14/05/2019', '15/05/2019', '16/05/2019', '17/05/2019', '18/05/2019', '19/05/2019', '20/05/2019', '21/05/2019', '22/05/2019', '23/05/2019', '24/05/2019', '25/05/2019', '26/05/2019', '27/05/2019', '28/05/2019', '29/05/2019', '30/05/2019', '31/05/2019'],
        datasets: [{
            label: 'Assignment',
            data: [12, 10, 25, 5, 35, 20, 10,12, 10, 25, 5, 35, 20, 10,12, 10, 25, 5, 35, 20, 10,12, 10, 25, 5, 35, 35,20,10,12, 10],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<br><br><br>
    <canvas id="MyChart4" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart4').getContext('2d');
var MyChart4 = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Forks/week',
            data: [12, 10, 25, 5,],
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
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><h2>เปอร์เซ็นในการForksของแต่ละWeek</h2></center>
<br><br><br>
    <canvas id="MyChart5" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart5').getContext('2d');
var MyChart5 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday','Thuesday','Friday','Saturday'],
        datasets: [{
            label: 'Forks/day',
            data: [12, 10, 25, 5, 35, 20, 10],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
<center><table border="4" bgcolor="white">

    <caption><font color="white"><h3>จำนวนคนที่Forks (day of week)</h3></font></caption>
    <tr>
        <td>Day</td>
        <td>Number of Users</td>
    </tr>
    <tr>
        <td>Sunday</td>
        <td>12</td>
    </tr>
    <tr>
        <td>Monday</td>
        <td>10</td>
    </tr>
    <tr>
        <td>Tuesday</td>
        <td>25</td>
    </tr>
    <tr>
        <td>Wednesday</td>
        <td>5</td>
    </tr>
    <tr>
        <td>Thursday</td>
        <td>35</td>
    </tr>
    <tr>
        <td>friday</td>
        <td>20</td>
    </tr>
    <tr>
        <td>Saturday</td>
        <td>10</td>
    </tr>
</table></center>
<br><br><br><br>
    <canvas id="MyChart6" width="115" height="35"></canvas>
<script>
Chart.defaults.global.defaultFontColor = 'white';
var ctx = document.getElementById('MyChart6').getContext('2d');
var MyChart6 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Homework',
            data: [12, 20, 5, 10],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                
            ],
            borderWidth: 3
        },{
            label: 'Submissions',
            data: [5, 14, 2, 8],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 206, 86, 0.2)',
              
                
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            labels: {
                fontSize: 30
              }
        }
    }
});
</script>
</body>
</html>