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

    .order-page {
        background: var(--bookim-bg);
        min-height: 100vh;
        padding: 30px;
        color: var(--bookim-navy);
    }

    .order-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
        gap: 15px;
    }

    .order-top h2 {
        font-weight: 800;
        margin: 0 0 5px;
        color: var(--bookim-navy);
    }

    .back-link {
        color: var(--bookim-green-dark);
        text-decoration: none;
        font-weight: 600;
    }

    .back-link:hover {
        color: var(--bookim-navy);
    }

    .print-btn,
    .update-btn {
        background: var(--bookim-green);
        color: white;
        border: none;
        padding: 11px 20px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: .2s;
        display: inline-block;
    }

    .print-btn:hover,
    .update-btn:hover {
        background: var(--bookim-green-dark);
        color: white;
        transform: translateY(-1px);
    }

    .order-header,
    .info-card,
    .book-card,
    .summary-card,
    .notes-card {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 14px;
        box-shadow: 0 8px 25px rgba(8, 8, 45, .06);
    }

    .order-header {
        padding: 24px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
        gap: 15px;
    }

    .order-header h1 {
        font-size: 27px;
        margin: 0 0 7px;
        font-weight: 800;
        color: var(--bookim-navy);
    }

    .placed-date {
        color: var(--bookim-gray);
        font-size: 14px;
    }

    .paid {
        display: inline-block;
        padding: 7px 14px;
        border-radius: 20px;
        background: var(--bookim-light-green);
        color: var(--bookim-green-dark);
        border: 1px solid #cfe2cc;
        font-weight: 700;
        font-size: 13px;
        white-space: nowrap;
    }

    .pending {
        display: inline-block;
        padding: 7px 14px;
        border-radius: 20px;
        background: #fff8e8;
        color: #b47a15;
        border: 1px solid #ead9ad;
        font-weight: 700;
        font-size: 13px;
        white-space: nowrap;
    }

    .info-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 22px;
    }

    .card-title {
        padding: 15px 20px;
        background: var(--bookim-light-green);
        border-bottom: 1px solid #d8e6d6;
        font-size: 17px;
        font-weight: 800;
        color: var(--bookim-navy);
        border-radius: 14px 14px 0 0;
    }

    .book-card .card-title,
    .summary-card .card-title,
    .notes-card .card-title {
        background: #ffffff;
    }

    .card-body {
        padding: 20px;
    }

    .detail-row {
        display: grid;
        grid-template-columns: 120px 20px 1fr;
        margin-bottom: 15px;
        line-height: 1.5;
        align-items: start;
    }

    .detail-row:last-child {
        margin-bottom: 0;
    }

    .detail-row strong {
        font-size: 14px;
        color: var(--bookim-navy);
    }

    .detail-row b {
        color: var(--bookim-green-dark);
    }

    .detail-row span {
        color: var(--bookim-gray);
        word-break: break-word;
    }

    .book-card {
        margin-bottom: 22px;
        overflow: hidden;
    }

    .table-wrap {
        padding: 20px;
        overflow-x: auto;
    }

    .book-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid var(--bookim-border);
        border-radius: 9px;
        overflow: hidden;
    }

    .book-table th {
        background: var(--bookim-light-green);
        color: var(--bookim-navy);
        padding: 14px 12px;
        font-size: 13px;
        text-align: left;
        border-right: 1px solid var(--bookim-border);
        border-bottom: 1px solid var(--bookim-border);
        white-space: nowrap;
    }

    .book-table th:last-child {
        border-right: none;
    }

    .book-table td {
        padding: 13px 12px;
        border-right: 1px solid var(--bookim-border);
        border-bottom: 1px solid var(--bookim-border);
        color: var(--bookim-gray);
        background: #ffffff;
    }

    .book-table tr:last-child td {
        border-bottom: none;
    }

    .book-table td:last-child {
        border-right: none;
    }

    .book-table tbody tr:hover td {
        background: #fbfdfb;
    }

    .bottom-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        color: var(--bookim-gray);
        gap: 15px;
    }

    .grand-total {
        border-top: 1px solid var(--bookim-border);
        margin-top: 10px;
        padding-top: 17px;
        font-size: 18px;
        font-weight: 800;
        color: var(--bookim-navy);
    }

    .grand-total span:last-child {
        color: var(--bookim-green-dark);
    }

    .notes-box {
        border: 1px solid var(--bookim-border);
        background: var(--bookim-bg);
        min-height: 100px;
        padding: 15px;
        color: var(--bookim-gray);
        border-radius: 8px;
    }

    .bottom-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 28px;
        gap: 15px;
        align-items: center;
    }

    .back-btn {
        border: 1px solid var(--bookim-border);
        background: #ffffff;
        color: var(--bookim-navy);
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        transition: .2s;
    }

    .back-btn:hover {
        background: var(--bookim-light-green);
        color: var(--bookim-navy);
        border-color: #cfe2cc;
    }

    .actions-right {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .green-btn {
        background: var(--bookim-green);
        color: white;
        border: none;
        padding: 11px 22px;
        border-radius: 8px;
        font-weight: 600;
        transition: .2s;
    }

    .green-btn:hover {
        background: var(--bookim-green-dark);
        color: white;
    }

    .order-page .form-control {
        background: #ffffff !important;
        border: 1px solid var(--bookim-border) !important;
        color: var(--bookim-navy) !important;
        border-radius: 7px;
    }

    .order-page .form-control:focus {
        border-color: var(--bookim-green) !important;
        box-shadow: 0 0 0 3px rgba(123, 181, 121, .15) !important;
    }

    .order-page .btn-success {
        background: var(--bookim-green);
        border-color: var(--bookim-green);
        border-radius: 7px;
        font-weight: 600;
    }

    .order-page .btn-success:hover {
        background: var(--bookim-green-dark);
        border-color: var(--bookim-green-dark);
    }

    /* Tablet */

    @media(max-width: 900px) {

        .info-row,
        .bottom-grid {
            grid-template-columns: 1fr;
        }

        .order-header {
            gap: 15px;
            align-items: flex-start;
            flex-direction: column;
        }

        .order-top {
            align-items: flex-start;
        }
    }

    /* Mobile */

    @media(max-width: 767.98px) {

        .order-page {
            padding: 18px 12px;
        }

        .order-top {
            flex-direction: column;
            align-items: stretch;
        }

        .order-top h2 {
            font-size: 23px;
        }

        .print-btn {
            width: 100%;
        }

        .order-header {
            padding: 18px 16px;
        }

        .order-header h1 {
            font-size: 22px;
        }

        .card-title {
            padding: 13px 16px;
            font-size: 15px;
        }

        .card-body {
            padding: 16px;
        }

        .detail-row {
            grid-template-columns: 95px 15px 1fr;
            font-size: 13px;
        }

        .table-wrap {
            padding: 14px;
        }

        .book-table {
            min-width: 750px;
        }

        .bottom-actions {
            flex-direction: column;
            align-items: stretch;
        }

        .back-btn {
            text-align: center;
            width: 100%;
        }

        .actions-right {
            width: 100%;
            flex-direction: column;
        }

        .actions-right .update-btn,
        .actions-right .green-btn {
            width: 100%;
            text-align: center;
        }

        .summary-row {
            font-size: 14px;
        }
    }

    /* Small Mobile */

    @media(max-width: 480px) {

        .order-page {
            padding: 14px 9px;
        }

        .order-header {
            padding: 16px 14px;
        }

        .detail-row {
            grid-template-columns: 80px 12px 1fr;
            font-size: 12px;
        }

        .detail-row strong {
            font-size: 12px;
        }

        .paid,
        .pending {
            font-size: 11px;
            padding: 5px 9px;
        }

        .placed-date {
            font-size: 12px;
        }
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<div class="order-page">


<div class="order-top">

    <div>

        <h2>Order Details</h2>

        <a href="#" class="back-link">
            ← Back to Orders
        </a>

    </div>

    <button class="print-btn">
        🖨 Print Order
    </button>

</div>


<!-- Order Header -->

<div class="order-header">

    <div>

        <h1>
            Order {{ $order->id }}
        </h1>

        <div class="placed-date">
            📅 Placed on:
            {{ $order->created_at ? $order->created_at->format('d M Y, h:i A') : '' }}
        </div>

    </div>


    <span class="paid">

        @if ($order2 && $order2->payment_status == 'confirmed')

            Payment Success

    </span>

    @else

        <span class="pending">
            {{ ucfirst($order->order_status ?? 'Pending') }}
        </span>

    @endif

</div>


<!-- Customer + Order Information -->

<div class="info-row">

    <!-- Customer Information -->

    <div class="info-card">

        <div class="card-title">
            👤 &nbsp; Customer Information
        </div>

        <div class="card-body">

            <div class="detail-row">

                <strong>Name</strong>
                <b>:</b>

                <span>
                    {{ $order->user_order->name ?? 'N/A' }}
                </span>

            </div>


            <div class="detail-row">

                <strong>Email</strong>
                <b>:</b>

                <span>
                    {{ $order->user_order->email ?? 'N/A' }}
                </span>

            </div>


            <div class="detail-row">

                <strong>Phone</strong>
                <b>:</b>

                <span>
                    {{ $order->contact ?? $order->user_order->phone ?? 'N/A' }}
                </span>

            </div>


            <div class="detail-row">

                <strong>Address</strong>
                <b>:</b>

                <span>
                    {{ $order->address ?? 'N/A' }}
                </span>

            </div>

        </div>

    </div>


    <!-- Order Information -->

    <div class="info-card">

        <div class="card-title">
            💳 &nbsp; Order Information
        </div>

        <div class="card-body">

            <div class="detail-row">

                <strong>Order Type</strong>
                <b>:</b>

                <span>
                    {{ ucfirst($order->order_type ?? 'N/A') }}
                </span>

            </div>


            <div class="detail-row">

                <strong>Payment Method</strong>
                <b>:</b>

                <span>
                    {{ ucfirst($order->payment_method ?? 'N/A') }}
                </span>

            </div>


            <div class="detail-row">

                <strong>Payment Status</strong>
                <b>:</b>

                @if ($order2 && $order2->payment_status == 'confirmed')

                    <span class="paid">
                        Payment Confirmed
                    </span>

                @else

                    <span class="pending">
                        Payment Pending
                    </span>

                @endif

            </div>


            <div class="detail-row">

                <strong>Order Status</strong>
                <b>:</b>

                <form action="{{route('update.order',$order->id)}}" method="post">

                    @csrf

                    <span class="pending">

                        <input type="text"
                               value="{{$order->status}}"
                               class="form-control"
                               name="order_status">

                    </span>

                    <button class="btn btn-success mt-2">
                        change
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- Book Details -->

<div class="book-card">

    <div class="card-title">
        📖 &nbsp; Book Details
    </div>

    <div class="table-wrap">

        <table class="book-table">

            <thead>

                <tr>

                    <th>Book id</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Subtotal</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>
                        {{$order->book_order->id}}
                    </td>

                    <td>
                        {{ $order->book_order->title ?? 'N/A' }}
                    </td>

                    <td>
                        {{ $order->book_order->book_author->name
                            ?? $order->book_order->author->name
                            ?? 'N/A' }}
                    </td>

                    <td>
                        {{ $order->book_order->book_category->name
                            ?? $order->book_order->category->name
                            ?? 'N/A' }}
                    </td>

                    <td>
                        {{ $order->product_qty ?? 1 }}
                    </td>

                    <td>
                        Rs. {{$order->price}}
                    </td>

                    <td>
                        {{$order->total_price}}
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>


<!-- Summary + Notes -->

<div class="bottom-grid">

    <!-- Price Summary -->

    <div class="summary-card">

        <div class="card-title">
            🧮 &nbsp; Price Summary
        </div>

        <div class="card-body">

            @php

                $subtotal =
                    (float)($order->book_order->price ?? 0)
                    * (int)($order->product_qty ?? 1);

                $shipping = $subtotal * 5 / 100;

                $grandTotal = $subtotal + $shipping;

            @endphp


            <div class="summary-row">

                <span>Subtotal</span>

                <span>
                    Rs. {{$order->price }}
                </span>

            </div>


            <div class="summary-row">

                <span>Shipping------</span>

                <span>
                    Rs. {{$order->shipping }}
                </span>

            </div>


            <div class="summary-row grand-total">

                <span>Grand Total</span>

                <span>
                    Rs. {{$order->total_price }}
                </span>

            </div>

        </div>

    </div>


    <!-- Additional Notes -->

    <div class="notes-card">

        <div class="card-title">
            📝 &nbsp; Additional Notes
        </div>

        <div class="card-body">

            <div class="notes-box">

                {{ $order->notes ?? 'No additional notes.' }}

            </div>

        </div>

    </div>

</div>


<!-- Bottom Buttons -->

<div class="bottom-actions">

    <a href="#" class="back-btn">
        ← &nbsp; Back to Orders
    </a>

    <div class="actions-right">

        <a class="update-btn">
            🖨 &nbsp; Update Status
        </a>

        <button class="green-btn">
            🖨 &nbsp; Print Order
        </button>

    </div>

</div>


</div>
