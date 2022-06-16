<!DOCTYPE html>
<html lang="en">
<!-- 
    Base do front == https://codepen.io/ibrahim-zulfiqar/pen/BaJzVgP 
                  == https://codepen.io/atulkumarsingh/pen/PoYLWYw
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="../resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../resources/js/index.js"></script>
    <title>Document</title>
</head>

<body onload="buildChartView()">
    <nav class="sideBar">
        <div class="profile">
            <i class="fa-solid fa-user"></i>
        </div>
        <p class="text-muted"></p>
        <ul class="navLinks">
            <li>
                <a href="../public/" class="link">
                    <i class="fa-solid fa-table-columns link-icon"></i>
                    <span class="link-text">Importar</span>
                </a>
            </li>
            <li>
                <a href="report" class="link">
                    <i class="fa-solid fa-chart-line link-icon"></i>
                    <span class="link-text">Relatorios</span>
                </a>
            </li>
            <li>
                <a href="chart" class="link">
                    <i class="fa-solid fa-chart-pie link-icon"></i>
                    <span class="link-text">Graficos</span>
                </a>
            </li>
        </ul>
        <ul class="navLinks">
            <li>
                <a href="https://www.linkedin.com/in/ramiro-grisa-36178b120/" target="_blank" class="link">
                    <i class="fa-solid fa-user link-icon"></i>
                    <span class="link-text">Contato</span>
                </a>
            </li>
        </ul>
    </nav>

    <main style="width: 100%;">

        <canvas id="nameChart" style="max-width:600px;display:inline"></canvas>
        <canvas id="mailChart" style="max-width:600px;display:inline"></canvas>
        <canvas id="genderChart" style="max-width:600px;display:inline"></canvas>
        <script src="../resources/js/chart.js"></script>
    </main>
</body>

</html>