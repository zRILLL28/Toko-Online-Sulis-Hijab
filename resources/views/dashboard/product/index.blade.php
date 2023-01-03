@extends('dashboard.layouts.main')
@section('title','Tabel Produk')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Produk</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen Produk</a></li>
                    <li class="breadcrumb-item active">Tabel Produk</li>
                </ol>
            </div>
            <h4 class="page-title">Tabel Produk</h4>
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
<a href="{{ route('dashboard-product.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
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
                                <th>Stok</th>
                                <th>Tanggal Ditambahkan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($result as $item)
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
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, DD MMMM Y') }}</td>
                                <td class="d-flex justify-content-between">
                                    <a href="{{ $item->product_code }}" data-toggle="modal" data-target="#r{{ $item->product_code }}"><i
                                            class="mdi mdi-equal-box border p-1 rounded tippy-btn" title="Selengkapnya"
                                            data-tippy-placement="top"></i></a>
                                    <a href="{{ route('dashboard-product.edit', $item->product_code) }}"><i
                                            class="mdi mdi-lead-pencil border p-1 rounded tippy-btn" title="Edit produk"
                                            data-tippy-placement="top"></i></a>
                                    <a href="{{ route('dashboard-product.destroy', $item->product_code) }}" id="conf-delete"><i class="dripicons-trash border p-1 rounded tippy-btn"
                                            title="Hapus produk" data-tippy-placement="top"></i></a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="r{{ $item->product_code }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('storage/'.$item->image) }}" alt="Picture" class="mx-auto d-block mb-3"
                                        style="max-width: 300px">
                                            {!! $item->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p>Tidak ada produk</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
