
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Admin Dashboard">

    <title>Admin Dashboard</title>


    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="{{asset('user/aassets/css/bootstrap.min.css')}}">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="{{asset('user/aassets/vendors/bootstrap-icons/bootstrap-icons.css')}}">


    <!-- Existing CSS -->
    <link rel="stylesheet"
          href="{{asset('user/aassets/css/style.css')}}">


    <style>

        /* =====================================================
           ONLY GREEN COLOR SYSTEM
        ===================================================== */

        :root {

            --theme-green: #238b55;

            --theme-green-dark: #176b40;

            --theme-green-deep: #0f5c35;

            --theme-green-light: #e5f5eb;

            --theme-green-soft: #f1faf4;

            --theme-text: #26352d;

            --theme-muted: #718078;

            --theme-border: #d6e7dc;

            --theme-white: #ffffff;

        }


        /* =====================================================
           REMOVE DEFAULT PRIMARY / PURPLE / BLUE COLORS
        ===================================================== */

        .text-primary {
            color: var(--theme-green) !important;
        }


        .bg-primary {
            background-color: var(--theme-green) !important;
        }


        .border-primary {
            border-color: var(--theme-green) !important;
        }


        .btn-primary {
            background-color: var(--theme-green) !important;

            border-color: var(--theme-green) !important;

            color: #ffffff !important;
        }


        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: var(--theme-green-dark) !important;

            border-color: var(--theme-green-dark) !important;

            color: #ffffff !important;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .admin-sidebar {

            background: #ffffff !important;

            border-right: 2px solid var(--theme-green-light) !important;

            box-shadow:
                4px 0 22px rgba(35, 139, 85, 0.09);

            transition: transform 0.3s ease;

        }


        /* =====================================================
           SIDEBAR HEADER
        ===================================================== */

        .sidebar-header {

            padding: 22px 20px;

            border-bottom: 2px solid var(--theme-green-light);

            background:
                linear-gradient(
                    180deg,
                    #ffffff,
                    var(--theme-green-soft)
                );

        }


        .brand-mark {

            text-decoration: none;

            display: flex;

            align-items: center;

            gap: 12px;

        }


        /* =====================================================
           BRAND ICON
        ===================================================== */

        .brand-icon {

            width: 44px;

            height: 44px;

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    var(--theme-green),
                    var(--theme-green-dark)
                );

            color: #ffffff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;

            box-shadow:
                0 6px 16px rgba(35, 139, 85, 0.25);

        }


        .brand-copy {

            display: flex;

            flex-direction: column;

        }


        .brand-title {

            color: var(--theme-green-dark) !important;

            font-size: 19px;

            font-weight: 800;

            letter-spacing: 0.3px;

        }


        .brand-subtitle {

            color: var(--theme-muted);

            font-size: 11px;

            margin-top: 2px;

        }


        /* =====================================================
           NAVIGATION
        ===================================================== */

        .sidebar-nav {

            padding: 18px 12px;

        }


        .sidebar-nav .nav-link {

            display: flex;

            align-items: center;

            gap: 13px;

            margin-bottom: 6px;

            padding: 11px 14px;

            border-radius: 9px;

            color: #526059 !important;

            font-size: 14px;

            font-weight: 600;

            text-decoration: none;

            transition: all 0.25s ease;

        }


        /* =====================================================
           NAV ICON
        ===================================================== */

        .sidebar-nav .nav-icon {

            width: 29px;

            height: 29px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 17px;

            color: var(--theme-green) !important;

        }


        /* =====================================================
           HOVER
        ===================================================== */

        .sidebar-nav .nav-link:hover {

            background: var(--theme-green-light) !important;

            color: var(--theme-green-dark) !important;

            transform: translateX(3px);

        }


        .sidebar-nav .nav-link:hover .nav-icon {

            color: var(--theme-green-dark) !important;

        }


        /* =====================================================
           ACTIVE
        ===================================================== */

        .sidebar-nav .nav-link.active {

            background:
                linear-gradient(
                    90deg,
                    var(--theme-green),
                    #2fa866
                ) !important;

            color: #ffffff !important;

            box-shadow:
                0 6px 16px rgba(35, 139, 85, 0.25);

        }


        .sidebar-nav .nav-link.active .nav-icon {

            color: #ffffff !important;

        }


        /* =====================================================
           SIDEBAR USER
        ===================================================== */

        .sidebar-user {

            margin: 12px 15px;

            padding: 16px;

            background:
                linear-gradient(
                    135deg,
                    var(--theme-green-light),
                    #f7fcf9
                );

            border: 1px solid #cce3d4;

            border-left: 4px solid var(--theme-green);

            border-radius: 12px;

            display: flex;

            flex-direction: column;

            align-items: center;

            text-align: center;

        }


        .sidebar-user-avatar {

            margin-bottom: 9px;

            border: 3px solid #c8e8d3;

            box-shadow:
                0 4px 10px rgba(35, 139, 85, 0.15);

        }


        .sidebar-user strong {

            color: var(--theme-green-dark) !important;

            font-size: 14px;

        }


        .sidebar-user small {

            color: var(--theme-muted);

            font-size: 11px;

            margin-top: 3px;

        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .sidebar-footer {

            margin: 10px 15px 18px;

            padding: 12px;

            border-top: 1px solid var(--theme-border);

            display: flex;

            align-items: center;

            gap: 9px;

            color: var(--theme-muted);

            font-size: 11px;

        }


        .status-dot {

            width: 9px;

            height: 9px;

            background: var(--theme-green) !important;

            border-radius: 50%;

            display: inline-block;

            box-shadow:
                0 0 0 4px var(--theme-green-light);

        }


        /* =====================================================
           TOGGLE BUTTON
        ===================================================== */

        .sidebar-toggle-btn {

            position: fixed;

            top: 15px;

            left: 260px;

            width: 42px;

            height: 42px;

            border: none;

            border-radius: 9px;

            background:
                linear-gradient(
                    135deg,
                    var(--theme-green),
                    var(--theme-green-dark)
                ) !important;

            color: #ffffff !important;

            font-size: 20px;

            z-index: 9999;

            cursor: pointer;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: all 0.3s ease;

            box-shadow:
                0 6px 16px rgba(35, 139, 85, 0.28);

        }


        .sidebar-toggle-btn:hover {

            background:
                var(--theme-green-deep) !important;

            transform: translateY(-1px);

        }


        /* =====================================================
           HIDE SIDEBAR
        ===================================================== */

        .admin-shell.sidebar-hidden .admin-sidebar {

            transform: translateX(-100%);

        }


        .admin-shell.sidebar-hidden .sidebar-toggle-btn {

            left: 15px;

        }


        /* =====================================================
           SHELL
        ===================================================== */

        .admin-shell {

            background: var(--theme-green-soft);

            min-height: 100vh;

        }


        /* =====================================================
           BACKDROP
        ===================================================== */

        .sidebar-backdrop {

            background:
                rgba(15, 92, 53, 0.25) !important;

        }


        /* =====================================================
           SCROLLBAR
        ===================================================== */

        .admin-sidebar::-webkit-scrollbar {

            width: 6px;

        }


        .admin-sidebar::-webkit-scrollbar-track {

            background: #f0f8f3;

        }


        .admin-sidebar::-webkit-scrollbar-thumb {

            background: #9bceb0;

            border-radius: 10px;

        }


        .admin-sidebar::-webkit-scrollbar-thumb:hover {

            background: var(--theme-green);

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 768px) {

            .sidebar-toggle-btn {

                left: 15px;

                top: 12px;

                width: 40px;

                height: 40px;

                font-size: 19px;

            }


            .sidebar-nav {

                padding-top: 15px;

            }

        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 480px) {

            .sidebar-toggle-btn {

                width: 38px;

                height: 38px;

                font-size: 18px;

            }

        }

    </style>

</head>


<body>


<div class="admin-shell">


    <!-- =====================================================
         SIDEBAR TOGGLE
    ===================================================== -->

    <button type="button"
            class="sidebar-toggle-btn"
            id="sidebarToggle"
            aria-label="Toggle Sidebar">

        <i class="bi bi-list"></i>

    </button>


    <div class="sidebar-backdrop"
         data-sidebar-close>
    </div>


    <!-- =====================================================
         SIDEBAR
    ===================================================== -->

    <aside class="admin-sidebar"
           id="adminSidebar"
           aria-label="Main navigation">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="sidebar-header">

            <a class="brand-mark"
               href="index.html"
               aria-label="Admin Dashboard">


                <span class="brand-icon">

                    <i class="bi bi-book-half"
                       aria-hidden="true">
                    </i>

                </span>


                <span class="brand-copy">

                    <span class="brand-title">
                        E-BOOK
                    </span>


                    <span class="brand-subtitle">
                        Admin Dashboard
                    </span>

                </span>


            </a>

        </div>



        <!-- =================================================
             NAVIGATION
        ================================================== -->

        <nav class="sidebar-nav">


            <a class="nav-link active"
               href="{{route('dashboard')}}">

                <span class="nav-icon">

                    <i class="bi bi-speedometer2"></i>

                </span>

                <span class="nav-text">
                    Dashboard
                </span>

            </a>



            <a class="nav-link"
               href="{{route('fatchcategory')}}">

                <span class="nav-icon">

                    <i class="bi bi-grid"></i>

                </span>

                <span class="nav-text">
                    ALL_CATEGORIES
                </span>

            </a>



            <a class="nav-link"
               href="{{route('userfatch')}}">

                <span class="nav-icon">

                    <i class="bi bi-people"></i>

                </span>

                <span class="nav-text">
                    ALL_User
                </span>

            </a>



            <a class="nav-link"
               href="{{route('author')}}">

                <span class="nav-icon">

                    <i class="bi bi-person-badge"></i>

                </span>

                <span class="nav-text">
                    ADD_AUTHOR
                </span>

            </a>



            <a class="nav-link"
               href="{{route('book')}}">

                <span class="nav-icon">

                    <i class="bi bi-book"></i>

                </span>

                <span class="nav-text">
                    UPLOAD_BOOK
                </span>

            </a>



            <a class="nav-link"
               href="{{route('admin.orders')}}">

                <span class="nav-icon">

                    <i class="bi bi-bag-check"></i>

                </span>

                <span class="nav-text">
                    ALL_ORDERS
                </span>

            </a>



            <a class="nav-link"
               href="{{route('bookfatch')}}">

                <span class="nav-icon">

                    <i class="bi bi-box-seam"></i>

                </span>

                <span class="nav-text">
                    ALL_PRODUCT
                </span>

            </a>



            <a class="nav-link"
               href="{{route('news')}}">

                <span class="nav-icon">

                    <i class="bi bi-newspaper"></i>

                </span>

                <span class="nav-text">
                    UPLOAD_Competition
                </span>

            </a>



            <a class="nav-link"
               href="{{route('participate')}}">

                <span class="nav-icon">

                    <i class="bi bi-trophy"></i>

                </span>

                <span class="nav-text">
                    ALL_PARTICIPATE
                </span>

            </a>



            <a class="nav-link"
               href="{{route('fatchnews')}}">

                <span class="nav-icon">

                    <i class="bi bi-file-text"></i>

                </span>

                <span class="nav-text">
                    ALL_NEWS
                </span>

            </a>



            <a class="nav-link"
               href="{{route('admin.contacts')}}">

                <span class="nav-icon">

                    <i class="bi bi-gear"></i>

                </span>

                <span class="nav-text">
                    USER_CONTACT
                </span>

            </a>



            <a class="nav-link"
               href="blank.html">

                <span class="nav-icon">

                    <i class="bi bi-file-earmark"></i>

                </span>

                <span class="nav-text">
                    Blank Page
                </span>

            </a>


        </nav>



        <!-- =================================================
             USER
        ================================================== -->

        <div class="sidebar-user">


            <img class="avatar-img avatar-md sidebar-user-avatar"
                 src="../assets/images/avatar/avatar.jpg"
                 alt="Admin">


            <strong>
                Admin
            </strong>


            <small>
                Active Workspace
            </small>


        </div>



        <!-- =================================================
             FOOTER
        ================================================== -->

        <div class="sidebar-footer">


            <span class="status-dot"></span>


            <span class="sidebar-footer-text">
                System running smoothly
            </span>


        </div>


    </aside>



    <!-- =====================================================
         PAGE CONTENT
    ===================================================== -->

    @yield('admin')


</div>



<!-- =====================================================
     BOOTSTRAP
====================================================== -->

<script src="{{asset('user/aassets/js/bootstrap.bundle.min.js')}}"></script>


<!-- =====================================================
     EXISTING JS
====================================================== -->

<script src="{{asset('user/aassets/js/main.js')}}"></script>



<!-- =====================================================
     SIDEBAR TOGGLE
====================================================== -->

<script>

    const sidebarToggle =
        document.getElementById('sidebarToggle');

    const adminShell =
        document.querySelector('.admin-shell');


    sidebarToggle.addEventListener('click', function () {

        adminShell.classList.toggle('sidebar-hidden');


        const icon =
            this.querySelector('i');


        if (adminShell.classList.contains('sidebar-hidden')) {

            icon.classList.remove('bi-list');

            icon.classList.add('bi-arrow-right');

        }

        else {

            icon.classList.remove('bi-arrow-right');

            icon.classList.add('bi-list');

        }

    });

</script>


</body>

</html>

