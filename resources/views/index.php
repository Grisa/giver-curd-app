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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../resources/css/index.css">
    <script src="../resources/js/index.js"></script>
    <title>Document</title>
</head>

<body>
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

        <h1>Importar arquivo</h1>
        <h3>Registros do arquivo com erros nao serao importados.</h3>

        <div class="main-wrapper" style="float: left;">
            <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                    <input type="file" id="upload-file">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85">
                        <defs>
                            <path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path>
                            <path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path>
                            <path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path>
                        </defs>
                        <g>
                            <g>
                                <g>
                                    <use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use>
                                </g>
                                <g>
                                    <g>
                                        <use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use>
                                    </g>
                                    <g>
                                        <use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="file-upload-text">Importar Arquivo</span>
                    <div class="file-success-text">
                        <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
                            <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757" />
                            <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 " />
                        </svg> <span>Arquivo adicionado</span></div>
                </div>
                <p id="file-upload-name"></p>
            </div>

            <div class="alert" id="errorDiv" style="display: none; ">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <span id="errorList"></span>
            </div>
        </div>



        </div>
    </main>
    <!--<input type="file" name="sendFile" id="sendFile">
    <br>
    <button id="send">send file</button> -->

</body>

</html>