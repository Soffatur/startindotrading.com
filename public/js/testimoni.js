$(document).on('click', '#testimoniinsertbtn', function(e) {
    e.preventDefault()
    var form = new FormData();
    var file = $('#finserttestimoni input[name = "photo"]')[0].files[0];
    form.append("name", $('#finserttestimoni input[name = "name"]').val().toLowerCase());
    form.append("position", $('#finserttestimoni input[name = "position"]').val());
    form.append("content", $('#finserttestimoni input[name = "content"]').val());
    form.append("photo", file);

    var settings = {
        "url": urlapi + "api-testimoni",
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
            if (err2.name) {
                $('#vc_name').text(err2.name)
            } else {
                $('#vc_name').text('')
            }
            if (err2.position) {
                $('#vc_position').text(err2.position)
            } else {
                $('#vc_position').text('')
            }
            if (err2.content) {
                $('#vc_content').text(err2.content)
            } else {
                $('#vc_content').text('')
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
        $('#vc_name').text('')
        $('#vc_position').text('')
        $('#vc_content').text('')
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
        "url": urlapi + "api-testimoni/" + $(this).data('id'),
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
        $('#fupdatetestimoni input[name = "id_testimoni"]').val(data2.id);
        $('#fupdatetestimoni input[name = "name"]').val(data2.name);
        $('#fupdatetestimoni input[name = "position"]').val(data2.position);
        $('#fupdatetestimoni input[name = "content"]').val(data2.content);
    });
});

$('.close').click(function(e) {
    $('#finserttestimoni').trigger('reset')
    $('#vc_name').text('')
    $('#vc_postion').text('')
    $('#vc_content').text('')
    $('#fupdatetestimoni').trigger('reset')
    $('#vu_name').text('')
    $('#vu_postion').text('')
    $('#vu_content').text('')
})

$(document).on('click', '#testimoniupdatebtn', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'sure you want to change testimoni ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            var id = $('#fupdatetestimoni input[name = "id_testimoni"]').val();
            var file = $('#fupdatetestimoni input[name = "photo"]')[0].files[0];
            form.append("name", $('#fupdatetestimoni input[name = "name"]').val())
            form.append("content", $('#fupdatetestimoni input[name = "content"]').val())
            form.append("position", $('#fupdatetestimoni input[name = "position"]').val())
            form.append("photo", file);
            form.append("_method", "PUT")

            var settings = {
                "url": urlapi + "api-testimoni/" + id,
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
                    if (err2.name) {
                        $('#vu_name').text(err2.name)
                    } else {
                        $('#vu_name').text('')
                    }
                    if (err2.position) {
                        $('#vu_position').text(err2.position)
                    } else {
                        $('#vu_position').text('')
                    }
                    if (err2.content) {
                        $('#vu_content').text(err2.content)
                    } else {
                        $('#vu_content').text('')
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

$(document).on('click', '.btnFormHapustestimoni', function() {
    Swal.fire({
        title: 'sure you want to delete the testimonial ? ',
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
                "url": urlapi + "api-testimoni/" + $(this).data('id'),
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
