@extends('main')

@section('content')
<style>
    .table {
        margin-top: 10vh;
        margin-bottom: 10vh;
    }
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
</style>
<div class="background-image">
        <div class="content">
            <h3>{{ $title }}</h3>
        </div>
    </div>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Ngày Đặt hàng</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @php
            $maxIdCustomer = $customers->sortByDesc('id')->first();
        @endphp
        @if($maxIdCustomer)
            <tr>
                <td>{{ $maxIdCustomer->id }}</td>
                <td>{{ $maxIdCustomer->name }}</td>
                <td>{{ $maxIdCustomer->phone }}</td>
                <td>{{ $maxIdCustomer->email }}</td>
                <td>{{ $maxIdCustomer->created_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('carts.customer.view', ['customer' => $maxIdCustomer->id]) }}">
                        <i class="fas fa-eye"></i>
                    </a>

                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $maxIdCustomer->id }}, '/carts/customers/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
@endsection
