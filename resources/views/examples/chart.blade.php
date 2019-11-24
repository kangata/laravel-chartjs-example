<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chart.js</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center item-center">
        <div class="w-1/2 mt-10">
            <canvas id="bar" width="200" height="100"></canvas>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script>
        var barChartCtx = document.getElementById('bar');
        var barChart = new Chart(barChartCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Desc'],
                datasets: [
                    {
                        label: 'Month of Birtdate',
                        data: JSON.parse('{!! json_encode($bar_data) !!}'),
                        backgroundColor: [
                            '#FF5722', '#2196F3', '#8BC34A', '#E91E63', '#795548', '#FF9800', '#3F51B5', '#9C27B0', '#009688', '#E91E63', '#00BCD4', '#CDDC39'
                        ]
                    }
                ]
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
        })
    </script>
</body>
</html>
