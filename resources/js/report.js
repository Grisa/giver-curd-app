function generateTable(url) {

    var tableAttributes = ['id', 'first_name', 'last_name', 'email', 'gender', 'company', 'city', 'website'];

    $("#myTable tr:not(:first)").remove();

    if (!url) {
        url = "api/getClientList";
    }

    var table = document.getElementById("myTable");

    $.ajax({
        type: 'GET',
        async: false,
        url: url,
        success: (data) => {
            values = data.data;

            document.getElementById("pageNumber").innerHTML = data.current_page

            if (!!data.prev_page_url) {
                $("#backPage").click(function () {
                    generateTable(data.prev_page_url.split('public/')[1]);
                });
            }

            if (!!data.next_page_url) {
                $("#nextPage").click(function () {
                    generateTable(data.next_page_url.split('public/')[1]);
                });
            }

            for (let index = 0; index < values.length - 1; index++) {
                let i = table.rows.length;
                let row = table.insertRow(i);

                for (var j = 0; j < tableAttributes.length; j++) {
                    var cell = row.insertCell(j);
                    if (tableAttributes[j] == 'website' && values[i][tableAttributes[j]] != '') {
                        values[i][tableAttributes[j]] = '<a target="_blank" href="' + values[i][tableAttributes[j]] + '">' + values[i][tableAttributes[j]].substr(0, 20) + '...</a>';
                    }
                    cell.innerHTML = values[i][tableAttributes[j]];
                }

                var cell = row.insertCell(row.cells.length);
                cell.innerHTML = "x";
                cell.classList.add("delete_row");
                cell.addEventListener("click", function () {
                    deleteRow(this, values[i]['_id']);
                }, false);

            }
        }
    });
}

function deleteRow(r, id) {
    var i = r.parentNode.rowIndex;
    if (confirm('Deseja excluir o registro?')) {
        $.ajax({
            type: 'POST',
            url: "api/deleteRow",
            data: { id: id },
            success: (data) => {
                console.log(data);
                document.getElementById("myTable").deleteRow(i);
            }
        });
    }
}

