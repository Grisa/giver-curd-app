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
    <script src="../resources/js/index.js"></script>
    <script src="../resources/js/report.js"></script>
    <link rel="stylesheet" href="../resources/css/index.css">
    <link rel="stylesheet" href="../resources/css/report.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body onload="generateTable('')">
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

    <main>
        <table id="myTable" class="table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Primeiro nome</th>
                    <th>Ultimo nome</th>
                    <th>email</th>
                    <th>Genero</th>
                    <th>Empresa</th>
                    <th>Cidade</th>
                    <th>Website</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

        </table>
        <div class="container">
            <ul class="pagination">
                <li>
                    <a style="cursor: pointer;" id="backPage">
                        <</a> </li> <li>
                            <a id="pageNumber">1</a>
                </li>
                <li>
                    <a style="cursor: pointer;" id="nextPage">></a>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>