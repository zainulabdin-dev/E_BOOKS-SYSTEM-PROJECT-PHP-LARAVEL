
@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Users</title>

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

        .users-wrapper {
            padding: 30px 25px;
        }


        /* =========================
           HEADER
        ========================== */

        .users-header {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px 25px;
            margin-bottom: 22px;
            box-shadow: 0 7px 25px rgba(8, 8, 45, 0.06);
        }

        .users-header h1 {
            margin: 0;
            font-size: 27px;
            font-weight: 700;
            color: var(--navy);
        }

        .users-header h1 i {
            color: var(--green-dark);
        }


        /* =========================
           SUCCESS MESSAGE
        ========================== */

        .success-message {
            background: var(--light-green);
            border: 1px solid #c8e0c5;
            color: #3f7040;
            border-radius: 10px;
            margin-bottom: 22px;
        }

        .success-message strong {
            color: var(--green-dark);
        }


        /* =========================
           USER CARD
        ========================== */

        .user-card {
            height: 100%;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 17px;
            padding: 22px;
            transition: all 0.3s ease;
            box-shadow: 0 7px 22px rgba(8, 8, 45, 0.055);
        }

        .user-card:hover {
            transform: translateY(-5px);
            border-color: var(--green);
            box-shadow: 0 13px 30px rgba(123, 181, 121, 0.15);
        }


        /* =========================
           USER TOP
        ========================== */

        .user-top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 56px;
            height: 56px;
            min-width: 56px;
            border-radius: 50%;
            background: var(--light-green);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-avatar i {
            color: var(--green-dark);
            font-size: 23px;
        }

        .user-name {
            font-size: 19px;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 3px;
        }

        .user-id {
            color: #999;
            font-size: 12px;
            font-weight: 500;
        }


        /* =========================
           USER INFO
        ========================== */

        .user-info {
            border-top: 1px solid var(--border);
            padding-top: 17px;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 13px;
            color: var(--gray);
            font-size: 14px;
            word-break: break-word;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-row i {
            width: 18px;
            color: var(--green-dark);
            text-align: center;
            flex-shrink: 0;
        }


        /* =========================
           ROLE
        ========================== */

        .role-badge {
            display: inline-block;
            background: var(--light-green);
            color: #568b56;
            border: 1px solid #cde2ca;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .password-box {
            color: #aaa;
            letter-spacing: 2px;
        }


        /* =========================
           ACTIONS
        ========================== */

        .card-actions {
            border-top: 1px solid var(--border);
            padding-top: 15px;
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
            gap: 9px;
        }

        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }


        /* EDIT */

        .edit-btn {
            background: var(--light-green);
            color: var(--green-dark);
        }

        .edit-btn:hover {
            background: var(--green);
            color: #fff;
            transform: translateY(-2px);
        }


        /* DELETE */

        .delete-btn {
            background: #fff0f2;
            color: #dc5570;
        }

        .delete-btn:hover {
            background: #dc5570;
            color: #fff;
            transform: translateY(-2px);
        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 991px) {

            .users-wrapper {
                padding: 25px 18px;
            }

        }

        @media (max-width: 576px) {

            .users-wrapper {
                padding: 20px 10px;
            }

            .users-header {
                padding: 18px;
            }

            .users-header h1 {
                font-size: 22px;
            }

            .user-card {
                padding: 18px;
            }

            .user-name {
                font-size: 17px;
            }

        }

    </style>
</head>

<body>

<div class="container-fluid users-wrapper">

    <!-- HEADER -->

    <div class="users-header">

        <h1>

            <i class="fa-solid fa-users me-2"></i>

            ALL USERS

        </h1>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="alert success-message alert-dismissible fade show"
             role="alert">

            <strong>

                <i class="fa-solid fa-circle-check me-1"></i>

                MESSAGE.....

            </strong>

            {{session('success')}}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>

        </div>

    @endif


    <!-- USERS -->

    <div class="row g-4">

        @foreach($alluser as $user)

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                <div class="user-card">

                    <!-- USER HEADER -->

                    <div class="user-top">

                        <div class="user-avatar">

                            <i class="fa-solid fa-user"></i>

                        </div>

                        <div>

                            <div class="user-name">

                                {{$user->name}}

                            </div>

                            <div class="user-id">

                                USER #{{$user->id}}

                            </div>

                        </div>

                    </div>


                    <!-- USER INFORMATION -->

                    <div class="user-info">

                        <!-- EMAIL -->

                        <div class="info-row">

                            <i class="fa-solid fa-envelope"></i>

                            <span>
                                {{$user->email}}
                            </span>

                        </div>


                        <!-- PASSWORD -->

                        <div class="info-row">

                            <i class="fa-solid fa-lock"></i>

                            <span class="password-box">

                                • • • • • • • •

                            </span>

                        </div>


                        <!-- ROLE -->

                        <div class="info-row">

                            <i class="fa-solid fa-user-tag"></i>

                            <span class="role-badge">

                                {{$user->role}}

                            </span>

                        </div>

                    </div>


                    <!-- ACTIONS -->

                    <div class="card-actions">

                        <a href="{{route('useredit',$user->id)}}"
                           class="action-btn edit-btn"
                           title="Edit User">

                            <i class="fa-solid fa-pen-to-square"></i>

                        </a>


                        <a href="{{route('deletuser',$user->id)}}"
                           class="action-btn delete-btn"
                           title="Delete User">

                            <i class="fa-solid fa-trash"></i>

                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection

