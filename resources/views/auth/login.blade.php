
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | E_BOOK</title>

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
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Inter", sans-serif;
            background:
                radial-gradient(circle at 90% 10%, #EAF4E8 0, transparent 28%),
                radial-gradient(circle at 10% 90%, #E6F2E6 0, transparent 30%),
                var(--bg);
            color: var(--navy);
        }


        /* =========================
           WRAPPER
        ========================== */

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
        }


        /* =========================
           MAIN CARD
        ========================== */

        .login-card {
            width: 100%;
            max-width: 850px;
            background: #ffffff;
            border-radius: 30px;
            padding: 10px;
            box-shadow: 0 25px 65px rgba(8, 8, 45, 0.10);
            display: flex;
        }


        /* =========================
           LEFT BRAND AREA
        ========================== */

        .login-brand {
            width: 45%;
            min-height: 570px;
            background: var(--navy);
            border-radius: 23px;
            padding: 45px 40px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .login-brand::before {
            content: "";
            position: absolute;
            width: 330px;
            height: 330px;
            border-radius: 50%;
            background: rgba(123,181,121,0.10);
            right: -180px;
            top: -120px;
        }

        .login-brand::after {
            content: "";
            position: absolute;
            width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 35px solid rgba(123,181,121,0.06);
            left: -130px;
            bottom: -100px;
        }


        /* =========================
           LOGO
        ========================== */

        .brand-logo {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            background: var(--green);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
            box-shadow: 0 12px 25px rgba(123,181,121,0.20);
        }

        .brand-logo i {
            color: white;
            font-size: 29px;
        }


        /* =========================
           BRAND CONTENT
        ========================== */

        .brand-content {
            position: relative;
            z-index: 2;
        }

        .brand-tag {
            display: inline-block;
            color: var(--green);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 12px;
        }

        .brand-content h1 {
            color: white;
            font-family: "Poppins", sans-serif;
            font-size: 35px;
            line-height: 1.25;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .brand-content h1 span {
            color: var(--green);
        }

        .brand-content p {
            color: rgba(255,255,255,0.67);
            font-size: 13px;
            line-height: 1.8;
            margin: 0;
        }


        /* =========================
           BRAND FOOTER
        ========================== */

        .brand-footer {
            position: relative;
            z-index: 2;
        }

        .quote-line {
            width: 42px;
            height: 4px;
            background: var(--green);
            border-radius: 5px;
            margin-bottom: 12px;
        }

        .brand-footer span {
            color: rgba(255,255,255,0.58);
            font-size: 12px;
        }


        /* =========================
           RIGHT FORM
        ========================== */

        .login-form-area {
            width: 55%;
            padding: 55px 60px;
            display: flex;
            align-items: center;
        }

        .login-content {
            width: 100%;
            max-width: 390px;
            margin: auto;
        }


        /* =========================
           HEADER
        ========================== */

        .login-header {
            margin-bottom: 30px;
        }

        .login-header .mini-title {
            color: var(--green-dark);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 7px;
        }

        .login-header h2 {
            font-family: "Poppins", sans-serif;
            color: var(--navy);
            font-size: 30px;
            font-weight: 700;
            margin: 0 0 8px;
        }

        .login-header p {
            color: var(--gray);
            font-size: 13px;
            margin: 0;
        }


        /* =========================
           FORM
        ========================== */

        .field {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            color: var(--text);
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-label i {
            color: var(--green-dark);
            margin-right: 5px;
        }


        /* =========================
           INPUT
        ========================== */

        .input-container {
            position: relative;
        }

        .input-container > i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--green-dark);
            font-size: 14px;
            z-index: 2;
        }

        .form-control {
            width: 100%;
            height: 52px;
            border: 1px solid var(--border);
            border-radius: 13px;
            background: #F8FAF8;
            padding: 10px 15px 10px 45px;
            color: var(--navy);
            font-size: 13px;
            transition: all 0.25s ease;
        }

        .form-control:hover {
            border-color: #BDD2C1;
        }

        .form-control:focus {
            background: #ffffff;
            border-color: var(--green);
            box-shadow: 0 0 0 4px rgba(123,181,121,0.12);
            color: var(--navy);
        }

        .form-control::placeholder {
            color: #A2AAA5;
            font-size: 12px;
        }


        /* =========================
           ERROR
        ========================== */

        .error-message {
            color: #D9534F;
            font-size: 11px;
            margin: 6px 0 0;
        }


        /* =========================
           LOGIN BUTTON
        ========================== */

        .login-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 13px;
            background: var(--green);
            color: white;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-top: 2px;
            transition: all 0.25s ease;
            box-shadow: 0 10px 22px rgba(123,181,121,0.20);
        }

        .login-btn:hover {
            background: var(--green-dark);
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(123,181,121,0.28);
        }

        .login-btn i {
            margin-right: 7px;
        }


        /* =========================
           BOTTOM
        ========================== */

        .login-bottom {
            text-align: center;
            margin-top: 24px;
            color: var(--gray);
            font-size: 12px;
        }

        .login-bottom span {
            color: var(--green-dark);
            font-weight: 600;
        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 800px) {

            .login-card {
                max-width: 550px;
            }

            .login-brand {
                display: none;
            }

            .login-form-area {
                width: 100%;
                padding: 50px 45px;
            }

        }


        @media (max-width: 500px) {

            .login-wrapper {
                padding: 15px;
            }

            .login-card {
                border-radius: 21px;
                padding: 6px;
            }

            .login-form-area {
                padding: 35px 20px;
            }

            .login-header h2 {
                font-size: 26px;
            }

            .form-control,
            .login-btn {
                height: 49px;
            }

        }

    </style>

