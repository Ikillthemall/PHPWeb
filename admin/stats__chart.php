<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistic List</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <div class="main">
        <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Thống kê sản phẩm theo biểu đồ</h1>
            </div>
            <div id="piechart" class="content__container-title row">
                <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    // Draw the chart and set the chart values
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                        $sumCate = count($chartList);
                        $temp = 1;
                        foreach ($chartList as $list){
                            extract($list);
                            if($i == $chartList){
                                $text = "";
                            }else{
                                $text = ",";
                            }
                            echo "['".$list['catename']."',".$list['countprod']."]".$text;
                            $temp +=1;
                        }
                    ?>
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {'title':'Biểu đồ chi tiết', 'width':1100, 'height':550};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                    }
                </script>
            </div>
        </section>
    <?php require_once './footer.php' ?>
    </div>
</body>

</html>