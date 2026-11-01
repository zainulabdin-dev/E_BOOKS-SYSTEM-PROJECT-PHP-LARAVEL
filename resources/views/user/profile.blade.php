@extends('user.navbar')

@section('nav')

<head>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
</head>

<style>

    .profile-section {
        min-height: 70vh;
        padding: 70px 15px;
        background: #f8f7fc;
    }

    .profile-container {
        max-width: 680px;
        margin: 0 auto;
    }

    .profile-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 45px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.07);
    }

    /* Heading */
    .profile-heading {
        text-align: center;
        margin-bottom: 35px;
    }

    .profile-icon {
        width: 75px;
        height: 75px;
        margin: 0 auto 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;

        background: #e8f5ee;
        color: #198754;

        font-size: 38px;
    }

    .profile-heading h2 {
        margin: 0 0 8px;
        font-size: 30px;
        font-weight: 700;
        color: #222;
    }

    .profile-heading p {
        margin: 0;
        color: #777;
        font-size: 15px;
    }

    /* Profile Information */
    .profile-info {
        padding: 18px 20px;
        margin-bottom: 18px;

        border: 1px solid #e8e8e8;
        border-radius: 8px;

        background: #fafafa;
    }

    .profile-info label {
        display: block;
        margin-bottom: 6px;

        font-size: 13px;
        color: #888;
        font-weight: 500;
    }

    .profile-info h5 {
        margin: 0;

        color: #222;
        font-size: 17px;
        font-weight: 600;

        word-break: break-word;
    }

    /* Logout Button */
    .profile-logout {
        width: 100%;

        border: 0;
        border-radius: 7px;

        padding: 14px 20px;

        background: #198754;
        color: #fff;

        font-size: 16px;
        font-weight: 600;

        cursor: pointer;

        transition: all 0.3s ease;
    }

    .profile-logout:hover {
        background: #146c43;
        color: #fff;
        transform: translateY(-1px);
    }

    .profile-logout i {
        margin-right: 8px;
    }


    /* Mobile */
    @media (max-width: 576px) {

        .profile-section {
            padding: 45px 15px;
        }

        .profile-card {
            padding: 30px 20px;
        }

        .profile-heading h2 {
            font-size: 25px;
        }

    }

</style>


<section class="profile-section">

    <div class="profile-container">

        <div class="profile-card">

            <!-- Profile Heading -->
            <div class="profile-heading">

                <div class="profile-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <h2>My Profile</h2>

                <p>Manage your account information</p>

            </div>


            <!-- Name -->
            <div class="profile-info">

                <label>Full Name</label>

                <h5>
                    {{ $profile->name }}
                </h5>

            </div>


            <!-- Email -->
            <div class="profile-info">

                <label>Email Address</label>

                <h5>
                    {{ $profile->email }}
                </h5>

            </div>


            <!-- Logout -->
            <form action="{{route('logout',$profile->id)}}" method="POST">

                @csrf

                <button type="submit" class="profile-logout">

                    <i class="fa-solid fa-right-from-bracket"></i>

                    Logout

                </button>

            </form>

        </div>

    </div>

</section>

@endsection