</head>


<body>


<div class="login-wrapper">

    <div class="login-card">


        <!-- =========================
             BRAND PANEL
        ========================== -->

        <div class="login-brand">

            <div class="brand-logo">

                <i class="fa-solid fa-book-open"></i>

            </div>


            <div class="brand-content">

                <span class="brand-tag">
                    DIGITAL BOOK LIBRARY
                </span>

                <h1>
                    Your stories,
                    <span>your world.</span>
                </h1>

                <p>
                    Login to continue exploring books,
                    discovering authors and building
                    your personal reading collection.
                </p>

            </div>


            <div class="brand-footer">

                <div class="quote-line"></div>

                <span>
                    Read something new every day.
                </span>

            </div>

        </div>


        <!-- =========================
             LOGIN FORM
        ========================== -->

        <div class="login-form-area">

            <div class="login-content">


                <div class="login-header">

                    <div class="mini-title">
                        E_BOOK ACCOUNT
                    </div>

                    <h2>
                        Welcome Back
                    </h2>

                    <p>
                        Enter your details to access your account.
                    </p>

                </div>


                <!-- ORIGINAL FORM -->

                <form action="{{route('userlogin')}}" method="post">

                    @csrf


                    <!-- EMAIL -->

                    <div class="field">

                        <label class="form-label">

                            <i class="fa-solid fa-envelope"></i>
                            Email

                        </label>

                        <div class="input-container">

                            <i class="fa-solid fa-envelope"></i>

                            <input
                                type="text"
                                placeholder="Enter your email"
                                name="usermail"
                                class="form-control"
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

                    <div class="field">

                        <label class="form-label">

                            <i class="fa-solid fa-lock"></i>
                            Password

                        </label>

                        <div class="input-container">

                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                placeholder="Enter your password"
                                name="userpass"
                                class="form-control"
                                value="{{old('userpass')}}"
                            >

                        </div>

                        @error('userpass')

                            <p class="error-message">
                                {{$message}}
                            </p>

                        @enderror

                    </div>


                    <!-- LOGIN -->

                    <button
                        type="submit"
                        class="login-btn"
                    >

                        <i class="fa-solid fa-right-to-bracket"></i>

                        SIGN IN

                    </button>


                </form>


                <div class="login-bottom">

                    Secure access to your
                    <span>E_BOOK</span> account.

                </div>


            </div>

        </div>


    </div>

</div>


</body>

</html>

