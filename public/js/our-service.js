$(document).on('click', '#testimoniinsertbtn', function(e) {
    e.preventDefault()
    var form = new FormData();
    form.append("our_service", $('#finserttestimoni input[name = "our_service"]').val());

    var settings = {
        "url": urlapi + "api-our-service",
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
            if (err2.our_service) {
                $('#vu_our_service').text(err2.our_service)
            } else {
                $('#vu_our_service').text('')
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
        $('#vu_our_service').text('')
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
        "url": urlapi + "api-our-service/" + $(this).data('id'),
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
        $('#fupdatetestimoni input[name = "id_ourService"]').val(data2.id);
        $('#fupdatetestimoni input[name = "our_service"]').val(data2.our_name_service);
    });
});

$(document).on('click', '#testimoniupdatebtn', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'sure you want to change our service ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            var id = $('#fupdatetestimoni input[name = "id_ourService"]').val();
            form.append("our_service", $('#fupdatetestimoni input[name = "our_service"]').val())
            form.append("_method", "PUT")

            var settings = {
                "url": urlapi + "api-our-service/" + id,
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
                    console.log(err2);
                    if (err2.our_service) {
                        $('#vc_our_service').text(err2.our_service)
                    } else {
                        $('#vc_our_service').text('')
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
                $('#vc_our_service').text('')
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
    $('#vu_our_service').text('')
    $('#fupdatetestimoni').trigger('reset')
    $('#vc_our_service').text('')
})

$(document).on('click', '.btnFormHapustestimoni', function() {
    Swal.fire({
        title: 'sure you want to delete the our service ? ',
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
                "url": urlapi + "api-our-service/" + $(this).data('id'),
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
