@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Upload Book</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">

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

    .upload-wrapper {
        min-height: 85vh;
        padding: 40px 20px;
    }

    .upload-card {
        max-width: 900px;
        margin: auto;
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 18px;
        padding: 40px;
        box-shadow: 0 12px 35px rgba(8, 8, 45, 0.08);
        position: relative;
    }

    /* TOP GREEN LINE */

    .upload-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 70px;
        height: 4px;
        background: var(--bookim-green);
        border-radius: 0 0 10px 10px;
    }

    /* HEADER */

    .page-title {
        color: var(--bookim-navy);
        font-weight: 800;
        letter-spacing: 1px;
        text-align: center;
        margin-bottom: 8px;
        font-size: 30px;
    }

    .page-subtitle {
        color: var(--bookim-gray);
        text-align: center;
        margin-bottom: 35px;
        font-size: 15px;
    }

    /* SECTION */

    .section-title {
        color: var(--bookim-green-dark);
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 18px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--bookim-border);
    }

    /* LABEL */

    .form-label {
        color: var(--bookim-navy);
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 14px;
    }

    /* INPUT */

    .form-control,
    .form-select {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        color: var(--bookim-navy);
        border-radius: 9px;
        padding: 11px 13px;
        min-height: 47px;
        transition: 0.25s;
    }

    .form-control:focus,
    .form-select:focus {
        background: #ffffff;
        color: var(--bookim-navy);
        border-color: var(--bookim-green);
        box-shadow: 0 0 0 0.20rem rgba(123, 181, 121, 0.18);
    }

    .form-control::placeholder {
        color: #9b9b9b;
    }

    .form-select {
        cursor: pointer;
    }

    .form-select option {
        background: #ffffff;
        color: var(--bookim-navy);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 130px;
    }

    /* FILE UPLOAD */

    .upload-box {
        border: 1px dashed #b9cdb7;
        background: var(--bookim-light-green);
        border-radius: 10px;
        padding: 7px;
        transition: 0.25s;
    }

    .upload-box:hover {
        border-color: var(--bookim-green);
        background: #f0f7ee;
    }

    .upload-box input {
        border: none;
        background: transparent;
        color: var(--bookim-navy);
    }

    .upload-box input:focus {
        box-shadow: none;
    }

    .upload-box input::file-selector-button {
        background: var(--bookim-green);
        color: #ffffff;
        border: none;
        border-radius: 7px;
        padding: 8px 14px;
        margin-right: 10px;
        cursor: pointer;
        font-weight: 600;
    }

    .upload-box input::file-selector-button:hover {
        background: var(--bookim-green-dark);
    }

    /* SUBMIT */

    .submit-btn {
        background: var(--bookim-navy);
        border: none;
        color: #ffffff;
        padding: 12px 45px;
        border-radius: 9px;
        font-weight: 600;
        transition: 0.3s;
    }

    .submit-btn:hover {
        background: var(--bookim-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 7px 18px rgba(104, 167, 104, 0.25);
    }

    /* RESPONSIVE */

    @media (max-width: 767px) {

        .upload-wrapper {
            padding: 25px 12px;
        }

        .upload-card {
            padding: 28px 18px;
            border-radius: 14px;
        }

        .page-title {
            font-size: 24px;
        }

        .page-subtitle {
            font-size: 14px;
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 13px;
        }

        .submit-btn {
            width: 100%;
        }

    }

    @media (max-width: 480px) {

        .upload-wrapper {
            padding: 18px 8px;
        }

        .upload-card {
            padding: 24px 14px;
        }

        .page-title {
            font-size: 21px;
        }

        .form-control,
        .form-select {
            font-size: 14px;
        }

        .upload-box input {
            font-size: 13px;
        }

    }

</style>


</head>

<body>

<div class="upload-wrapper">


<div class="upload-card">

    <h1 class="page-title">
        UPLOAD BOOK
    </h1>

    <p class="page-subtitle">
        Add a new book to your online publishing system
    </p>


    <form action="{{route('bookupload')}}"
          method="POST"
          enctype="multipart/form-data">

        @csrf


        <div class="section-title">
            Book Information
        </div>


        <div class="row">

            <!-- Book Name -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Title
                </label>

                <input type="text"
                       name="book_title"
                       class="form-control"
                       placeholder="Enter book title">

            </div>


            <!-- Book Price -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Price
                </label>

                <input type="number"
                       name="book_price"
                       class="form-control"
                       placeholder="Enter book price">

            </div>


            <!-- Book Stock -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Stock
                </label>

                <input type="number"
                       name="book_stock"
                       class="form-control"
                       placeholder="Enter available stock">

            </div>


            <!-- Category -->

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

                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <!-- Author -->

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

                        <option value="{{ $author->id }}">
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

            </div>


            <!-- Image -->

            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Book Cover Image
                </label>

                <div class="upload-box">

                    <input type="file"
                           name="book_image"
                           class="form-control">

                </div>

            </div>


            <!-- Description -->

            <div class="col-md-12 mb-4">

                <label class="form-label">
                    Description
                </label>

                <textarea name="description"
                          class="form-control"
                          rows="5"
                          placeholder="Write book description..."></textarea>

            </div>


            <!-- Submit -->

            <div class="col-md-12 text-center">

                <button type="submit"
                        class="submit-btn">

                    Upload Book

                </button>

            </div>

        </div>

    </form>

</div>


</div>

</body>

</html>

@endsection

