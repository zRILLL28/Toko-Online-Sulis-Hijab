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
                        <h2 class="bradcaump-title">About</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">About</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Our Store Area -->
<section class="htc__store__area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section__title section__title--2 text-center">
                    <h2 class="title__line">Welcome To Sulis Hijab</h2>
                    <p>Sulis hijab merupakan sebuah toko kerudung yang beroperasi di Pasar Johar, Karawang. Sulis hijab menyediakan berbagai macam koleksi dari merek-merek kerudung ternama di Indonesia untuk semua tipe kepribadian perempuan. Komitmen kami adalah memberikan pengalaman belanja online yang menyenangkan, mudah, dan terpercaya melalui koleksi baru dan penawaran spesial setiap harinya.</p>
                </div>
                <div class="store__btn">
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Store Area -->
@endsection
