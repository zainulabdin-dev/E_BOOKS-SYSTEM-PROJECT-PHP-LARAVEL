@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Insert Author</title>

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

    /* PAGE */

    .author-page {
        min-height: 85vh;
        background: var(--bookim-bg);
        padding: 40px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* CARD */

    .author-card {
        width: 100%;
        max-width: 650px;
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 18px;
        padding: 35px;
        box-shadow: 0 12px 35px rgba(8, 8, 45, 0.08);
        position: relative;
    }

    /* GREEN TOP LINE */

    .author-card::before {
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

    /* ICON */

    .author-icon {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--bookim-light-green);
        border: 1px solid #d2e6d0;
        border-radius: 12px;
        color: var(--bookim-green-dark);
        font-size: 23px;
        margin-bottom: 16px;
    }

    /* TITLE */

    .author-title {
        color: var(--bookim-navy);
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 8px;
        letter-spacing: .3px;
    }

    .author-subtitle {
        color: var(--bookim-gray);
        font-size: 14px;
        margin-bottom: 28px;
    }

    /* LABEL */

    .form-label {
        color: var(--bookim-navy);
        font-weight: 600;
        margin-bottom: 8px;
    }

    /* INPUT */

    .author-input,
    .author-textarea {
        background: #ffffff !important;
        border: 1px solid var(--bookim-border) !important;
        color: var(--bookim-navy) !important;
        border-radius: 10px !important;
        padding: 12px 14px;
        transition: .25s;
    }

    .author-input::placeholder,
    .author-textarea::placeholder {
        color: #9b9b9b;
    }

    .author-input:focus,
    .author-textarea:focus {
        background: #ffffff !important;
        border-color: var(--bookim-green) !important;
        box-shadow: 0 0 0 0.2rem rgba(123, 181, 121, .18) !important;
        color: var(--bookim-navy) !important;
    }

    /* TEXTAREA */

    .author-textarea {
        min-height: 140px;
        resize: vertical;
    }

    /* ERROR */

    .error-message {
        color: #dc3545;
        font-size: 13px;
        margin-top: 6px;
        margin-bottom: 0;
    }

    /* BUTTON */

    .submit-btn {
        width: 100%;
        background: var(--bookim-navy);
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-size: 15px;
        font-weight: 600;
        margin-top: 22px;
        transition: .3s;
    }

    .submit-btn:hover {
        background: var(--bookim-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 7px 18px rgba(104, 167, 104, .25);
    }

    /* RESPONSIVE */

    @media(max-width: 767.98px) {

        .author-page {
            padding: 25px 12px;
        }

        .author-card {
            padding: 28px 22px;
            margin: 10px auto;
        }

        .author-title {
            font-size: 24px;
        }

    }

    @media(max-width: 480px) {

        .author-page {
            padding: 20px 8px;
        }

        .author-card {
            padding: 25px 18px;
            border-radius: 14px;
        }

        .author-title {
            font-size: 22px;
        }

        .author-subtitle {
            font-size: 13px;
        }

        .author-input,
        .author-textarea {
            font-size: 14px;
        }

        .submit-btn {
            font-size: 14px;
        }

    }

</style>


</head>

<body>

<div class="author-page">

<div class="author-card">

    <!-- ICON -->

    <div class="author-icon">
        ✍️
    </div>


    <!-- TITLE -->

    <h1 class="author-title">
        INSERT AUTHOR
    </h1>

    <p class="author-subtitle">
        Add a new author to your publishing system.
    </p>


    <!-- FORM -->

    <form action="{{route('addauthor')}}" method="post">

        @csrf


        <!-- AUTHOR NAME -->

        <div class="mb-3">

            <label class="form-label">
                Author Name
            </label>

            <input type="text"
                   placeholder="ENTER NAME"
                   name="authorname"
                   class="form-control author-input"
                   value="{{old('authorname')}}">

            @error('authorname')

                <p class="error-message">
                    {{$message}}
                </p>

            @enderror

        </div>


        <!-- AUTHOR DETAILS -->

        <div class="mb-3">

            <label class="form-label">
                Author Details
            </label>

            <textarea name="detail"
                      class="form-control author-textarea"
                      placeholder="ENTER AUTHOR DETAILS"></textarea>

            @error('detail')

                <p class="error-message">
                    {{$message}}
                </p>

            @enderror

        </div>


        <!-- BUTTON -->

        <button type="submit" class="submit-btn">
            ADD AUTHOR
        </button>
        
      
    </form>
  <a type="submit" class=" btn submit-btn w-25 text-center" style="margin-left: 220px;" href="{{route('allauthor')}}">
            ALL_AUTHOR        </a>

</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>

@endsection

