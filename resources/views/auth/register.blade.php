
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | E_BOOK</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap"
          rel="stylesheet">

    <style>

        :root {
            --navy: #08082D;
            --green: #7BB579;
            --green-dark: #68A768;
            --light-green: #EAF4E8;
            --bg: #F4F8F3;
            --text: #39463F;
            --gray: #7A847E;
            --border: #DDE8DF;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Inter", sans-serif;
            background:
                radial-gradient(circle at 10% 10%, #EAF4E8 0, transparent 30%),
                radial-gradient(circle at 90% 90%, #E5F1E5 0, transparent 30%),
                var(--bg);
            color: var(--navy);
        }


        /* =========================
           MAIN
        ========================= */

        .register-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }


        /* =========================
           CARD
        ========================= */

        .register-card {
            width: 100%;
            max-width: 920px;
            background: var(--white);
            border-radius: 28px;
            padding: 12px;
            box-shadow: 0 25px 70px rgba(8, 8, 45, 0.10);
            display: flex;
            gap: 12px;
        }


        /* =========================
           BRAND PANEL
        ========================= */

        .brand-panel {
            width: 40%;
            min-height: 650px;
            background: var(--navy);
            border-radius: 22px;
            padding: 45px 38px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand-panel::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: rgba(123, 181, 121, 0.12);
            right: -140px;
            top: -80px;
        }

        .brand-panel::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            border: 35px solid rgba(123, 181, 121, 0.06);
            left: -120px;
            bottom: -100px;
        }


        /* =========================
           LOGO
        ========================= */

        .logo-box {
            width: 62px;
            height: 62px;
            border-radius: 18px;
            background: var(--green);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
            box-shadow: 0 12px 25px rgba(123, 181, 121, 0.20);
        }

        .logo-box i {
            font-size: 28px;
            color: white;
        }


        /* =========================
           BRAND TEXT
        ========================= */

        .brand-content {
            position: relative;
            z-index: 2;
        }

        .brand-content h1 {
            font-family: "Poppins", sans-serif;
            font-size: 38px;
            line-height: 1.2;
            font-weight: 700;
            color: white;
            margin-bottom: 18px;
        }

        .brand-content h1 span {
            color: var(--green);
        }

        .brand-content p {
            color: rgba(255,255,255,0.68);
            font-size: 14px;
            line-height: 1.8;
            margin: 0;
        }


        /* =========================
           BOTTOM INFO
        ========================= */

        .brand-bottom {
            position: relative;
            z-index: 2;
        }

        .brand-line {
            width: 45px;
            height: 4px;
            border-radius: 5px;
            background: var(--green);
            margin-bottom: 16px;
        }

        .brand-bottom h6 {
            color: white;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .brand-bottom small {
            color: rgba(255,255,255,0.55);
            font-size: 12px;
        }


        /* =========================
           FORM PANEL
        ========================= */

        .form-panel {
            width: 60%;
            padding: 45px 55px;
            display: flex;
            align-items: center;
        }

        .form-content {
            width: 100%;
            max-width: 440px;
            margin: auto;
        }


        /* =========================
           HEADER
        ========================= */

        .form-header {
            margin-bottom: 30px;
        }

        .form-header .small-title {
            color: var(--green-dark);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .form-header h2 {
            font-family: "Poppins", sans-serif;
            font-size: 30px;
            font-weight: 700;
            color: var(--navy);
            margin: 0 0 7px;
        }

        .form-header p {
            color: var(--gray);
            font-size: 13px;
            margin: 0;
        }


        /* =========================
           FORM GROUP
        ========================= */

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            color: var(--text);
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-label i {
            color: var(--green);
            margin-right: 5px;
        }


        /* =========================
           INPUT
        ========================= */

        .input-box {
            position: relative;
        }

        .input-box > i {
            position: absolute;
            left: 17px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--green-dark);
            font-size: 14px;
            z-index: 2;
        }

        .form-control {
            height: 50px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: #F8FAF8;
            padding-left: 46px;
            padding-right: 15px;
            color: var(--navy);
            font-size: 13px;
            box-shadow: none;
            transition: all 0.2s ease;
        }

        .form-control:hover {
            border-color: #BFD5C3;
        }

        .form-control:focus {
            background: white;
            border-color: var(--green);
            box-shadow: 0 0 0 4px rgba(123,181,121,0.12);
        }

        .form-control::placeholder {
            color: #A1AAA4;
            font-size: 12px;
        }

        select.form-control {
            cursor: pointer;
        }


        /* =========================
           ERROR
        ========================= */

        .error-message {
            color: #D9534F;
            font-size: 11px;
            margin: 6px 0 0;
        }


        /* =========================
           REGISTER BUTTON
        ========================= */

        .register-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 13px;
            background: var(--green);
            color: white;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-top: 5px;
            transition: all 0.25s ease;
            box-shadow: 0 10px 22px rgba(123,181,121,0.20);
        }

        .register-btn:hover {
            background: var(--green-dark);
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(123,181,121,0.28);
        }

        .register-btn i {
            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .register-card {
                max-width: 560px;
            }

            .brand-panel {
                display: none;
            }

            .form-panel {
                width: 100%;
                padding: 45px;
            }

        }


        @media (max-width: 500px) {

            .register-wrapper {
                padding: 15px;
            }

            .register-card {
                padding: 7px;
                border-radius: 20px;
            }

            .form-panel {
                padding: 30px 20px;
            }

            .form-header h2 {
                font-size: 26px;
            }

        }

    </style>

