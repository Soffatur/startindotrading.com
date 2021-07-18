@extends('layouts.main')

@section('title', 'Paket EA')

@section('body')
<div class="tables-section">
    <div class="container-fluid">
        <div class="row">
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
                                        <th scope="col">No</th>
                                        <th scope="col">Name Deposit</th>
                                        <th scope="col">Deposit</th>
                                        <th scope="col">Low Risk</th>
                                        <th scope="col">Medium Risk</th>
                                        <th scope="col">High Risk</th>
                                        <th scope="col">Loss Limit</th>
                                        <th scope="col">Max Deposit</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paketeas as $paketea)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $paketea->name_deposit }}</td>
                                        <td>{{ $paketea->deposit }}</td>
                                        <td>{{ $paketea->low_risk }}</td>
                                        <td>{{ $paketea->medium_risk }}</td>
                                        <td>{{ $paketea->high_risk }}</td>
                                        <td>{{ $paketea->loss_limit }}</td>
                                        <td>{{ $paketea->max_deposit }}</td>
                                        <td>
                                            <a class='btn btn-warning editpaketea' href='javascript:void(0)' data-id="{{ $paketea->id }}" data-toggle="modal" data-target="#ubahpaketea">Edit</a>
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

<div class="modal fade" id="ubahpaketea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Paket EA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="fupdatepaketea">
                    <input type="hidden" name="id_paketea">
                    <div class="form-group">
                        <label for="name_deposit">Name Deposit</label>
                        <input type="text" class="form-control" name="name_deposit" placeholder="Name Deposit" autocomplete="off">
                        <small class="text-danger" id="vu-namedeposit"></small>
                    </div>
                    <div class="form-group">
                        <label for="deposit">Deposit</label>
                        <input type="text" class="form-control" name="deposit" placeholder="Deposit" autocomplete="off">
                        <small class="text-danger" id="vu-deposit"></small>
                    </div>
                    <div class="form-group">
                        <label for="low_risk">Low Risk</label>
                        <input type="text" class="form-control" name="low_risk" placeholder="Low Risk" autocomplete="off">
                        <small class="text-danger" id="vu-lowrisk"></small>
                    </div>
                    <div class="form-group">
                        <label for="medium_risk">Medium Risk</label>
                        <input type="text" class="form-control" name="medium_risk" placeholder="Medium Risk" autocomplete="off">
                        <small class="text-danger" id="vu-mediumrisk"></small>
                    </div>
                    <div class="form-group">
                        <label for="high_risk">High Risk</label>
                        <input type="text" class="form-control" name="high_risk" placeholder="Medium Risk" autocomplete="off">
                        <small class="text-danger" id="vu-highrisk"></small>
                    </div>
                    <div class="form-group">
                        <label for="loss_limit">Loss Limit</label>
                        <input type="text" class="form-control" name="loss_limit" placeholder="Loss Limit" autocomplete="off">
                        <small class="text-danger" id="vu-losslimit"></small>
                    </div>
                    <div class="form-group">
                        <label for="max_deposit">Max Deposit</label>
                        <input type="text" class="form-control" name="max_deposit" placeholder="Max Deposit" autocomplete="off">
                        <small class="text-danger" id="vu-maxdeposit"></small>
                    </div>
                    <div class="form-group" id="fprocessupdatepaketea">
                        <button type="submit" class="btn btn-info btn-block" id="paketeaupdatebtn"><i class="fas fa-feather-alt"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
