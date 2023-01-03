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
                            <span class="breadcrumb-item active">Wishlist</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- wishlist-area start -->
<div class="wishlist-area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove"><span class="nobr">Hapus</span></th>
                                        <th class="product-thumbnail">Gambar</th>
                                        <th class="product-name"><span class="nobr">Produk</span></th>
                                        <th class="product-price"><span class="nobr">Harga Per-unit </span></th>
                                        <th class="product-stock-stauts"><span class="nobr">Stok</span></th>
                                        <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($result as $item)
                                    <tr>
                                        <td class="product-remove"><a id="conf-delete" href="{{ route('wishlist.destroy',$item->product_code) }}">×</a></td>
                                        <td class="product-thumbnail"><a href="javascript:void(0);"><img src="{{ asset('storage/'.$item->product->image) }}"
                                            alt="Pict" /></a></td>
                                        <td class="product-name"><a href="javascript:void(0);">{{ $item->product->product_name }}</a></td>
                                        <td class="product-price"><span class="amount">Rp.{{ $item->product->price }}</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">
                                            @if ($item->product->stock > 0)
                                                Tersedia
                                            @else
                                                Stok Habis
                                            @endif
                                        </span>
                                        </td>
                                        <td class="product-add-to-cart"><a href="{{ route('cart.edit',$item->product_code) }}"> Add to Cart</a></td>
                                    </tr>
                                    @empty
                                        <P class="d-block text-center badge bg-secondary fs-4 rounded text-dark">Belum ada list wishlist yang tersedia!</P>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center" style="margin-top: 55px !important;">{{ $result->links() }}</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wishlist-area end -->
@endsection
