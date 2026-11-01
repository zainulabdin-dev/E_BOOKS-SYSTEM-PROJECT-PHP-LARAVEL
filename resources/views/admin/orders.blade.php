@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>All Orders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">

<style>

    :root {
        --bookim-navy: #08082D;
        --bookim-green: #7BB579;
        --bookim-green-dark: #68A768;
        --bookim-light-green: #EAF4E8;
        --bookim-bg: #F7F8F6;
        --bookim-gray: #737373;
        --bookim-border: #E1E4E1;
    }

    body {
        background: var(--bookim-bg) !important;
        color: var(--bookim-navy);
    }

    .orders-wrapper {
        padding: 30px 15px;
    }

    /* HEADER */

    .orders-header {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 16px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 10px 30px rgba(8, 8, 45, 0.07);
    }

    .orders-header h1 {
        margin: 0;
        color: var(--bookim-navy);
        font-size: 28px;
        font-weight: 800;
        letter-spacing: .2px;
    }

    .orders-header h1 i {
        color: var(--bookim-green);
    }

    .orders-header p {
        margin: 7px 0 0;
        color: var(--bookim-gray);
        font-size: 14px;
    }

    /* TABLE CARD */

    .orders-table-card {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 16px;
        padding: 18px;
        box-shadow: 0 10px 30px rgba(8, 8, 45, 0.07);
        overflow: hidden;
    }

    .orders-table {
        margin: 0;
        color: var(--bookim-navy);
        vertical-align: middle;
    }

    /* TABLE HEADER */

    .orders-table thead {
        background: var(--bookim-light-green);
    }

    .orders-table thead th {
        color: var(--bookim-navy);
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .4px;
        border-bottom: 1px solid #d8e6d6;
        padding: 16px 14px;
        white-space: nowrap;
    }

    .orders-table thead th i {
        color: var(--bookim-green-dark);
    }

    /* TABLE BODY */

    .orders-table tbody td {
        color: var(--bookim-gray);
        border-bottom: 1px solid var(--bookim-border);
        padding: 16px 14px;
        white-space: nowrap;
    }

    .orders-table tbody tr {
        transition: all .2s ease;
    }

    .orders-table tbody tr:hover {
        background: #fbfdfb;
    }

    /* ORDER ID */

    .order-id {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 42px;
        height: 32px;
        padding: 0 10px;
        border-radius: 8px;
        background: var(--bookim-light-green);
        color: var(--bookim-green-dark);
        border: 1px solid #d4e6d1;
        font-weight: 800;
        font-size: 13px;
    }

    /* CUSTOMER */

    .customer-name {
        color: var(--bookim-navy);
        font-weight: 700;
    }

    /* PRICE */

    .price {
        color: var(--bookim-green-dark);
        font-weight: 800;
    }

    /* PRODUCT */

    .product-name {
        color: var(--bookim-navy);
        font-weight: 600;
    }

    /* TYPE BADGE */

    .type-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        background: var(--bookim-light-green);
        border: 1px solid #d4e6d1;
        color: var(--bookim-green-dark);
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
    }
        .type-badge1 {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        background: var(--bookim-light-green);
        border: 1px solid #061f01;
        color: var(--bookim-black-dark);
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
    }

    /* DETAIL BUTTON */

    .detail-btn {
        width: 38px;
        height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        background: var(--bookim-light-green);
        color: var(--bookim-green-dark);
        border: 1px solid #d4e6d1;
        transition: all .2s ease;
        text-decoration: none;
    }

    .detail-btn:hover {
        background: var(--bookim-green);
        border-color: var(--bookim-green);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(123, 181, 121, .25);
    }

    /* SUCCESS ALERT */

    .alert-success {
        background: #f0f9ef;
        border: 1px solid #cfe5cc;
        color: #397336;
        border-radius: 10px;
    }

    .alert-success .btn-close {
        filter: none;
    }

    /* EMPTY */

    .empty-orders {
        text-align: center;
        padding: 50px 20px;
        color: var(--bookim-gray);
    }

    .empty-orders i {
        font-size: 42px;
        color: var(--bookim-green);
        margin-bottom: 15px;
    }

    .empty-orders h5 {
        color: var(--bookim-navy);
        font-weight: 700;
        margin-bottom: 6px;
    }

    .empty-orders p {
        margin: 0;
        color: var(--bookim-gray);
    }

    /* RESPONSIVE */

    @media (max-width: 767.98px) {

        .orders-wrapper {
            padding: 20px 10px;
        }

        .orders-header {
            padding: 20px;
            border-radius: 13px;
        }

        .orders-header h1 {
            font-size: 23px;
        }

        .orders-header p {
            font-size: 13px;
        }

        .orders-table-card {
            padding: 10px;
            border-radius: 13px;
        }

        .orders-table thead th,
        .orders-table tbody td {
            padding: 13px 10px;
        }

        .orders-table thead th {
            font-size: 11px;
        }

        .orders-table tbody td {
            font-size: 13px;
        }

        .detail-btn {
            width: 35px;
            height: 35px;
        }
    }

