
@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

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

        .edit-wrapper {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }

        .edit-card {
            width: 100%;
            max-width: 650px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 38px;
            box-shadow: 0 15px 40px rgba(8, 8, 45, 0.08);
        }


        /* =========================
           HEADER
        ========================== */

        .edit-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .edit-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: var(--light-green);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit-icon i {
            color: var(--green-dark);
            font-size: 25px;
        }

        .edit-title h1 {
            color: var(--navy);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .edit-title p {
            color: var(--gray);
            font-size: 14px;
            margin: 0;
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

        .field-icon {
            color: var(--green-dark);
            margin-right: 6px;
        }

        .form-control {
            background: #fff;
            border: 1px solid var(--border);
            color: var(--navy);
            border-radius: 10px;
            padding: 12px 14px;
            min-height: 50px;
            font-size: 14px;
            transition: 0.3s;
        }

        .form-control:focus {
            background: #fff;
            color: var(--navy);
            border-color: var(--green);
            box-shadow: 0 0 0 0.2rem rgba(123, 181, 121, 0.15);
        }

        .form-control::placeholder {
            color: #aaa;
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
           UPDATE BUTTON
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
            margin-top: 10px;
            transition: 0.3s;
        }

        .update-btn:hover {
            background: var(--green-dark);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(123, 181, 121, 0.22);
        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 576px) {

            .edit-wrapper {
                padding: 20px 10px;
            }

            .edit-card {
                padding: 25px 18px;
                border-radius: 15px;
            }

            .edit-title h1 {
                font-size: 23px;
            }

            .edit-icon {
                width: 55px;
                height: 55px;
            }

            .edit-icon i {
                font-size: 21px;
            }

            .form-control {
                min-height: 48px;
            }

        }

    </style>

</head>

<body>

<div class="container-fluid edit-wrapper">

    <div class="edit-card">

        <!-- Header -->

        <div class="edit-title">

            <div class="edit-icon">

                <i class="fa-solid fa-user-pen"></i>

            </div>

            <h1>
                EDIT USER
            </h1>

            <p>
                Update user account information
            </p>

        </div>


        <!-- Form -->

        <form action="{{route('updated',$data->id)}}" method="post">

            @csrf


            <!-- Name -->

            <div class="mb-3">

                <label class="form-label">

                    <span class="field-icon">

                        <i class="fa-solid fa-user"></i>

                    </span>

                    Name

                </label>

                <input
                    type="text"
                    placeholder="ENTER NAME"
                    name="username"
                    class="form-control"
                    value="{{$data->name}}"
                >

                @error('usermail')

                    <p class="error-message">
                        {{$message}}
                    </p>

                @enderror

            </div>


            <!-- Email -->

            <div class="mb-3">

                <label class="form-label">

                    <span class="field-icon">

                        <i class="fa-solid fa-envelope"></i>

                    </span>

                    Email

                </label>

                <input
                    type="text"
                    placeholder="ENTER MAIL"
                    name="usermail"
                    class="form-control"
                    value="{{$data->email}}"
                >

                @error('usermail')

                    <p class="error-message">
                        {{$message}}
                    </p>

                @enderror

            </div>


            <!-- Password -->

            <div class="mb-3">

                <label class="form-label">

                    <span class="field-icon">

                        <i class="fa-solid fa-lock"></i>

                    </span>

                    Password

                </label>

                <input
                    type="password"
                    placeholder="ENTER PASSWORD"
                    name="userpass"
                    class="form-control"
                    value="{{$data->password}}"
                >

                @error('userpass')

                    <p class="error-message">
                        {{$message}}
                    </p>

                @enderror

            </div>


            <!-- Submit -->

            <button type="submit" class="update-btn">

                <i class="fa-solid fa-floppy-disk me-2"></i>

                UPDATE USER

            </button>

        </form>

    </div>

</div>

</body>
</html>

@endsection

