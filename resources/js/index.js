
var closesIcon = document.querySelectorAll('.xd-message .close-icon');

closesIcon.forEach(function (closeIcon) {
    closeIcon.addEventListener('click', function () {
        this.parentNode.parentNode.classList.add('hide');
    });
});

function sendFileAction() {
    file = document.getElementById("upload-file").value;

    if (!file) {
        alert("Necessario preencher o arquivo");
    }

    if (!hasExtension('upload-file', ['.csv'])) {
        alert("extensao do arquivo deve ser csv");
    }

    var formData = new FormData();
    formData.append('file', $('#upload-file')[0].files[0]);

    $.ajax({
        type: 'POST',
        url: "api/importFile",
        processData: false,
        contentType: false,
        data: formData,
        success: (data) => {

            if (!data.success) {


                document.getElementById('errorDiv').style.display = 'block';

                let msg = data.msg + '\n';


                for (let index = 0; index < data.list.length; index++) {
                    msg += data.list[index] + '\n';
                }

                document.getElementById('errorList').innerText = msg;
            }

            $('.upload-wrapper').removeClass("uploaded");
            $('.upload-wrapper').addClass("success");
            console.log(data);
        }
    });

}

function hasExtension(inputID, exts) {
    var fileName = document.getElementById(inputID).value;
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}

$(document).ready(function () {
    $('#upload-file').change(function () {
        var filename = $(this).val();
        $('#file-upload-name').html(filename);
        if (filename != "") {
            setTimeout(function () {
                $('.upload-wrapper').addClass("uploaded");
            }, 700);

            setTimeout(function () {
                sendFileAction();
            }, 400);
        }
    });
});