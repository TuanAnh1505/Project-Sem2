@extends('layouts.app')

@section('content')
<div class="container">
    <div class="contai">
        <div class="box">
            <img src="{{ asset('picture/' . $product->ImageProduct) }}" alt="">
            <p style="text-transform: uppercase;">{{ $product->ProductName }}</p>
            <p style="color: #c00a27;" id="Price">{{ number_format($product->Price, 0, ',', '.') }} VND</p>
            <div class="size">
                @if ($product->CategoryID == 1)
                    <div class="tensz">
                        Size
                    </div> <br>
                    <div class="chon_size" style="margin-left: 30px;">
                        <a onclick="Gia_spS()" id="color_a_S" onmouseover="">M</a>
                        <a onclick="Gia_spM()" id="color_a_M" onmouseover="">S</a>
                        <a onclick="Gia_spL()" id="color_a_L" onmouseover="">L</a>
                    </div>
                @endif
            </div>
            <button><a class="muahang" href="{{ route('product.show', $product->ProductID) }}">Mua hàng</a></button>
        </div>
        <div class="box_white">
            <div class="tt_chi_tiet">
                <p class="tensp">{{ $product->ProductName }}</p>
                <div class="thanh_phan">
                    <p>Thành Phần</p>
                    <span>{{ $product->ttsp }}</span>
                </div>
                @if ($product->CategoryID == 1)
                    <div class="kt_gia">
                        <div class="gia">
                            <img src="{{ asset('picture/icon-P-S.png') }}" alt="">
                            <span>Size S / 20cm / 90.000đ</span>
                        </div>
                        <div class="gia">
                            <img src="{{ asset('picture/icon-P-M.png') }}" alt="">
                            <span>Size M / 24cm / 110.000đ</span>
                        </div>
                        <div class="gia">
                            <img src="{{ asset('picture/icon-P-L.png') }}" alt="">
                            <span>Size L / 29cm / 150.000đ</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
