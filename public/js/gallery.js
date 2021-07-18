$(document).on('click', '#testimoniinsertbtn', function(e) {
    e.preventDefault()
    var form = new FormData();
    var file = $('#finserttestimoni input[name = "photo"]')[0].files[0];
    form.append("photo", file);

    var settings = {
        "url": urlapi + "api-gallery",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Accept": "application/json",
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form,
        error: function(jqXHR, textStatus, errorThrown) {
            var err = JSON.parse(jqXHR.responseText)
            var err2 = err.errors
            if (err2.photo) {
                $('#vc_image').text(err2.photo)
            } else {
                $('#vc_image').text('')
            }
            $('#fprocessinserttestimoni').html("<button type='submit' class='btn btn-info btn-block' id='testimoniinsertbtn'><i class='fas fa-feather-alt'></i> Simpan</button>");
        },
        "beforeSend": function() {
            $('#fprocessinserttestimoni').html("<button class='btn btn-primary btn-block' type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>  Data sedang dikirim...</button>");
        },
        "success": function(data) {
            $('#fprocessinserttestimoni').html("<button type='submit' class='btn btn-info btn-block' id='testimoniinsertbtn'><i class='fas fa-feather-alt'></i> Simpan</button>");
        }
    };

    $.ajax(settings).done(function(response) {
        var data1 = JSON.parse(response)
        $('#finserttestimoni').trigger('reset')
        $('#vc_image').text('')
        $('#btnFormTestimoni').click();
        location.reload();
        Swal.fire(
            data1.message,
            'success'
        )
    });
})

$(document).on('click', '.edittestimoni', function() {
    var form = new FormData();

    var settings = {
        "url": urlapi + "api-gallery/" + $(this).data('id'),
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Accept": "application/json"
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings).done(function(response) {
        var data1 = JSON.parse(response);
        var data2 = data1.data;
        console.log(data2);
        $('#fupdatetestimoni input[name = "id_gallery"]').val(data2.id);
    });
});

$(document).on('click', '#testimoniupdatebtn', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'sure you want to change gallery ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            var id = $('#fupdatetestimoni input[name = "id_gallery"]').val();
            var file = $('#fupdatetestimoni input[name = "photo"]')[0].files[0];
            form.append("photo", file);
            form.append("_method", "PUT")

            var settings = {
                "url": urlapi + "api-gallery/" + id,
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json",
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                error: function(jqXHR, textStatus, errorThrown) {
                    var err = JSON.parse(jqXHR.responseText)
                    var err2 = err.errors
                    if (err2.photo) {
                        $('#vu_image').text(err2.photo)
                    } else {
                        $('#vu_image').text('')
                    }
                    $('#fprocessupdatetestimoni').html("<button type='submit' class='btn btn-info btn-block' id='testimoniupdatebtn'><i class='fas fa-feather-alt'></i> Simpan</button>");
                },
                "beforeSend": function() {
                    $('#fprocessupdatetestimoni').html("<button class='btn btn-primary btn-block' type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>  Data sedang dikirim...</button>");
                },
                "success": function(data) {
                    $('#fprocessupdatetestimoni').html("<button type='submit' class='btn btn-info btn-block' id='testimoniupdatebtn'><i class='fas fa-feather-alt'></i> Simpan</button>");
                }
            };

            $.ajax(settings).done(function(response) {
                var data1 = JSON.parse(response)
                $('#fupdatetestimoni').trigger('reset')
                $('#vu-name').text('')
                $('#vu-content').text('')
                $('#vu-position').text('')
                $('#ubahtestimoni').click();
                location.reload();
                // var oTable = $('#sindexmanagementcustomershop').DataTable()
                // oTable.draw(false)
                Swal.fire(
                    data1.message,
                    'success'
                )
            });
        }
    })
})

$('.close').click(function(e) {
    $('#finserttestimoni').trigger('reset')
    $('#vc_image').text('')
    $('#fupdatetestimoni').trigger('reset')
    $('#vu_image').text('')
})

$(document).on('click', '.btnFormHapustestimoni', function() {
    Swal.fire({
        title: 'sure you want to delete the gallery ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            form.append("_method", "DELETE");

            var settings = {
                "url": urlapi + "api-gallery/" + $(this).data('id'),
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json",
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
            };

            $.ajax(settings).done(function(response) {
                var data1 = JSON.parse(response)
                location.reload();
                // var oTable = $('#sindexmanagementBin').DataTable()
                // oTable.draw(false)
                Swal.fire(
                    data1.message,
                    'success'
                )
            });
        }
    })
})

