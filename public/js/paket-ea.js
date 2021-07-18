$(document).on('click', '.editpaketea', function() {
    var form = new FormData();

    var settings = {
        "url": urlapi + "api-paket-ea/" + $(this).data('id'),
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
        $('#fupdatepaketea input[name = "id_paketea"]').val(data2.id);
        $('#fupdatepaketea input[name = "name_deposit"]').val(data2.name_deposit);
        $('#fupdatepaketea input[name = "deposit"]').val(data2.deposit);
        $('#fupdatepaketea input[name = "low_risk"]').val(data2.low_risk);
        $('#fupdatepaketea input[name = "medium_risk"]').val(data2.medium_risk);
        $('#fupdatepaketea input[name = "high_risk"]').val(data2.high_risk);
        $('#fupdatepaketea input[name = "loss_limit"]').val(data2.loss_limit);
        $('#fupdatepaketea input[name = "max_deposit"]').val(data2.max_deposit);
    });
});

$('.close').click(function(e) {
    $('#fupdatepaketea').trigger('reset')
    $('#vu-namedeposit').text('')
    $('#vu-deposit').text('')
    $('#vu-lowrisk').text('')
    $('#vu-mediumrisk').text('')
    $('#vu-highrisk').text('')
    $('#vu-losslimit').text('')
    $('#vu-maxdeposit').text('')
})

$(document).on('click', '#paketeaupdatebtn', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'sure you want to change the Ea package link ? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No!'
    }).then((result) => {
        if (result.value) {
            var form = new FormData();
            var id = $('#fupdatepaketea input[name = "id_paketea"]').val();
            form.append("name_deposit", $('#fupdatepaketea input[name = "name_deposit"]').val())
            form.append("deposit", $('#fupdatepaketea input[name = "deposit"]').val())
            form.append("low_risk", $('#fupdatepaketea input[name = "low_risk"]').val())
            form.append("medium_risk", $('#fupdatepaketea input[name = "medium_risk"]').val())
            form.append("high_risk", $('#fupdatepaketea input[name = "high_risk"]').val())
            form.append("loss_limit", $('#fupdatepaketea input[name = "loss_limit"]').val())
            form.append("max_deposit", $('#fupdatepaketea input[name = "max_deposit"]').val())
            form.append("_method", "PUT")

            var settings = {
                "url": urlapi + "api-paket-ea/" + id,
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
                    if (err2.name_deposit) {
                        $('#vu-namedeposit').text(err2.name_deposit)
                    } else {
                        $('#vu-namedeposit').text('')
                    }
                    if (err2.deposit) {
                        $('#vu-deposit').text(err2.deposit)
                    } else {
                        $('#vu-deposit').text('')
                    }
                    if (err2.low_risk) {
                        $('#vu-lowrisk').text(err2.low_risk)
                    } else {
                        $('#vu-lowrisk').text('')
                    }
                    if (err2.medium_risk) {
                        $('#vu-mediumrisk').text(err2.medium_risk)
                    } else {
                        $('#vu-mediumrisk').text('')
                    }
                    if (err2.high_risk) {
                        $('#vu-highrisk').text(err2.high_risk)
                    } else {
                        $('#vu-highrisk').text('')
                    }
                    if (err2.loss_limit) {
                        $('#vu-losslimit').text(err2.loss_limit)
                    } else {
                        $('#vu-losslimit').text('')
                    }
                    if (err2.max_deposit) {
                        $('#vu-maxdeposit').text(err2.max_deposit)
                    } else {
                        $('#vumaxdeposit').text('')
                    }
                    $('#fprocessupdatepaketea').html("<button type='submit' class='btn btn-info btn-block' id='paketeaupdatebtn'><i class='fas fa-feather-alt'></i> Simpan</button>");
                },
                "beforeSend": function() {
                    $('#fprocessupdatepaketea').html("<button class='btn btn-primary btn-block' type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>  Data sedang dikirim...</button>");
                },
                "success": function(data) {
                    $('#fprocessupdatepaketea').html("<button type='submit' class='btn btn-info btn-block' id='paketeaupdatebtn'><i class='fas fa-feather-alt'></i> Simpan</button>");
                }
            };

            $.ajax(settings).done(function(response) {
                var data1 = JSON.parse(response)
                $('#fupdatepaketea').trigger('reset')
                $('#vu-namedeposit').text('')
                $('#vu-deposit').text('')
                $('#vu-lowrisk').text('')
                $('#vu-mediumrisk').text('')
                $('#vu-highrisk').text('')
                $('#vu-losslimit').text('')
                $('#vu-maxdeposit').text('')
                $('#ubahpaketea').click();
                location.reload();
                // var oTable = $('#sindexmanagementcustomershop').DataTable()
                // oTable.draw(false)
                Swal.fire(
                    data1.message,
                    'silahkan klik tombol ok!',
                    'success'
                )
            });
        }
    })
})
