<style>
    .stext-105 {
        color: black;
        font-weight: bold;
    }
</style>



<div class="row isotope-grid">
    @foreach($products as $key => $product)
    
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-pic hov-img0">
                    <img src="{{ asset($product->thumb) }}" alt="{{ $product->name }}">
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l text-center" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                        class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="font-size:20px; color: #f2931f; font-weight: bold;">
                            {{ $product->name }}
                        </a>

                        <span class="stext-105 cl3" style="font-size:16px;">
                            {!! \App\Helpers\Helper::price($product->price, $product->price_sale) !!}
                            <a>.VND</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
