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
    .badge-warning { background-color: #ffc107; }
    .badge-info { background-color: #17a2b8; }
    .badge-primary { background-color: #007bff; }
    .badge-success { background-color: #28a745; }
    .badge-danger { background-color: #dc3545; }
    .badge-secondary { background-color: #6c757d; }
    .no-orders-message {
        text-align: center;
        font-size: 18px;
        color: #dc3545;
        margin-top: 20px;
    }
</style>

<div class="background-image">
    <div class="content">
        <h3>{{ $title }}</h3>
    </div>
</div>

<div class="container">
    @if($customers->isEmpty())
        <div class="no-orders-message">
            Không có đơn hàng
        </div>
    @else
        <table class="table">
            <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên Khách Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Ngày Đặt hàng</th>
                <!-- <th>Tình Trạng Đơn Hàng</th> -->
                <th style="width: 100px">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @php
                $maxIdCustomer = $customers->sortByDesc('id')->first();
            @endphp
            @if($maxIdCustomer)
                <tr id="customer-row-{{ $maxIdCustomer->id }}">
                    <td>{{ $maxIdCustomer->id }}</td>
                    <td>{{ $maxIdCustomer->name }}</td>
                    <td>{{ $maxIdCustomer->phone }}</td>
                    <td>{{ $maxIdCustomer->email }}</td>
                    <td>{{ $maxIdCustomer->created_at }}</td>
                    <!-- <td id="status-{{ $maxIdCustomer->id }}">
                        <span class="badge badge-warning">Pending</span>
                    </td> -->
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('carts.customer.view', ['customer' => $maxIdCustomer->id]) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                        <!-- <a href="#" class="btn btn-danger btn-sm" 
                            onclick="removeRow({{ $maxIdCustomer->id }}, '/carts/customers/destroy')">
                            <i class="fas fa-trash"></i>
                        </a> -->
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    @endif
</div>

<script>
    var statuses = ['pending', 'processing', 'shipped', 'delivered', 'cancelled'];
    var badgeClasses = {
        'pending': 'badge-warning',
        'processing': 'badge-info',
        'shipped': 'badge-primary',
        'delivered': 'badge-success'
        // 'cancelled': 'badge-danger'
    };
    var currentIndex = 0;

    function updateStatus() {
        var customerId = {{ $maxIdCustomer->id }};
        var statusElement = document.getElementById('status-' + customerId);
        var status = statuses[currentIndex];
        var badgeClass = badgeClasses[status];
        var statusText = status.charAt(0).toUpperCase() + status.slice(1); // Capitalize the first letter

        statusElement.innerHTML = '<span class="badge ' + badgeClass + '">' + statusText + '</span>';

        // Update index to show next status
        currentIndex = (currentIndex + 1) % statuses.length;
    }

    // Update status every 5 seconds
    setInterval(updateStatus, 5000);
</script>
@endsection
