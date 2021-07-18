@extends('layouts.main')

@section('title', 'Testimoni')

@section('body')
<div class="tables-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ml-auto mb-2">
                <button class="btn btn-success" data-toggle="modal" data-target="#btnFormTestimoni"><i class="fa fa-plus"></i> Create Testimoni</button>
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
                                        <th scope="col" width="15%">Name</th>
                                        <th scope="col" width="15%">position</th>
                                        <th scope="col" width="45%">content</th>
                                        <th scope="col" width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonis as $testimoni)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $testimoni->name }}</td>
                                        <td>{{ $testimoni->position }}</td>
                                        <td>{{ $testimoni->content }}</td>
                                        <td>
                                            <a class='btn btn-warning edittestimoni' href='javascript:void(0)' data-id="{{ $testimoni->id }}" data-toggle="modal" data-target="#ubahtestimoni">Edit</a>
                                            <a href="javascript:void(0)" data-id="{{ $testimoni->id }}"  class="btn btn-sm btn-danger btnFormHapustestimoni"> Hapus</a>
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

<div class="modal fade" id="btnFormTestimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">create testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="finserttestimoni">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
                        <small class="text-danger" id="vc_name"></small>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Position" autocomplete="off">
                        <small class="text-danger" id="vc_position"></small>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Content" autocomplete="off">
                        <small class="text-danger" id="vc_content"></small>
                    </div>
                    <div class="form-group">
                        <label for="photo">Image</label>
                        <input type="file" class="form-control" name="photo" placeholder="Image" autocomplete="off">
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
                <h5 class="modal-title" id="exampleModalLabel">Update Testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="fupdatetestimoni">
                    <input type="hidden" name="id_testimoni">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
                        <small class="text-danger" id="vu_name"></small>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Position" autocomplete="off">
                        <small class="text-danger" id="vu_position"></small>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Content" autocomplete="off">
                        <small class="text-danger" id="vu_content"></small>
                    </div>
                    <div class="form-group">
                        <label for="photo">Image</label>
                        <input type="file" class="form-control" name="photo" placeholder="Image" autocomplete="off">
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
