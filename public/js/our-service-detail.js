$(document).on('click', '#testimoniinsertbtn', function(e) {
    e.preventDefault()
    var form = new FormData();
    form.append("our_service", $('#finserttestimoni select[name = "our_service"]').val());
    form.append("detail_our_service", $('#finserttestimoni textarea[name = "detail_our_service"]').val());

    var settings = {
        "url": urlapi + "api-our-service-detail",
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
            console.log(err);
            if (err2.our_service) {
                $('#vu_our_service').text(err2.our_service)
            } else {
                $('#vu_our_service').text('')
            }
            if (err2.detail_our_service) {
                $('#vu_detail_our_service').text(err2.detail_our_service)
            } else {
                $('#vu_detail_our_service').text('')
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
        "url": urlapi + "api-our-service-detail/" + $(this).data('id'),
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
        $('#fupdatetestimoni input[name = "id_detailOurService"]').val(data2.id);
        $('#fupdatetestimoni select[name = "our_service"]').val(data2.our_service_id);
        $('#fupdatetestimoni textarea[name = "detail_our_service"]').val(data2.description);
    });
});

$(document).on('click', '#testimoniupdatebtn', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'sure you want to change detail our service ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            var id = $('#fupdatetestimoni input[name = "id_detailOurService"]').val();
            form.append("our_service", $('#fupdatetestimoni select[name = "our_service"]').val())
            form.append("detail_our_service", $('#fupdatetestimoni textarea[name = "detail_our_service"]').val())
            form.append("_method", "PUT")

            var settings = {
                "url": urlapi + "api-our-service-detail/" + id,
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
                    if (err2.detail_our_service) {
                        $('#vc_detail_our_service').text(err2.detail_our_service)
                    } else {
                        $('#vc_detail_our_service').text('')
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
                $('#vc_detail_our_service').text('')
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
    $('#vu_detail_our_service').text('')
    $('#fupdatetestimoni').trigger('reset')
    $('#vc_our_service').text('')
    $('#vc_detail_our_service').text('')
})

$(document).on('click', '.btnFormHapustestimoni', function() {
    Swal.fire({
        title: 'sure you want to delete the detail our service ? ',
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
                "url": urlapi + "api-our-service-detail/" + $(this).data('id'),
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
