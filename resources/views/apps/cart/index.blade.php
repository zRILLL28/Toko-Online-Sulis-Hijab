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
                            <span class="breadcrumb-item active">Cart</span>
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
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Gambar</th>
                                    <th class="product-name">Produk</th>
                                    <th class="product-price">Harga Per-unit</th>
                                    <th class="product-quantity">Banyak</th>
                                    <th class="product-subtotal">Sub Total</th>
                                    <th class="product-remove">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($result as $item)
                                <tr>
                                    <td class="product-thumbnail"><a href="javascript:void(0);"><img
                                                src="{{ asset('storage/'.$item->product->image) }}"
                                                alt="product img" /></a></td>
                                    <td class="product-name"><a
                                            href="javascript:void(0);">{{ $item->product->product_name }}</a></td>
                                    <td class="product-price"><span class="amount">Rp.{{ $item->product->price }}</span>
                                    </td>
                                    <td class="product-quantity">{{ $brg[] = $item->qty }}</td>
                                    <td class="product-subtotal">Rp.{{ $total[] = $item->product->price * $item->qty }}
                                    </td>
                                    <td class="product-remove"><a id="conf-delete"
                                            href="{{ route('cart.destroy', $item->product_code) }}">X</a></td>
                                </tr>
                                @empty
                                <P class="d-block text-center badge bg-secondary fs-4 rounded text-dark">Keranjangmu
                                    masih kosong!</P>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="buttons-cart">
                                <a href="{{ route('shop.index') }}">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 ">
                            <div class="cart_totals">
                                <h2>Cart Totals</h2>
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Total barang</th>
                                            <td><span class="amount">@isset($brg)
                                                    {{ $t = array_sum($brg) }}
                                                    @else
                                                    0
                                                    @endisset buah</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <td></td>
                                            <td>
                                                <p><a class="shipping-calculator-button" href="javascript:void(0);">Calculate Shipping</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">Rp.
                                                        @isset($total)
                                                        {{ $t = array_sum($total) }}
                                                        @else
                                                        0
                                                        @endisset
                                                    </span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    @isset($t)
                                    <a href="{{ route('checkout.edit',$t) }}">Checkout</a>
                                    @else
                                    <a href="javascript:void(0);">Checkout</a>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->

@endsection
