@extends('layouts.main')

@section('title', 'Website Identity')

@section('body')
<div class="forms-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion table-data">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h4 class="mb-0" data-toggle="collapse" data-target="#basic-form" aria-expanded="true" aria-controls="basic-form">
                                Website Identity
                                <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="basic-form" class="collapse show">
                            <div class="card-body">
                                <form action="{{route('website-identity.update', $identitywebsite->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Nama Website</h6>
                                            <input type="text" class="form-control  @error('name_website') is-invalid @enderror" placeholder="Name Website" id="name_website" name="name_website" value="{{ $identitywebsite->name_website }}">
                                            @error('name_website')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Logo</h6>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 d-none d-sm-block pr-md-0" style="padding-right: 0; max-height: 45px;">
                                                    <img src="{{ asset('/storage') . '/' . $identitywebsite->logo }}" class="img-thumbnail" id="logoPreview" alt="{{ $identitywebsite->name_website }}" style="height: 100%">
                                                </div>
                                                <div class="col-md-10 col-sm-9 pl-md-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="logo" id="logo">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>OG Title</h6>
                                            <input type="text" class="form-control  @error('og_title') is-invalid @enderror" placeholder="OG Title" name="og_title" value="{{ $identitywebsite->og_title }}">
                                            @error('og_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>OG Sitename</h6>
                                            <input type="text" class="form-control  @error('og_sitename') is-invalid @enderror" placeholder="OG Sitename" name="og_sitename" value="{{ $identitywebsite->og_sitename }}">
                                            @error('og_sitename')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>OG Description</h6>
                                            <input type="text" class="form-control  @error('og_description') is-invalid @enderror" placeholder="OG Description" name="og_description" value="{{ $identitywebsite->og_description }}">
                                            @error('og_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>OG Image</h6>
                                            <div class="row">
                                                <div class="col-md-2 col-md-2 col-sm-3 d-none d-sm-block pr-md-0" style="padding-right: 0;max-height: 45px;">
                                                    <img src="{{ asset('/storage') . '/' . $identitywebsite->og_image }}" class="img-thumbnail" id="ogPreview" alt="{{ $identitywebsite->name_website }}" style="height: 100%">
                                                </div>
                                                <div class="col-md-10 col-sm-9 pl-md-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="og_image" id="og_image">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Favicon</h6>
                                            <div class="row">
                                                <div class="col-md-2 col-md-2 col-sm-3 d-none d-sm-block pr-md-0" style="padding-right: 0; max-height: 45px;">
                                                    <img src="{{ asset('/storage') . '/' . $identitywebsite->favicon }}" class="img-thumbnail" id="faviconPreview" alt="{{ $identitywebsite->name_website }}" style="height: 100%">
                                                </div>
                                                <div class="col-md-10 col-sm-9 pl-md-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="favicon" id="favicon">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>URL</h6>
                                            <input type="text" class="form-control  @error('url') is-invalid @enderror" placeholder="URL" name="url" value="{{ $identitywebsite->url }}">
                                            @error('url')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Email</h6>
                                            <input type="text" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $identitywebsite->email }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Telepon</h6>
                                            <input type="text" class="form-control  @error('telepon') is-invalid @enderror" placeholder="Telepon" name="telepon" value="{{ $identitywebsite->telepon }}">
                                            @error('telepon')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Alamat</h6>
                                            <input type="text" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" value="{{ $identitywebsite->alamat }}">
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Facebook</h6>
                                            <input type="text" class="form-control  @error('facebook') is-invalid @enderror" placeholder="Facebook" name="facebook" value="{{ $identitywebsite->facebook }}">
                                            @error('facebook')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Twitter</h6>
                                            <input type="text" class="form-control  @error('twitter') is-invalid @enderror" placeholder="Twitter" name="twitter" value="{{ $identitywebsite->twitter }}">
                                            @error('twitter')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Instagram</h6>
                                            <input type="text" class="form-control  @error('instagram') is-invalid @enderror" placeholder="Instagram" name="instagram" value="{{ $identitywebsite->instagram }}">
                                            @error('instagram')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Meta Keyword</h6>
                                            <input type="text" class="form-control  @error('meta_keyword') is-invalid @enderror" placeholder="Metas Keyword" name="meta_keyword" value="{{ $identitywebsite->meta_keyword }}">
                                            @error('meta_keyword')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Meta Description</h6>
                                            <input type="text" class="form-control  @error('meta_description') is-invalid @enderror" placeholder="Meta Description" name="meta_description" value="{{ $identitywebsite->meta_description }}">
                                            @error('meta_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Title Header</h6>
                                            <input type="text" class="form-control  @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{ $identitywebsite->title }}">
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Content Header</h6>
                                            <input type="text" class="form-control  @error('content') is-invalid @enderror" placeholder="Content" name="content" value="{{ $identitywebsite->content }}">
                                            @error('content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Button Header</h6>
                                            <input type="text" class="form-control  @error('button') is-invalid @enderror" placeholder="Button" name="button" value="{{ $identitywebsite->button }}">
                                            @error('button')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 m-b-30 has-validation">
                                            <h6>Footer</h6>
                                            <input type="text" class="form-control  @error('footer') is-invalid @enderror" placeholder="Footer" name="footer" value="{{ $identitywebsite->footer }}">
                                            @error('footer')
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
