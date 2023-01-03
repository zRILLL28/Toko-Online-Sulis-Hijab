@extends('apps.layouts.main')
@section('content')
<!-- Start Slider Area -->
<div class="slider__container slider--one">
    <div class="slider__activation__wrap owl-carousel owl-theme">
        <!-- Start Single Slide -->
        <div class="slide slider__full--screen"
            style="background: rgba(0, 0, 0, 0) url(user-asset/images/slider/bg/slider-1.png) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <div class="slider__inner">
                            <h1>New Product <span class="text--theme">Collection</span></h1>
                            <div class="slider__btn">
                                <a class="htc__btn" href="{{ route('shop.index') }}">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide slider__full--screen"
            style="background: rgba(0, 0, 0, 0) url(user-asset/images/slider/bg/slider-2.png) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider__inner">
                            <h1>New Product <span class="text--theme">Collection</span></h1>
                            <div class="slider__btn">
                                <a class="htc__btn" href="{{ route('shop.index') }}">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
</div>
<!-- Start Slider Area -->
<!-- Start Our Product Area -->
<section class="htc__product__area ptb--130 bg__white">
    <div class="container">
        <div class="htc__product__container">
            <!-- Start Product MEnu -->
            <div class="row">
                <div class="col-md-12">
                    <div class="product__menu">
                        <button data-filter="*" class="is-checked">All</button>
                        @forelse ($merk as $m)
                        <button data-filter=".{{ $m->merk }}">{{ $m->merk }}</button>
                        @empty
                        <p class="text-center">Merk produk belum tersedia!</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- End Product MEnu -->
            <div class="row product__list">
                @forelse ($produk as $item)
                <!-- Start Single Product -->
                <div class="col-md-3 single__pro col-lg-3 col-md-4 {{ $item->merk }} col-sm-12">
                    <div class="product foo">
                        <div class="product__inner">
                            <div class="pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="product images">
                                </a>
                            </div>
                            <div class="product__hover__info">
                                <ul class="product__action">
                                    <li><a data-toggle="modal" data-target="#p{{ $item->product_code }}"
                                            title="selengkapnya" class="quick-view modal-view detail-link"
                                            href="#"><span class="ti-plus"></span></a></li>
                                    <li><a title="Add TO Cart" href="{{ route('cart.edit',$item->product_code) }}"><span
                                                class="ti-shopping-cart"></span></a></li>
                                </ul>
                            </div>
                            <div class="add__to__wishlist">
                                <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart"
                                    href="{{ route('wishlist.edit', $item->product_code) }}"><span class="ti-heart
                                    @foreach($wishlist as $w)
                                        @if($w->product_code == $item->product_code)
                                            text-danger
                                        @endif
                                    @endforeach
                                    "></span></a>
                            </div>
                        </div>
                        <div class="product__details">
                            <div class="d-flex justify-content-between">
                                <h2><a href="javacript:void(0);">{{ $item->product_name }}</a></h2>
                                <h2><a href="javacript:void(0);"><strong>{{ $item->merk }}</strong></a></h2>
                            </div>
                            <ul class="product__price">
                                <li class="new__price">Rp.{{ $item->price }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
                @empty
                <p class="text-center">Produk Belum tersedia</p>
                @endforelse
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 55px !important;">{{ $produk->links() }}</div>
</section>

<!-- End Our Product Area -->
@forelse ($produk as $item)
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="p{{ $item->product_code }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal__container" role="document">
            <div class="modal-content">
                <div class="modal-header modal__header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- Start product images -->
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="big images" src="{{ asset('storage/'.$item->image) }}">
                            </div>
                        </div>
                        <!-- end product images -->
                        <div class="product-info">
                            <h1>{{ $item->product_name }}</h1>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="new-price">Rp.{{ $item->price }}</span>
                                </div>
                            </div>
                            <div class="quick-desc">
                                {!! $item->description !!}
                            </div>
                            <div class="addtocart-btn">
                                <a href="{{ route('cart.edit',$item->product_code) }}">Add to cart</a>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->
@empty
<p>Produk belum tersedia!</p>
@endforelse
@endsection
