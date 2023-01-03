@extends('apps.layouts.main')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area"
    style="background: rgba(0, 0, 0, 0) url(user-asset/images/bg/background.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Shop Pages</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Checkout</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Gambar</th>
                                <th class="product-name">Produk</th>
                                <th class="product-price">Harga Per-unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($result as $item)
                            <tr>
                                <td class="product-thumbnail"><a href="javascript:void(0);"><img
                                            src="{{ asset('storage/'.$item->product->image) }}" alt="product img" /></a>
                                </td>
                                <td class="product-name"><a
                                        href="javascript:void(0);">{{ $item->product->product_name }}</a></td>
                                <td class="product-price"><span class="amount">Rp.{{ $item->price }}</span></td>
                            </tr>
                            @empty
                            <P class="d-block text-center badge bg-secondary fs-4 rounded text-dark">Kamu belum belanja!
                            </P>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center" style="margin-top: 55px !important;">{{ $result->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
@endsection
