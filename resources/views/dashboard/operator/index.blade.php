@extends('dashboard.layouts.main')
@section('title','Tabel Operator')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen User</a></li>
                    <li class="breadcrumb-item active">Tabel Operator</li>
                </ol>
            </div>
            <h4 class="page-title">Tabel Operator</h4>
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
<a href="#" class="btn btn-primary mb-3">Tambah Operator</a>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="pb-3 mt-0">Tabel Operator</h5>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr class="text-center font-weight-bold">
                                <th>No</th>
                                <th>Image</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Telp</th>
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
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td class="d-flex justify-content-between">
                                    <a href="#"><i
                                            class="mdi mdi-lead-pencil border p-1 rounded tippy-btn" title="Edit operator"
                                            data-tippy-placement="top"></i></a>
                                    <a href="#" id="conf-delete"><i class="dripicons-trash border p-1 rounded tippy-btn"
                                            title="Hapus operator" data-tippy-placement="top"></i></a>
                                </td>
                            </tr>
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
{{-- Modal --}}
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second
                    modal</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hide this modal and show the first with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                    first</button>
            </div>
        </div>
    </div>
</div>
@endsection
