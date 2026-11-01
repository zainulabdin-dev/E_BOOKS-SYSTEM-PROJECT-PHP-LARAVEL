
@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Author</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

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
            margin: 0;
            background: var(--bg);
            color: var(--navy);
        }


        /* =========================
           PAGE
        ========================== */

        .author-page {
            min-height: 100vh;
            background: var(--bg);
            padding: 45px 20px;
        }


        /* =========================
           CARD
        ========================== */

        .author-card {
            width: 100%;
            max-width: 650px;
            margin: 20px auto;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 12px 35px rgba(8, 8, 45, 0.07);
        }


        /* =========================
           ICON
        ========================== */

        .author-icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--light-green);
            border: 1px solid #cfe2cc;

            border-radius: 12px;

            color: var(--green-dark);
            font-size: 21px;

            margin-bottom: 17px;
        }


        /* =========================
           TITLE
        ========================== */

        .author-title {
            color: var(--navy);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .author-subtitle {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 28px;
        }


        /* =========================
           FORM
        ========================== */

        .form-label {
            color: var(--navy);
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }


        .author-input,
        .author-textarea {

            background: #fff !important;

            border: 1px solid var(--border) !important;

            color: var(--navy) !important;

            border-radius: 10px !important;

            padding: 12px 14px;

            font-size: 14px;

            transition: 0.3s;

        }


        .author-input {
            min-height: 50px;
        }


        .author-input:focus,
        .author-textarea:focus {

            background: #fff !important;

            border-color: var(--green) !important;

            color: var(--navy) !important;

            box-shadow:
                0 0 0 3px rgba(123, 181, 121, 0.14) !important;

        }


        .author-input::placeholder,
        .author-textarea::placeholder {
            color: #aaa;
        }


        /* =========================
           TEXTAREA
        ========================== */

        .author-textarea {

            min-height: 150px;

            resize: vertical;

        }


        /* =========================
           ERROR
        ========================== */

        .error-message {

            color: #dc3545;

            font-size: 13px;

            margin-top: 6px;

            margin-bottom: 0;

        }


        /* =========================
           BUTTON
        ========================== */

        .update-btn {

            width: 100%;

            background: var(--green);

            color: #fff;

            border: none;

            border-radius: 10px;

            padding: 13px;

            font-size: 15px;

            font-weight: 600;

            margin-top: 22px;

            transition: 0.3s;

        }


        .update-btn:hover {

            background: var(--green-dark);

            color: #fff;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(123, 181, 121, 0.22);

        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media(max-width: 767.98px) {

            .author-page {
                padding: 25px 12px;
            }

            .author-card {
                padding: 25px 20px;
                margin: 10px auto;
            }

            .author-title {
                font-size: 24px;
            }

        }


        @media(max-width: 480px) {

            .author-page {
                padding: 18px 8px;
            }

            .author-card {
                padding: 22px 16px;
                border-radius: 14px;
            }

            .author-title {
                font-size: 22px;
            }

            .author-icon {
                width: 50px;
                height: 50px;
                font-size: 19px;
            }

        }

    </style>

</head>


<body>

<div class="author-page">

    <div class="author-card">

        <!-- ICON -->

        <div class="author-icon">

            <i class="fa-solid fa-user-pen"></i>

        </div>


        <!-- TITLE -->

        <h1 class="author-title">

            EDIT AUTHOR

        </h1>


        <p class="author-subtitle">

            Update the author's information below.

        </p>


        <!-- FORM -->

        <form action="{{route('updateauthor',$data->id)}}" method="post">

            @csrf


            <!-- AUTHOR NAME -->

            <div class="mb-3">

                <label class="form-label">

                    Author Name

                </label>

                <input
                    type="text"
                    placeholder="ENTER NAME"
                    name="authorname"
                    class="form-control author-input"
                    value="{{$data->name}}"
                >

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

                <textarea
                    name="detail"
                    class="form-control author-textarea"
                    placeholder="ENTER AUTHOR DETAILS">{{$data->detail}}</textarea>

                @error('detail')

                    <p class="error-message">
                        {{$message}}
                    </p>

                @enderror

            </div>


            <!-- UPDATE -->

            <button class="update-btn">

                <i class="fa-solid fa-floppy-disk me-2"></i>

                Update Author

            </button>

        </form>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>

</body>
</html>

@endsection

