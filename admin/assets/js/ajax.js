$(document).ready(function () {
    $('#dataTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Czech.json"
        }
    });
});
/* username check */
$(document).ready(function () {
    $('#username').blur(function () {

        var username = $(this).val();

        $.ajax({
            url: 'user_config.php',
            method: "POST",
            data: {user_name: username},
            success: function (data) {
                if (data != '0') {
                    $('#message').html('<span class="text-danger">Uživatelské jméno zabráno</span>');
                    $('#addUser2').attr("disabled", true);
                } else {
                    $('#message').html('<span class="text-success">Jméno lze použít</span>');
                    $('#addUser2').attr("disabled", false);
                }
            }
        })

    });
});
/*delete data pobocky */
$(function () {
    $(document).on('click', '.myDelete', function () {
        var element = $(this);
        var del_id = element.attr("id");
        var info = 'id=' + del_id;
        if (confirm("Opravdu chcete odstranit data pro danou pobočku?")) {
            $.ajax({
                type: "GET",
                url: "delete.php",
                data: info,
                success: function (data) {
                    $('.alert-success').fadeIn(200).show();
                    setTimeout(function () { //ceka 2 sekundy
                        location.reload(); // potom refresh stranky
                    }, 1000);
                },
                error: function (jqXHR, textStatus) {
                    alert("error: " + textStatus);
                    console.log("error: " + textStatus);
                }
            });
        }
        return false;
    });
});
/*delete user uzivatelu */
$(function () {
    $(document).on('click', '.deleteUser', function () {
        var element = $(this);
        var del_id = element.attr("id");
        var info = 'id=' + del_id;
        if (confirm("Opravdu chcete odstranit daného uživatele?")) {
            $.ajax({
                type: "GET",
                url: "deleteUser.php",
                data: info,
                success: function (data) {
                    $('.alert-success').fadeIn(200).show();
                    setTimeout(function () { //ceka 2 sekundy
                        location.reload(); // potom refresh stranky
                    }, 1000);
                },
                error: function (jqXHR, textStatus) {
                    alert("error: " + textStatus);
                    console.log("error: " + textStatus);
                }
            });
        }
        return false;
    });
});
$(function () {
    $(document).on('click', '.deleteZip', function () {
        var element = $(this);
        var del_id = element.attr("id");
        var info = 'id=' + del_id;
        if (confirm("Opravdu chcete odstranit daný zip?")) {
            $.ajax({
                type: "GET",
                url: "deleteZip.php",
                data: info,
                success: function (data) {
                    $('.alert-success').fadeIn(200).show();
                    setTimeout(function () { //ceka 2 sekundy
                        location.reload(); // potom refresh stranky
                    }, 1000);
                },
                error: function (jqXHR, textStatus) {
                    alert("error: " + textStatus);
                    console.log("error: " + textStatus);
                }
            });
        }
        return false;
    });
});
/*Users form ajax post*/
$(function () {

    $('#myForm').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'user_config.php',
            data: $('#myForm').serialize(),
            success: function (data) {
                $('.alert-success').fadeIn(200).show();
                setTimeout(function () { //ceka 2 sekundy
                    location.reload(); // potom refresh stranky
                }, 1000);
            },
            error: function (jqXHR, textStatus) {
                alert("error: " + textStatus);
                console.log("error: " + textStatus);
            }

        });

    });

});
/*template form ajax post*/
$(function () {

    $('#myFormTemp').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'config.php',
            enctype: 'multipart/form-data',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function () {
                $('.alert-success').fadeIn(200).show();
                setTimeout(function () {//ceka 2 sekundy
                    location.reload(); // potom refresh stranky
                }, 1000);
            },
            error: function (jqXHR, textStatus) {
                alert("error: " + textStatus);
                console.log("error: " + textStatus);
            }

        });

    });

});
/*template form ajax post*/
$(function () {

    $('#myFormTempUpdate').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'update.php',
            enctype: 'multipart/form-data',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function () {
                $('.alert-success').fadeIn(200).show();
                setTimeout(function () {//ceka 2 sekundy
                    location.reload(); // potom refresh stranky
                }, 1000);
            },
            error: function (jqXHR, textStatus) {
                alert("error: " + textStatus);
                console.log("error: " + textStatus);
            }

        });

    });

});

/*<!-- picture preview form-->*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgPreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file").change(function () {
    readURL(this);
});
