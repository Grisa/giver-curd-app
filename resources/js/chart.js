var barColors = [
    "#b91d47",
    "#00aba9"
];

function buildChartView() {
    buildNameChart();
    buildMailChart();
    buildGenderChart();
}

function buildNameChart() {
    $.ajax({
        type: 'GET',
        async: false,
        url: 'api/nameCountChart',
        success: (data) => {
            generateChart("nameChart", ['Sobrenome preenchido', 'Sem sobrenome'], data, "Quantidade de clientes com ou sem sobrenome")
        }
    })
}

function buildMailChart() {
    $.ajax({
        type: 'GET',
        async: false,
        url: 'api/mailCountChart',
        success: (data) => {
            generateChart("mailChart", ['E-mail preenchido', 'Sem e-mail'], data, "Quantidade de clientes com ou sem e-mail")
        }
    })
}

function buildGenderChart() {
    $.ajax({
        type: 'GET',
        async: false,
        url: 'api/genderCountChart',
        success: (data) => {
            generateChart("genderChart", ['Genero preenchido', 'Sem genero'], data, "Quantidade de clientes com ou sem gênero")
        }
    })
}

function generateChart(name, xValues, yValues, title) {
    new Chart(name, {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: title
            }
        }
    });
}