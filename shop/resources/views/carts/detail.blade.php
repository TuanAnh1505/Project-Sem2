@extends('main')

<style>
    /* .new-container {
        margin-top: 10vh;
        margin-bottom: 10vh;
    } */
    .background-image {
        background-image: url('/template/images/bg_title.png');
        background-size: cover; 
        background-position: center; 
        height: 250px;
        position: relative;
        color: white; 
        text-align: center;
        display: flex; 
        justify-content: center; 
        align-items: center; 
        margin-bottom: 10vh;
        margin-top: 10vh;
    }
    .content {
        position: absolute;
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        text-align: center;
        width: 100%; 
    }
    .content h3 {
        margin: 0; 
        font-size: 33px;
        font-family: 'Sriracha', cursive;
        color: #fffc00;
    }

    .new-container {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 10vh;

}

.customer {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.customer ul {
    list-style: none;
    padding: 0;
}

.customer li {
    margin-bottom: 10px;
    display: flex;
}

.customer li span {
    min-width: 150px;
    font-weight: bold;
    color: #333;
}

.carts .table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}

.carts .table th,
.carts .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.carts .table th {
    background-color: #f2f2f2;
}

.carts .table tr:last-child td {
    border-bottom: none;
}

.carts .how-itemcart1 img {
    width: 100px;
    height: auto;
    border-radius: 4px;
}

.text-right {
    text-align: right;
    font-weight: bold;
}

.column-1, .column-2, .column-3, .column-4, .column-5 {
    width: 20%;
}

</style>

@section('content')
<div class="background-image">
        <div class="content">
            <h3>{{ $title }}</h3>
        </div>
    </div>

<div class="container">
<div class="new-container">
    <div class="customer mt-3">
        <ul>
            <li><span>Tên khách hàng:</span> <strong>{{ $customer->name }}</strong></li>
            <li><span>Số điện thoại:</span> <strong>{{ $customer->phone }}</strong></li>
            <li><span>Địa chỉ:</span> <strong>{{ $customer->address }}</strong></li>
            <li><span>Email:</span> <strong>{{ $customer->email }}</strong></li>
            <li><span>Ghi chú:</span> <strong>{{ $customer->content }}</strong></li>
        </ul>
    </div>

    <div class="carts">
        @php $total = 0; @endphp
        <table class="table">
            <tbody>
            <tr class="table_head">
                <th class="column-1">IMG</th>
                <th class="column-2">Product</th>
                <th class="column-3">Price</th>
                <th class="column-4">Quantity</th>
                <th class="column-5">Total</th>
            </tr>

            @foreach($carts as $key => $cart)
                @php
                    $price = $cart->price * $cart->pty;
                    $total += $price;
                @endphp
                <tr>
                    <td class="column-1">
                        <div class="how-itemcart1">
                            <img src="{{ asset($cart->product->thumb) }}" alt="IMG">
                        </div>
                    </td>
                    <td class="column-2">{{ $cart->product->name }}</td>
                    <td class="column-3">{{ number_format($cart->price, 0, '', '.') }}<a>.VND</a></td>
                    <td class="column-4">{{ $cart->pty }}</td>
                    <td class="column-5">{{ number_format($price, 0, '', '.') }}<a>.VND</a></td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="4" class="text-right">Tổng Tiền</td>
                    <td>{{ number_format($total, 0, '', '.') }}<a>.VND</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div></div>
@endsection


