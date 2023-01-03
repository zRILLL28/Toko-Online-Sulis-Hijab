@extends('dashboard.layouts.main')
@section('title','Tambah Merk Produk')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Produk</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen Product</a></li>
                    <li class="breadcrumb-item active">Tambah Merk Produk</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Merk Produk</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">Form Tambah Merk Produk</h5>
                <p class="text-muted font-13 mb-4">Kamu dapat menambahkan merk produk sesuai dengan form yang telah tersedia
                    dan akan menampilkan di halaman User!</p>
                <form method="POST" action="{{ route('dashboard-merk.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"><label for="image">Gambar merk</label>
                        <input type="file" data-default-file="{{ old('image') }}" id="image"
                            name="image" accept=".png, .jpg, .jpeg" class="dropify" required>
                        <span class="font-13 text-muted">Format: .png,.jpg,.jpeg Size Maksimum: 5mb</span>
                        @error('image')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"><label for="merk">Nama Produk</label>
                        <input type="text" class="form-control" required id="merk"
                            placeholder="Ketikkan nama merk" name="merk"
                            value="{{ old('merk') }}">
                        <span class="font-13 text-muted">Contoh: Zoya</span>
                        @error('merk')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"><label for="description">Deskripsi Merk</label>
                        <div>
                            <textarea required id="description" name="description"
                                class="form-control summernote">{{ old('description') }}</textarea>
                        @error('description')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div><button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="javascript:window.history.go(-1);"
                                class="btn btn-outline-danger waves-effect ml-1">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end col -->
</div>
@endsection
