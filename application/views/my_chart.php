<!DOCTYPE html>
<html>

<head>
    <title>HighChart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body>

    <script type="text/javascript">
        $(function() {

            var data_click = <?php echo $click; ?>;
            var data_viewer = <?php echo $viewer; ?>;

            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Yearly Website Ratio'
                },
                xAxis: {
                    categories: ['2013', '2014', '2015', '2016']
                },
                yAxis: {
                    title: {
                        text: 'Rate'
                    }
                },
                series: [{
                    name: 'Click',
                    data: data_click
                }, {
                    name: 'View',
                    data: data_viewer
                }]
            });
        });
    </script>

    <div class="container">
        <br />
        <h2 class="text-center">Codeigniter 3 - Highcharts mysql json example</h2>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard - ItSolutionStuff.com</div>
                    <div class="panel-body">
                        <div id="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>