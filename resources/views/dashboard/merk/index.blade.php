@extends('dashboard.layouts.main')
@section('title','Merk Produk')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Produk</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen Produk</a></li>
                    <li class="breadcrumb-item active">Merk Produk</li>
                </ol>
            </div>
            <h4 class="page-title">Merk Produk</h4>
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
<a href="{{ route('dashboard-merk.create') }}" class="btn btn-primary mb-3">Tambah Merk</a>

<div class="row">
    @forelse ($result as $item)
        <div class="col-md-12 col-xl-4">
            <div class="card"><img class="card-img-top img-fluid" src="{{ asset('storage/'. $item['image']) }}"
                    alt="Card image cap">
                <div class="card-body p-3">
                    <blockquote class="blockquote mb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mt-0">{{ $item['merk'] }}</h4>
                            <div class="btn-group dropright mo-mb-2" style="margin-top: -9px">
                                <a class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h text-muted"></i>
                                </a>
                                <div class="badge-icon">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item tippy-btn" href="{{ route('dashboard-merk.edit', $item->id) }}" title="Edit merk"
                                            data-tippy-placement="top"><i
                                            class="mdi mdi-lead-pencil border p-1 rounded"></i> Edit merk</a>
                                        <a class="dropdown-item tippy-btn" href="{{ route('dashboard-merk.destroy', $item->id) }}" id="conf-delete" title="Hapus merk" data-tippy-placement="top"><i class="dripicons-trash border p-1 rounded"></i> Hapus merk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-muted font-13">{!! $item['description'] !!} <cite><small>{{ $item->created_at->diffForHumans() }}</small></cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    @empty
        <p>Merk tidak tersedia</p>
    @endforelse
</div>
@endsection
