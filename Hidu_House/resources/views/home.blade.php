@extends('main')

@section('content')
    <!-- Slider -->
    <style>
    .item-slick1 {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 50vh; /* Adjust height as needed */
        /* background-color: #000; Fallback background color */
        margin-top: 10vh;
    }

    .item-slick1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        
    }



</style>

<div class="wrap-slick1">
    <div class="slick1">
        @foreach($sliders as $slider)
            <div class="item-slick1" style="background-image: url({{ $slider->thumb }});">
                <div class="container">
                    <div class="flex-col-l-m p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                        </div>
                       
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <!-- Banner -->
  


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container ">
            <div class="p-b-10 p-t-30 text-center">
                <h5 class="ltext-103 c12">
                    Product Overview
                </h5>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10" style="justify-content: center; width: 100%;">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*" style="font-size: 20px; color: #f2931f; font-weight: bold; text-decoration: none !important;">
                        All Products
                    </button>
                </div>
            </div>


            <div id="loadProduct">
                @include('products.list')
            </div>


            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
                <input type="hidden" value="1" id="page">
                <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" style="color: white;">
                    Load More
                </a>
            </div>
        </div>
    </section>
@endsection
