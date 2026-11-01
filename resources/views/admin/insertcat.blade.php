
@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Insert Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

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

        .category-wrapper {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px 15px;
        }

        .category-card {
            width: 100%;
            max-width: 650px;
            background: #ffffff;
            border: 1px solid var(--bookim-border);
            border-radius: 18px;
            padding: 38px;
            box-shadow: 0 12px 35px rgba(8, 8, 45, 0.08);
            position: relative;
        }

        /* TOP GREEN LINE */

        .category-card::before {
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

        /* HEADING */

        .category-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .category-title h1 {
            color: var(--bookim-navy);
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .category-title h1 span {
            color: var(--bookim-green) !important;
        }

        .category-title p {
            color: var(--bookim-gray);
            font-size: 14px;
            margin: 0;
        }

        /* LABEL */

        .form-label {
            color: var(--bookim-navy);
            font-weight: 600;
            margin-bottom: 8px;
        }

        .field-icon {
            color: var(--bookim-green-dark);
            margin-right: 6px;
        }

        /* INPUT */

        .form-control {
            background: #ffffff;
            border: 1px solid var(--bookim-border);
            color: var(--bookim-navy);
            border-radius: 10px;
            padding: 12px 14px;
            transition: 0.25s;
        }

        .form-control:focus {
            background: #ffffff;
            color: var(--bookim-navy);
            border-color: var(--bookim-green);
            box-shadow: 0 0 0 0.2rem rgba(123, 181, 121, 0.18);
        }

        .form-control::placeholder {
            color: #9b9b9b;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* BUTTON */

        .submit-btn {
            width: 100%;
            background: var(--bookim-navy);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: var(--bookim-green-dark);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(104, 167, 104, 0.25);
        }

        /* ERROR */

        .error-message {
            color: #dc3545;
            font-size: 13px;
            margin-top: 6px;
            margin-bottom: 0;
        }

        /* RESPONSIVE */

        @media (max-width: 576px) {

            .category-wrapper {
                padding: 25px 10px;
            }

            .category-card {
                padding: 28px 20px;
                border-radius: 14px;
            }

            .category-title h1 {
                font-size: 23px;
            }

            .category-title {
                margin-bottom: 24px;
            }

            .form-control {
                font-size: 14px;
            }

            .submit-btn {
                font-size: 15px;
            }
        }

    </style>

</head>

<body>

<div class="container-fluid category-wrapper">

    <div class="category-card">

        <!-- Heading -->

        <div class="category-title">

            <h1>
                <span>✦</span>
                INSERT CATEGORY
            </h1>

            <p>
                Add a new book category to your system
            </p>

        </div>


        <!-- Form -->

        <form action="{{route('insertcategory')}}" method="post">

            @csrf


            <!-- Category Name -->

            <div class="mb-3">

                <label class="form-label">

                    <span class="field-icon">✦</span>

                    Category Name

                </label>

                <input
                    type="text"
                    placeholder="ENTER NAME"
                    name="catname"
                    class="form-control"
                    value="{{old('username')}}"
                >

                @error('username')

                    <p class="error-message">
                        {{$message}}
                    </p>

                @enderror

            </div>


            <!-- Description -->

            <div class="mb-3">

                <label class="form-label">

                    <span class="field-icon">✎</span>

                    Description

                </label>

                <textarea
                    name="description"
                    class="form-control"
                    placeholder="ENTER DESCRIPTION"
                ></textarea>

                @error('description')

                    <p class="error-message">
                        {{$message}}
                    </p>

                @enderror

            </div>


            <!-- Submit -->

            <button type="submit" class="submit-btn">

                ADD CATEGORY

            </button>

        </form>

    </div>

</div>

</body>

</html>

@endsection