</head>


<body>


<div class="register-wrapper">

    <div class="register-card">


        <!-- =========================
             BRAND SIDE
        ========================== -->

        <div class="brand-panel">

            <div>

                <div class="logo-box">

                    <i class="fa-solid fa-book-open"></i>

                </div>

            </div>


            <div class="brand-content">

                <h1>
                    Welcome to
                    <span>E_BOOK</span>
                </h1>

                <p>
                    Create your account and step into
                    a world of books, stories and knowledge.
                </p>

            </div>


            <div class="brand-bottom">

                <div class="brand-line"></div>

                <h6>
                    Read. Discover. Explore.
                </h6>

                <small>
                    Your digital library starts here.
                </small>

            </div>

        </div>


        <!-- =========================
             FORM SIDE
        ========================== -->

        <div class="form-panel">

            <div class="form-content">


                <div class="form-header">

                    <div class="small-title">
                        E_BOOK MEMBERSHIP
                    </div>

                    <h2>
                        Create Account
                    </h2>

                    <p>
                        Fill in your details to create your account.
                    </p>

                </div>


                <!-- ORIGINAL FORM LOGIC -->

                <form action="{{route('userregister')}}" method="post">

                    @csrf


                    <!-- NAME -->

                    <div class="form-group">

                        <label class="form-label">

                            <i class="fa-solid fa-user"></i>
                            Name

                        </label>

                        <div class="input-box">

                            <i class="fa-solid fa-user"></i>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                placeholder="Enter your name"
                                value="{{old('username')}}"
                            >

                        </div>

                        @error('username')

                            <p class="error-message">
                                {{$message}}
                            </p>

                        @enderror

                    </div>


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label class="form-label">

                            <i class="fa-solid fa-envelope"></i>
                            Email

                        </label>

                        <div class="input-box">

                            <i class="fa-solid fa-envelope"></i>

                            <input
                                type="text"
                                name="usermail"
                                class="form-control"
                                placeholder="Enter your email"
                                value="{{old('usermail')}}"
                            >

                        </div>

                        @error('usermail')

                            <p class="error-message">
                                {{$message}}
                            </p>

                        @enderror

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label class="form-label">

                            <i class="fa-solid fa-lock"></i>
                            Password

                        </label>

                        <div class="input-box">

                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                name="userpass"
                                class="form-control"
                                placeholder="Create a password"
                                value="{{old('userpass')}}"
                            >

                        </div>

                        @error('userpass')

                            <p class="error-message">
                                {{$message}}
                            </p>

                        @enderror

                    </div>


                    <!-- ROLE -->

                    


                    <!-- REGISTER -->

                    <button
                        type="submit"
                        class="register-btn"
                    >

                        <i class="fa-solid fa-user-plus me-2"></i>

                        CREATE ACCOUNT

                    </button>


                </form>


            </div>

        </div>


    </div>

</div>


</body>

</html>

