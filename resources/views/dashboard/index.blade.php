@extends('dashboard.layouts.main')
@section('title','Dashboard')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Main</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
            <div class="card-body row justify-content-center">
                <div class="col-5 align-self-center">
                    <h4 class="mt-0 mb-2 font-20">{{ $jml_produk }}</h4>
                    <p class="mb-2 text-muted font-13 text-nowrap">Jumlah barang</p>
                </div>
                <div class="col-7 align-self-center"><span class="peity-line" data-width="100%"
                        data-peity='{ "fill": ["#b5f1e0"],"stroke": ["#0acf97"]}'
                        data-height="80">1,2,3,4,3,6,3,5,3,3,4,2</span></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
            <div class="card-body row justify-content-center">
                <div class="col-5 align-self-center">
                    <h4 class="mt-0 mb-2 font-20">8320</h4>
                    <p class="mb-2 text-muted font-13 text-nowrap">Total Customer</p>
                </div>
                <div class="col-7 align-self-center text-right"><span class="peity-line" data-width="100%"
                        data-peity='{ "fill": ["#d6d8f5"],"stroke": ["#777edd"]}'
                        data-height="80">0,3,6,3,4,2,6,1,8,4,4,2</span></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
            <div class="card-body row justify-content-center">
                <div class="col-5 align-self-center">
                    <h4 class="mt-0 mb-2 font-20">1840</h4>
                    <p class="mb-2 text-muted font-13 text-nowrap">Pesanan</p>
                </div>
                <div class="col-7 align-self-center"><span class="peity-line" data-width="100%"
                        data-peity='{ "fill": ["#fdebb5"],"stroke": ["#f9bc0b"]}'
                        data-height="80">2,4,7,3,5,3,6,3,4,3,2,1,2</span></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
            <div class="card-body row justify-content-center">
                <div class="col-5 align-self-center">
                    <h4 class="mt-0 mb-2 font-20">2501</h4>
                    <p class="mb-2 text-muted font-13 text-nowrap">Total Operator</p>
                </div>
                <div class="col-7 align-self-center"><span class="peity-bar"
                        data-peity='{ "fill": ["#ffd1e1", "#ffd1e1"]}' data-width="100%"
                        data-height="80">5,6,2,8,9,4,7,10,11,12,10,4,7,10</span></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="pb-3 mt-0">Tabel Produk</h5>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Kode</th>
                                <th>Produk</th>
                                <th>Merk</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/'.$item->image) }}" alt="Picture"
                                        style="max-width: 100px">
                                    </td>
                                    <td>{{ $item->product_code }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>{{ $item->stock }}</td>
                                </tr>
                            @empty
                                <p>Produk belum tersedia</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