</style>


</head>

<body>

<div class="container-fluid orders-wrapper">

<!-- HEADER -->

<div class="orders-header">

    <h1>
        <i class="fa-solid fa-box-open me-2"></i>
        ALL ORDERS
    </h1>

    <p>
        Manage and view all customer orders
    </p>

</div>


<!-- SUCCESS MESSAGE -->

@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show mb-4"
         role="alert">

        <strong>
            <i class="fa-solid fa-circle-check me-1"></i>
            MESSAGE
        </strong>

        {{session('success')}}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>

    </div>

@endif


<!-- ORDERS TABLE -->

<div class="orders-table-card">

    <div class="table-responsive">

        <table class="table orders-table">

            <thead>

                <tr>

                    <th>
                        ID
                    </th>

                    <th>
                        <i class="fa-solid fa-user me-1"></i>
                        Customer
                    </th>

                    <th>
                        <i class="fa-solid fa-money-bill me-1"></i>
                        Total Price
                    </th>

                    <th>
                        <i class="fa-solid fa-book me-1"></i>
                        Product Name
                    </th>

                    <th>
                        <i class="fa-solid fa-layer-group me-1"></i>
                        Product Type
                    </th>

                    <th>
                    <i class="fa-brands fa-amazon-pay" style="color: rgb(5, 155, 40);"></i>
                        Pay_Status
                    </th>
                         <th>
                        <i class="fa-solid fa-circle-info me-1"></i>
                        More Detail
                    </th>


                </tr>

            </thead>


            <tbody>

    
@forelse($orders as $order)

    <tr>

        <!-- ID -->
        <td>
            <span class="order-id">
                #{{ $order->id }}
            </span>
        </td>

        <!-- CUSTOMER -->
        <td>
            <span class="customer-name">
                {{ $order->user_order->name }}
            </span>
        </td>

        <!-- PRICE -->
        <td>
            <span class="price">
                Rs. {{ $order->total_price }}
            </span>
        </td>

        <!-- PRODUCT -->
        <td>
            <span class="product-name">
                {{ $order->product_name }}
            </span>
        </td>

        <!-- TYPE -->
        <td>
            <span class="type-badge">
                {{ $order->order_type }}
            </span>
        </td>

        <!-- PAYMENT STATUS -->
        <td>
            @foreach($pay as $payment)

                @if($payment->order_id == $order->id)
                    <span class="type-badge">
                        {{ $payment->payment_status }}
                    </span>
                @else
              
        
                
                      @endif
                    
            @endforeach
          
       
                
       
            
        </td>

        <!-- DETAIL -->
        <td>
            <a href="{{ route('detail', $order->id) }}"
               class="detail-btn"
               title="View Order Detail">

                <i class="fa-solid fa-circle-info"></i>

            </a>
        </td>

    </tr>

@empty

    <tr>
        <td colspan="7">

            <div class="empty-orders">

                <i class="fa-solid fa-box-open"></i>

                <h5>No Orders Found</h5>

                <p>
                    There are currently no orders available.
                </p>

            </div>

        </td>
    </tr>

@endforelse


            </tbody>

        </table>

    </div>

</div>


</div>

</body>
</html>

@endsection
