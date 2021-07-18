@extends('layouts.main')

@section('title', 'Identitas Telepon')

@section('body')
<div class="tables-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ml-auto mb-2">
                <button class="btn btn-success" data-toggle="modal" data-target="#btnFormIdentityTelp"><i class="fa fa-plus"></i> Create Number Telp</button>
            </div>
            <div class="col-12">
                <div class="accordion table-data">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h4 class="mb-0" data-toggle="collapse" data-target="#table-one" aria-expanded="true" aria-controls="table-one">
                                <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="table-one" class="collapse show table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th scope="col" width="5%">No</th>
                                        <th scope="col" width="15%">Name Number</th>
                                        <th scope="col" width="15%">No Telp</th>
                                        <th scope="col" width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($identityTelp as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name_number }}</td>
                                        <td>{{ $row->number }}</td>
                                        <td>
                                            <a class='btn btn-warning edittestimoni' href='javascript:void(0)' data-id="{{ $row->id }}" data-toggle="modal" data-target="#ubahtestimoni">Edit</a>
                                            <a href="javascript:void(0)" data-id="{{ $row->id }}"  class="btn btn-sm btn-danger btnFormHapustestimoni"> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="btnFormIdentityTelp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">create Identitas Telepon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="finserttestimoni">
                    <div class="form-group">
                        <label for="name_number">Name Number</label>
                        <input type="text" class="form-control" name="name_number" placeholder="Name Number" autocomplete="off">
                        <small class="text-danger" id="vu_name_number"></small>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp</label>
                        <input type="number" class="form-control" name="no_telp" placeholder="No Telp" autocomplete="off">
                        <small class="text-info">contoh : 62831xxxxx</small>
                        <small class="text-danger" id="vu_noTelp"></small>
                    </div>
                    <div class="form-group" id="fprocessinserttestimoni">
                        <button type="submit" class="btn btn-info btn-block" id="testimoniinsertbtn"><i class="fas fa-feather-alt"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahtestimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Identitas Telepon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="fupdatetestimoni">
                    <input type="hidden" name="id_idenTelp">
                    <div class="form-group">
                        <label for="name_number">Name Number</label>
                        <input type="text" class="form-control" name="name_number" placeholder="Name Number" autocomplete="off">
                        <small class="text-danger" id="vc_name_number"></small>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="No Telp" autocomplete="off">
                        <small class="text-info">contoh : 62831xxxxx</small>
                        <small class="text-danger" id="vc_noTelp"></small>
                    </div>
                    <div class="form-group" id="fprocessupdatetestimoni">
                        <button type="submit" class="btn btn-info btn-block" id="testimoniupdatebtn"><i class="fas fa-feather-alt"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
