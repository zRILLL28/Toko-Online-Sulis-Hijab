@extends('dashboard.layouts.main')
@section('title','Edit Produk')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Produk</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen Product</a></li>
                    <li class="breadcrumb-item active">Edit Produk</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Produk</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">Form Edit Produk</h5>
                <p class="text-muted font-13 mb-4">Kamu dapat merubah produk sesuai dengan form yang telah tersedia
                    dan akan menampilkan di halaman User!</p>
                <form method="POST" action="{{ route('dashboard-product.update',$product_code) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group"><label for="image">Foto Produk</label>
                        <input type="file" data-default-file="{{ asset('storage/'.$product['image']) }}" id="image"
                            name="image" accept=".png, .jpg, .jpeg" class="dropify">
                        <span class="font-13 text-muted">Format: .png,.jpg,.jpeg Size Maksimum: 5mb</span>
                        @error('image')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"><label for="product_code">Kode Produk</label>
                        <input type="text" class="form-control" id="product_code" name="product_code" required
                            placeholder="Ketikkan kode produkmu"
                            value="{{ old('product_code', $product_code) }}">
                        <span class="font-13 text-muted">Contoh: 3201 atau pr-3201</span>
                        @error('product_code')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"><label for="product_name">Nama Produk</label>
                        <input type="text" class="form-control" required id="product_name"
                            placeholder="Ketikkan nama produkmu" name="product_name"
                            value="{{ old('product_name', $product['product_name']) }}">
                        <span class="font-13 text-muted">Contoh: Kerudung Segi Empat</span>
                        @error('product_name')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk Produk</label>
                        <select class="custom-select" required name="merk" id="merk">
                            @foreach ($merk as $item)
                                @if($item->merk === old('merk',$item->merk))
                                    <option selected value="{{ $item->merk }}">{{ $item->merk }}</option>
                                @else
                                    <option value="{{ $item->merk }}">{{ $item->merk }}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Silahkan pilih</div>
                        <span class="font-13 text-muted">Silahkan pilih merk</span>
                        @error('merk')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="stock">Jumlah Stok</label>
                        <input id="stock" type="text" id="stock" name="stock" required
                            value="{{ old('stock',$product['stock']) }}">
                        <span class="font-13 text-muted">Contoh: 100</span>
                        @error('stock')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <label for="price">Harga Produk</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input data-parsley-type="digits" type="number" class="form-control" id="price" name="price"
                            value="{{ old('price',$product->price) }}" placeholder="Masukkan harga produk" required>
                    </div>
                    <span class="font-13 text-muted">Contoh: 25000</span>
                    @error('price')
                        <span role="alert">
                            <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                        </span>
                    @enderror
                    <div class="form-group"><label for="description">Deskripsi Produk</label>
                        <div>
                            <textarea required id="description" name="description"
                                class="form-control summernote">{{ old('description', $product['description']) }}</textarea>
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
<!-- ========== Start validasi inputan stock ========== -->
<script>
    var inputEl = document.getElementById('stock');
    var goodKey = '0123456789+- ';

    var checkInputTel = function (e) {
        var key = (typeof e.which == "number") ? e.which : e.keyCode;
        var start = this.selectionStart,
            end = this.selectionEnd;

        var filtered = this.value.split('').filter(filterInput);
        this.value = filtered.join("");

        /* Prevents moving the pointer for a bad character */
        var move = (filterInput(String.fromCharCode(key)) || (key == 0 || key == 8)) ? 0 : 1;
        this.setSelectionRange(start - move, end - move);
    }

    var filterInput = function (val) {
        return (goodKey.indexOf(val) > -1);
    }

    inputEl.addEventListener('input', checkInputTel);

</script>
<!-- ========== End validasi inputan telp ========== -->
@endsection
