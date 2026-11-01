 

<style>
    .order-page {
        background: #f5f9ff;
        min-height: 100vh;
        padding: 30px;
        color: #172b4d;
    }

    .order-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .order-top h2 {
        font-weight: 700;
        margin: 0;
    }

    .back-link {
        color: #2878e8;
        text-decoration: none;
        font-weight: 500;
    }

    .print-btn,
    .update-btn {
        background: #2878e8;
        color: white;
        border: none;
        padding: 11px 20px;
        border-radius: 7px;
        font-weight: 600;
    }

    .order-header,
    .info-card,
    .book-card,
    .summary-card,
    .notes-card {
        background: white;
        border: 1px solid #dce8f7;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(30, 70, 120, .04);
    }

    .order-header {
        padding: 24px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
    }

    .order-header h1 {
        font-size: 27px;
        margin: 0 0 7px;
        font-weight: 700;
    }

    .placed-date {
        color: #687b99;
    }

    .status {
        padding: 9px 18px;
        border-radius: 14px;
        font-weight: 600;
        background: #fff1cc;
        color: #9a5b00;
        border: 1px solid #ffd36a;
    }

    .info-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 22px;
    }

    .card-title {
        padding: 14px 20px;
        background: #f7faff;
        border-bottom: 1px solid #e5edf8;
        font-size: 17px;
        font-weight: 700;
    }

    .card-body {
        padding: 18px 20px;
    }

    .detail-row {
        display: grid;
        grid-template-columns: 110px 20px 1fr;
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .detail-row strong {
        font-size: 14px;
    }

    .detail-row span {
        color: #344765;
    }

    .book-card {
        margin-bottom: 22px;
        overflow: hidden;
    }

    .book-card .card-title {
        background: white;
    }

    .table-wrap {
        padding: 0 20px 20px;
        overflow-x: auto;
    }

    .book-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #dce8f7;
        overflow: hidden;
    }

    .book-table th {
        background: #eef5fd;
        color: #172b4d;
        padding: 14px 12px;
        font-size: 13px;
        text-align: left;
        border-right: 1px solid #dce8f7;
    }

    .book-table td {
        padding: 10px 12px;
        border: 1px solid #e0eaf6;
        color: #30435f;
    }

    .book-image {
        width: 65px;
        height: 90px;
        object-fit: cover;
        border-radius: 5px;
    }

    .paid {
        display: inline-block;
        padding: 6px 13px;
        border-radius: 15px;
        background: #d9f8df;
        color: #159447;
        font-weight: 600;
    }

    .pending {
        display: inline-block;
        padding: 6px 13px;
        border-radius: 15px;
        background: #fff0c8;
        color: #9b5d00;
        font-weight: 600;
    }

    .bottom-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 7px 0;
        color: #344765;
    }

    .grand-total {
        border-top: 1px solid #dce8f7;
        margin-top: 10px;
        padding-top: 17px;
        font-size: 18px;
        font-weight: 700;
        color: #102b5a;
    }

    .notes-box {
        border: 1px solid #dce8f7;
        background: #f8fbff;
        min-height: 100px;
        padding: 15px;
        color: #9aa8bc;
        border-radius: 6px;
    }

    .bottom-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 28px;
    }

    .back-btn {
        border: 1px solid #aebfd5;
        background: white;
        color: #667b99;
        padding: 10px 20px;
        border-radius: 7px;
        text-decoration: none;
    }

    .actions-right {
        display: flex;
        gap: 12px;
    }

    .green-btn {
        background: #16a66b;
        color: white;
        border: none;
        padding: 11px 22px;
        border-radius: 7px;
        font-weight: 600;
    }

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
    }
</style>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

 <div class="info-card">

            <div class="card-title">
                💳 &nbsp; Order Information
            </div>

            <div class="card-body">

                <div class="detail-row">
                    <strong>Order Type</strong>
                    <b>:</b>
                    <span>{{ ucfirst($order->order_type ?? 'N/A') }}</span>
                </div>

                <div class="detail-row">
                    <strong>Payment Method</strong>
                    <b>:</b>
                    <span>{{ ucfirst($order->payment_method ?? 'N/A') }}</span>
                </div>

                <div class="detail-row">
                    <strong>Payment Status</strong>
                    <b>:</b>
                    <span class="paid ">
                      <input type="text" class="form-control" value="{{ ucfirst($order->status ?? 'Paid') }}">
                    </span>
                </div>

                <div class="detail-row">
                    <strong>Order Status</strong>
                    <b>:</b>
                    @if ($order->status == 'pending')
                          <span class="pending">
                      pending
                    </span>

                    @else
                             <span class="pending">
                      {{$order2->payment_status}}
                    </span>
                    @endif
                  
                </div>

            </div>
        </div>