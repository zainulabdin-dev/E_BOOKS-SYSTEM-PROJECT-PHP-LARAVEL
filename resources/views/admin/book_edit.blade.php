@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Book</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet">

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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
        background: var(--bookim-bg);
        color: var(--bookim-navy);
    }

    .edit-wrapper {
        min-height: 100vh;
        padding: 45px 20px;
    }

    .edit-card {
        max-width: 950px;
        margin: auto;
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 20px;
        padding: 38px;
        box-shadow: 0 12px 35px rgba(8, 8, 45, 0.08);
    }

    /* HEADER */

    .page-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .title-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 15px;
        border-radius: 16px;
        background: var(--bookim-light-green);
        color: var(--bookim-green-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
    }

    .page-title {
        color: var(--bookim-navy);
        font-weight: 800;
        font-size: 30px;
        margin-bottom: 8px;
        letter-spacing: .4px;
    }

    .page-subtitle {
        color: var(--bookim-gray);
        margin-bottom: 0;
        font-size: 14px;
    }

    /* SECTION */

    .section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--bookim-navy);
        font-size: 14px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 22px;
        padding-bottom: 12px;
        border-bottom: 1px solid var(--bookim-border);
    }

    .section-title i {
        color: var(--bookim-green-dark);
    }

    /* FORM */

    .form-label {
        color: var(--bookim-navy);
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .form-control,
    .form-select {
        background: #ffffff;
        border: 1px solid #D9DED9;
        color: var(--bookim-navy);
        border-radius: 10px;
        padding: 12px 14px;
        font-size: 14px;
        transition: .25s ease;
    }

    .form-control:focus,
    .form-select:focus {
        background: #ffffff;
        color: var(--bookim-navy);
        border-color: var(--bookim-green);
        box-shadow: 0 0 0 4px rgba(123, 181, 121, 0.15);
    }

    .form-control::placeholder {
        color: #9A9A9A;
    }

    .form-select option {
        background: #ffffff;
        color: var(--bookim-navy);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 130px;
    }

    /* UPLOAD */

    .upload-box {
        border: 1px dashed #B8CBB7;
        background: var(--bookim-light-green);
        border-radius: 10px;
        padding: 6px;
        transition: .25s ease;
    }

    .upload-box:hover {
        border-color: var(--bookim-green);
        background: #E4F1E2;
    }

    .upload-box input {
        border: none;
        background: transparent;
    }

    .upload-box input:focus {
        box-shadow: none;
    }

    .current-file {
        display: flex;
        align-items: center;
        gap: 7px;
        color: var(--bookim-gray);
        font-size: 12px;
        margin-top: 8px;
        word-break: break-word;
    }

    .current-file i {
        color: var(--bookim-green-dark);
    }

    /* BUTTON */

    .update-btn {
        background: var(--bookim-green);
        border: none;
        color: #ffffff;
        padding: 13px 45px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 14px;
        transition: .3s ease;
    }

    .update-btn:hover {
        background: var(--bookim-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(104, 167, 104, 0.25);
    }

    /* MOBILE */

    @media (max-width: 767px) {

        .edit-wrapper {
            padding: 25px 12px;
        }

        .edit-card {
            padding: 25px 18px;
            border-radius: 16px;
        }

        .page-title {
            font-size: 25px;
        }

        .page-subtitle {
            font-size: 13px;
        }

        .title-icon {
            width: 52px;
            height: 52px;
            font-size: 21px;
        }

        .section-title {
            font-size: 13px;
        }

        .update-btn {
            width: 100%;
        }

    }

</style>


</head>

<body>

<div class="edit-wrapper">


<div class="edit-card">

    <!-- HEADER -->

    <div class="page-header">

        <div class="title-icon">
            <i class="fa-solid fa-book-open"></i>
        </div>

        <h1 class="page-title">
            Edit Book
        </h1>

        <p class="page-subtitle">
            Update the information of your book
        </p>

    </div>


    <form action="{{route('updatebook',$data->id)}}"
          method="POST"
          enctype="multipart/form-data">

        @csrf


        <!-- SECTION -->

        <div class="section-title">

            <i class="fa-solid fa-circle-info"></i>

            <span>Book Information</span>

        </div>


        <div class="row">


            <!-- BOOK TITLE -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Title
                </label>

                <input type="text"
                       name="book_title"
                       class="form-control"
                       placeholder="Enter book title"
                       value="{{$data->title}}">

            </div>


            <!-- PRICE -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Price
                </label>

                <input type="number"
                       name="book_price"
                       class="form-control"
                       placeholder="Enter book price"
                       value="{{$data->price}}">

            </div>


            <!-- STOCK -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Stock
                </label>

                <input type="number"
                       name="book_stock"
                       class="form-control"
                       placeholder="Enter stock quantity"
                       value="{{$data->stock}}">

            </div>


            <!-- CATEGORY -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Category
                </label>

                <select name="category_name"
                        class="form-select">

                    <option value="">
                        ---- Please Select Any Category ----
                    </option>

                    @foreach ($selectcat as $category)

                        <option value="{{ $category->id }}"
                            {{ $data->category_id == $category->id ? 'selected' : '' }}>

                            {{ $category->name }}

                        </option>

                    @endforeach

                </select>

            </div>


            <!-- AUTHOR -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Author
                </label>

                <select name="author_name"
                        class="form-select">

                    <option value="">
                        ---- Please Select Any Author ----
                    </option>

                    @foreach ($selectauth as $author)

                        <option value="{{ $author->id }}"
                            {{ $data->author_id == $author->id ? 'selected' : '' }}>

                            {{ $author->name }}

                        </option>

                    @endforeach

                </select>

            </div>


            <!-- PDF -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book PDF
                </label>

                <div class="upload-box">

                    <input type="file"
                           name="book_pdf"
                           class="form-control">

                </div>

                <span class="current-file">

                    <i class="fa-solid fa-file-pdf"></i>

                    Current PDF: {{$data->pdf}}

                </span>

            </div>


            <!-- IMAGE -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Cover Image
                </label>

                <div class="upload-box">

                    <input type="file"
                           name="book_image"
                           class="form-control">

                </div>

                <span class="current-file">

                    <i class="fa-solid fa-image"></i>

                    Current Image: {{$data->image}}

                </span>

            </div>


            <!-- DESCRIPTION -->

            <div class="col-md-12 mb-4">

                <label class="form-label">
                    Description
                </label>

                <textarea name="description"
                          class="form-control"
                          rows="5"
                          placeholder="Enter book description">{{$data->description}}</textarea>

            </div>


            <!-- SUBMIT -->

            <div class="col-md-12 text-center">

                <button type="submit"
                        class="update-btn">

                    <i class="fa-solid fa-check me-2"></i>

                    Update Book

                </button>

            </div>


        </div>

    </form>

</div>


</div>

</body>

</html>

@endsection
