@extends('layouts.main')

@section('title', 'About')

@section('body')
<div class="forms-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion table-data">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h4 class="mb-0" data-toggle="collapse" data-target="#basic-form" aria-expanded="true" aria-controls="basic-form">
                                About
                                <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="basic-form" class="collapse show">
                            <div class="card-body">
                                <form action="{{route('about.update', $about->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col-md-12 m-b-30 has-validation">
                                            <h6>Description</h6>
                                            <textarea  class="@error('description') is-invalid @enderror" placeholder="Description About.." id="description" name="description">{{ $about->description }}</textarea>
                                            <small class="font-italic text-info">data harus di isi, jika tidak di isi, maka data tidak akan disimpan</small>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="" id="">
                                        <button type="submit" class="btn btn-info mt-2" id=""><i class="fas fa-feather-alt"></i> Simpan</button>
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
