
@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Books</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">


    <style>

        :root {
            --navy: #08082D;
            --green: #7BB579;
            --green-dark: #68A768;
            --light-green: #EAF4E8;
            --bg: #F7F8F6;
            --gray: #737373;
            --border: #E1E4E1;
        }


        body {
            background: var(--bg);
            color: var(--navy);
        }


        /* =========================
           WRAPPER
        ========================== */

        .books-wrapper {
            padding: 30px 15px 50px;
        }


        /* =========================
           HEADER
        ========================== */

        .page-header {
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: .5px;
            color: var(--navy);
            margin-bottom: 6px;
        }

        .page-title i {
            color: var(--green-dark);
            margin-right: 7px;
        }

        .page-subtitle {
            color: var(--gray);
            margin: 0;
            font-size: 14px;
        }


        /* =========================
           SUCCESS MESSAGE
        ========================== */

        .success-alert {
            background: var(--light-green);
            border: 1px solid #c9dfc6;
            color: #477548;
            border-radius: 10px;
        }

        .success-alert strong {
            color: var(--green-dark);
        }


        /* =========================
           BOOK CARD
        ========================== */

        .book-card {
            height: 100%;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 17px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(8, 8, 45, 0.055);
        }

        .book-card:hover {
            transform: translateY(-5px);
            border-color: var(--green);
            box-shadow: 0 14px 32px rgba(123, 181, 121, 0.14);
        }


        /* =========================
           BOOK IMAGE
        ========================== */

        .book-image-box {
            height: 245px;
            background: #f2f5f1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            border-bottom: 1px solid var(--border);
        }

        .book-image {
            width: 160px;
            height: 210px;
            object-fit: cover;
            border-radius: 7px;
            box-shadow: 0 8px 20px rgba(8, 8, 45, 0.15);
        }


        /* =========================
           BOOK CONTENT
        ========================== */

        .book-content {
            padding: 20px;
        }

        .book-id {
            color: var(--green-dark);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .book-title {
            color: var(--navy);
            font-size: 20px;
            font-weight: 700;
            margin: 5px 0 12px;
        }

        .book-description {
            color: var(--gray);
            font-size: 14px;
            line-height: 1.6;
            height: 67px;
            overflow: hidden;
            margin-bottom: 15px;
        }


        /* =========================
           PRICE / STOCK
        ========================== */

        .book-info {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }

        .info-item {
            background: var(--light-green);
            border: 1px solid #d3e5d0;
            border-radius: 7px;
            padding: 7px 10px;
            color: #557b55;
            font-size: 13px;
            font-weight: 600;
        }

        .info-item i {
            color: var(--green-dark);
            margin-right: 5px;
        }


        /* =========================
           CATEGORY / AUTHOR
        ========================== */

        .category-author {
            border-top: 1px solid var(--border);
            padding-top: 13px;
            margin-top: 5px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 8px;
            font-size: 13px;
        }

        .detail-label {
            color: #929292;
            white-space: nowrap;
        }

        .detail-label i {
            color: var(--green-dark);
            margin-right: 4px;
        }

        .detail-value {
            color: var(--navy);
            font-weight: 500;
            text-align: right;
            word-break: break-word;
        }


        /* =========================
           PDF BUTTON
        ========================== */

        .pdf-btn {
            display: block;
            text-align: center;
            text-decoration: none;
            background: var(--light-green);
            color: var(--green-dark);
            border: 1px solid #cce1c9;
            border-radius: 8px;
            padding: 9px;
            margin-top: 15px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .pdf-btn:hover {
            background: var(--green);
            color: #fff;
            border-color: var(--green);
        }


        /* =========================
           ACTION BUTTONS
        ========================== */

        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .edit-btn,
        .delete-btn {
            flex: 1;
            text-decoration: none;
            text-align: center;
            padding: 9px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            transition: 0.3s;
        }


        /* EDIT */

        .edit-btn {
            background: #edf7ec;
            border: 1px solid #c9e1c6;
            color: #5d965d;
        }

        .edit-btn:hover {
            background: var(--green);
            border-color: var(--green);
            color: #fff;
        }


        /* DELETE */

        .delete-btn {
            background: #fff1f3;
            border: 1px solid #f0cbd2;
            color: #d35b72;
        }

        .delete-btn:hover {
            background: #d35b72;
            border-color: #d35b72;
            color: #fff;
        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 576px) {

            .books-wrapper {
                padding: 20px 10px 40px;
            }

            .page-title {
                font-size: 24px;
            }

            .page-subtitle {
                font-size: 13px;
            }

            .book-image-box {
                height: 220px;
            }

            .book-image {
                width: 145px;
                height: 195px;
            }

            .book-content {
                padding: 17px;
            }

            .book-title {
                font-size: 18px;
            }

        }

    </style>

</head>


<body>

<div class="books-wrapper">

    <div class="container-fluid">

        <!-- HEADER -->

        <div class="page-header text-center">

            <h1 class="page-title">

                <i class="fa-solid fa-book-open"></i>

                ALL BOOKS

            </h1>

            <p class="page-subtitle">

                Manage all books available in the publishing system

            </p>

        </div>


        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div class="alert success-alert alert-dismissible fade show mb-4"
                 role="alert">

                <i class="fa-solid fa-circle-check me-2"></i>

                <strong>Success!</strong>

                {{session('success')}}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close">
                </button>

            </div>

        @endif


        <!-- BOOKS -->

        <div class="row g-4">

            @foreach($all_book as $book)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                    <div class="book-card">


                        <!-- BOOK IMAGE -->

                        <div class="book-image-box">

                            <img src="{{asset('storage/books_pics/'. $book->image)}}"
                                 class="book-image"
                                 alt="Book Image">

                        </div>


                        <!-- BOOK CONTENT -->

                        <div class="book-content">

                            <div class="book-id">

                                BOOK #{{$book->id}}

                            </div>


                            <h2 class="book-title">

                                {{$book->title}}

                            </h2>


                            <!-- PRICE / STOCK -->

                            <div class="book-info">

                                <div class="info-item">

                                    <i class="fa-solid fa-tag"></i>

                                    Rs. {{$book->price}}

                                </div>


                                <div class="info-item">

                                    <i class="fa-solid fa-box"></i>

                                    Stock: {{$book->stock}}

                                </div>

                            </div>


                            <!-- DESCRIPTION -->

                            <p class="book-description">

                                {{$book->description}}

                            </p>


                            <!-- CATEGORY / AUTHOR -->

                            <div class="category-author">

                                <div class="detail-row">

                                    <span class="detail-label">

                                        <i class="fa-solid fa-layer-group"></i>

                                        Category

                                    </span>

                                    <span class="detail-value">

                                        {{$book->book_category?->name ?? 'CATEGORY_NOT_AVAILABLE'}}

                                    </span>

                                </div>


                                <div class="detail-row">

                                    <span class="detail-label">

                                        <i class="fa-solid fa-user"></i>

                                        Author

                                    </span>

                                    <span class="detail-value">

                                        {{ $book->book_author?->name ?? 'N/A' }}

                                    </span>

                                </div>

                            </div>


                            <!-- PDF -->

                            <a href="{{ asset('storage/books/' . $book->pdf) }}"
                               target="_blank"
                               class="pdf-btn">

                                <i class="fa-solid fa-file-pdf me-2"></i>

                                View PDF

                            </a>


                            <!-- ACTIONS -->

                            <div class="action-buttons">

                                <a href="{{route('editbook',$book->id)}}"
                                   class="edit-btn">

                                    <i class="fa-solid fa-pen-to-square me-1"></i>

                                    Edit

                                </a>


                                <a href="{{route('deletebook',$book->id)}}"
                                   class="delete-btn">

                                    <i class="fa-solid fa-trash me-1"></i>

                                    Delete

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</div>

</body>
</html>

@endsection

