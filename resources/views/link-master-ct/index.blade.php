@extends('layouts.main')

@section('title', 'Link Master CT')

@section('body')
<div class="forms-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion table-data">
                    <div class="card rounded-0">
                        <div class="card-header">
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <h4 class="mb-0" data-toggle="collapse" data-target="#basic-form" aria-expanded="true" aria-controls="basic-form">
                                Link Master CT
                                <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="basic-form" class="collapse show">
                            <div class="card-body">
                                <form action="{{route('link-master-ct.update', $linkmastercts->id)}}" method="post">
                                @method('patch')
                                {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col-lg-6 col-md-6 m-b-30 has-validation">
                                            <h6>Link Master CT</h6>
                                            <input type="text" class="form-control @error('link_master_ct') is-invalid @enderror" name="link_master_ct" placeholder="Link Master CT" value="{{ $linkmastercts->link_master_ct }}">
                                            @error('link_master_ct')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6 col-md-6 m-b-30 has-validation">
                                            <h6>Link Master CT 2</h6>
                                            <input type="text" class="form-control @error('link_master_ct2') is-invalid @enderror" name="link_master_ct2" placeholder="Link Master CT" value="{{ $linkmastercts2->link_master_ct }}">
                                            @error('link_master_ct2')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="" id="">
                                        <button type="submit" class="btn btn-info mt-2" id=""><i class="fas fa-feather-alt"></i> Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
