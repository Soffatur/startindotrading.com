$(document).on('click', '#testimoniinsertbtn', function(e) {
    e.preventDefault()
    var form = new FormData();
    form.append("name_number", $('#finserttestimoni input[name = "name_number"]').val());
    form.append("no_telp", $('#finserttestimoni input[name = "no_telp"]').val());

    var settings = {
        "url": urlapi + "api-identity-telp",
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
            if (err2.name_number) {
                $('#vu_name_number').text(err2.name_number)
            } else {
                $('#vu_name_number').text('')
            }
            if (err2.no_telp) {
                $('#vu_noTelp').text(err2.no_telp)
            } else {
                $('#vu_noTelp').text('')
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
        $('#vu_name_number').text('')
        $('#vu_noTelp').text('')
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
        "url": urlapi + "api-identity-telp/" + $(this).data('id'),
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
        $('#fupdatetestimoni input[name = "id_idenTelp"]').val(data2.id);
        $('#fupdatetestimoni input[name = "name_number"]').val(data2.name_number);
        $('#fupdatetestimoni input[name = "no_telp"]').val(data2.number);
    });
});

$(document).on('click', '#testimoniupdatebtn', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'sure you want to change identity telp ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            var id = $('#fupdatetestimoni input[name = "id_idenTelp"]').val();
            form.append("name_number", $('#fupdatetestimoni input[name = "name_number"]').val())
            form.append("no_telp", $('#fupdatetestimoni input[name = "no_telp"]').val())
            form.append("_method", "PUT")

            var settings = {
                "url": urlapi + "api-identity-telp/" + id,
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
                    if (err2.name_number) {
                        $('#vc_name_number').text(err2.name_number)
                    } else {
                        $('#vc_name_number').text('')
                    }
                    if (err2.no_telp) {
                        $('#vc_noTelp').text(err2.no_telp)
                    } else {
                        $('#vc_noTelp').text('')
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
                $('#vc_name_number').text('')
                $('#vc_noTelp').text('')
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
    $('#vu_name_number').text('')
    $('#vu_noTelp').text('')
    $('#fupdatetestimoni').trigger('reset')
    $('#vc_name_number').text('')
    $('#vc_noTelp').text('')
})

$(document).on('click', '.btnFormHapustestimoni', function() {
    Swal.fire({
        title: 'sure you want to delete the identity telp ? ',
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
                "url": urlapi + "api-identity-telp/" + $(this).data('id'),
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
