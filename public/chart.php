<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <?php
    include_once 'resources.php';
    ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3 pt-3">
            <div class="col-md-8">
                <div class="chart col-md-12" id="chart">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="http://localhost/apitest/" class="btn btn-outline-primary btn-block col-md-4">Return</a>
            </div>
        </div>
    </div>
</body>

</html>

<script>
Highcharts.chart('chart', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Ages'
    },
    tooltip: {
        valueSuffix: '%'
    },
    subtitle: {
        text: 'People'
    },
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [{
        name: 'Percentage',
        colorByPoint: true,
        data: [<?php
            foreach ($people as $person) {
                echo "{name:'".$person['age_group']."',y:".$person['quantity']."},";
            }
        ?>]
    }]
});
</script>