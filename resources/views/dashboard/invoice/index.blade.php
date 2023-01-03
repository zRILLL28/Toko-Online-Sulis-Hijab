@extends('dashboard.layouts.main')
@section('title','Tabel Invoice')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Produk</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen Produk</a></li>
                    <li class="breadcrumb-item active">Tabel Invoice</li>
                </ol>
            </div>
            <h4 class="page-title">Tabel Invoice</h4>
        </div>
    </div>
</div>
@if ($message = session('success'))
<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    <i class="mdi mdi-check-circle mr-2"></i> {{ $message }}
</div>
@endif
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="pb-3 mt-0">Tabel Produk</h5>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr class="text-center font-weight-bold">
                                <th>No</th>
                                <th>Image</th>
                                <th>Kode</th>
                                <th>Produk</th>
                                <th>Merk</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($result as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$item->product->image) }}" alt="Picture"
                                        style="max-width: 100px">
                                </td>
                                <td>{{ $item->product_code }}</td>
                                <td>{{ $item->product->product_name }}</td>
                                <td>{{ $item->product->merk }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, DD MMMM Y') }}</td>
                            </tr>
                            @empty
                                <p>Tidak ada riwayat</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
