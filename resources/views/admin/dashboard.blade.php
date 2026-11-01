
@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="E-Book Admin Dashboard">

    <title>E-Book | Admin Dashboard</title>


    <link rel="stylesheet"
          href="{{asset('user/aassets/css/bootstrap.min.css')}}">

    <link rel="stylesheet"
          href="{{asset('user/aassets/vendors/bootstrap-icons/bootstrap-icons.css')}}">

    <link rel="stylesheet"
          href="{{asset('user/aassets/css/style.css')}}">


    <style>

      
        :root {
            --green: #2f8f5b;
            --green-dark: #247348;
            --green-light: #e8f6ed;
            --green-soft: #f2faf5;

            --dark: #24332b;
            --text: #4d5b54;
            --muted: #89958e;

            --border: #dce9e1;

            --white: #ffffff;

            --shadow:
                0 8px 25px rgba(36, 115, 72, 0.08);
        }


        /* =====================================================
           MAIN AREA
        ===================================================== */

        .admin-main {
            background: #f7fbf8 !important;
        }


        .dashboard-content {
            background:
                linear-gradient(
                    180deg,
                    #f0f9f3 0px,
                    #f7fbf8 260px
                ) !important;

            min-height: calc(100vh - 70px);
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .admin-navbar {
            background: #ffffff !important;

            border-bottom: 2px solid var(--green-light);

            box-shadow:
                0 3px 15px rgba(17, 129, 67, 0.07);
        }


     
.search-input {
    background: #e8f6ed !important;
    color: #24332b !important;
    border: 1px solid #2f8f5b !important;
    border-radius: 8px;
    height: 40px;
}

.search-input::placeholder {
    color: #5f7568 !important;
    opacity: 1;
}

.search-input:focus {
    background: #ffffff !important;
    color: #24332b !important;
    border-color: #2f8f5b !important;
    box-shadow: 0 0 0 3px rgba(47, 143, 91, 0.15) !important;
}



        /* =====================================================
           NAVBAR BUTTONS
        ===================================================== */

        .icon-button {
            color: var(--green) !important;

            border: 1px solid var(--border) !important;

            background: #ffffff !important;

            transition: 0.25s ease;
        }


        .icon-button:hover {
            background: var(--green-light) !important;

            border-color: var(--green) !important;

            color: var(--green-dark) !important;
        }


        .profile-button {
            border: 1px solid var(--border) !important;

            background: #ffffff !important;

            border-radius: 8px;

            padding: 5px 10px;

            color: var(--dark) !important;
        }


        .profile-button:hover {
            border-color: var(--green) !important;

            background: var(--green-soft) !important;
        }


        /* =====================================================
           PAGE HEADING
        ===================================================== */

        .page-heading {
            background: #ffffff;

            border: 1px solid var(--border);

            border-left: 5px solid var(--green);

            border-radius: 12px;

            padding: 20px 22px;

            box-shadow: var(--shadow);

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }


        .page-heading-copy {
            display: flex;

            align-items: center;

            gap: 15px;
        }


        .page-icon {
            width: 52px;
            height: 52px;

            flex-shrink: 0;

            background: var(--green);

            color: white;

            border-radius: 11px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 23px;

            box-shadow:
                0 7px 18px rgba(25, 135, 76, 0.25);
        }


        .eyebrow {
            color: var(--green) !important;

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .page-heading h1 {
            color: var(--dark);

            font-weight: 700;
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .btn-primary {
            background: var(--green) !important;

            border-color: var(--green) !important;

            box-shadow:
                0 5px 13px rgba(47, 143, 91, 0.18);
        }


        .btn-primary:hover {
            background: var(--green-dark) !important;

            border-color: var(--green-dark) !important;
        }


        .btn-outline-secondary {
            color: var(--green) !important;

            border-color: var(--green) !important;
        }


        .btn-outline-secondary:hover {
            background: var(--green) !important;

            color: white !important;
        }


        .btn-light {
            background: var(--green-light) !important;

            border-color: var(--green-light) !important;

            color: var(--green-dark) !important;
        }


        .btn-light:hover {
            background: var(--green) !important;

            color: white !important;
        }


        /* =====================================================
           METRIC CARDS
        ===================================================== */

        .metric-card {
            background: #ffffff;

            border: 1px solid var(--border);

            border-radius: 13px;

            padding: 20px;

            min-height: 155px;

            box-shadow: var(--shadow);

            position: relative;

            overflow: hidden;

            transition:
                transform 0.25s ease,
                box-shadow 0.25s ease;
        }


        .metric-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 12px 30px rgba(36, 115, 72, 0.14);
        }


        /* GREEN TOP LINE */

        .metric-card::before {
            content: "";

            position: absolute;

            left: 0;
            top: 0;

            width: 100%;
            height: 4px;

            background: var(--green);
        }


        .metric-primary,
        .metric-success,
        .metric-warning,
        .metric-danger {
            border-top: none !important;
        }


        .metric-top {
            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .metric-label {
            color: var(--text);

            font-size: 14px;

            font-weight: 600;
        }


        .metric-icon {
            width: 43px;
            height: 43px;

            background: var(--green-light);

            color: var(--green);

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 19px;
        }


        .metric-value {
            color: var(--green-dark);

            font-size: 29px;

            font-weight: 750;

            margin-top: 14px;
        }


        .metric-meta {
            margin-top: 7px;

            color: var(--muted);

            font-size: 12px;

            display: flex;

            gap: 6px;
        }


        .metric-meta .text-success {
            color: var(--green) !important;

            font-weight: 700;
        }


        /* =====================================================
           PANELS
        ===================================================== */

        .panel {
            background: #ffffff;

            border: 1px solid var(--border);

            border-radius: 13px;

            box-shadow: var(--shadow);

            overflow: hidden;
        }


        .panel-header {
            padding: 19px 21px;

            border-bottom: 1px solid var(--border);

            background:
                linear-gradient(
                    90deg,
                    #ffffff,
                    #f5fbf7
                );
        }


        .section-title {
            color: var(--dark);

            font-weight: 700;

            display: flex;

            align-items: center;

            gap: 8px;
        }


        .section-title i {
            color: var(--green);

            font-size: 18px;
        }


        /* =====================================================
           SALES CHART
        ===================================================== */

        .chart-bars {
            min-height: 270px;

            padding: 35px 30px 20px;

            display: flex;

            align-items: flex-end;

            justify-content: space-around;

            gap: 20px;

            background:
                linear-gradient(
                    to top,
                    #f5fbf7,
                    #ffffff
                );
        }


        .chart-column {
            width: 45px;

            height: 210px;

            display: flex;

            flex-direction: column;

            justify-content: flex-end;

            align-items: center;

            gap: 10px;
        }


        .chart-column span {
            width: 100%;

            background:
                linear-gradient(
                    180deg,
                    #3ba96b,
                    #247348
                );

            border-radius: 7px 7px 2px 2px;

            display: block;

            box-shadow:
                0 5px 12px rgba(47, 143, 91, 0.20);

            transition: 0.25s ease;
        }


        .chart-column:hover span {
            transform: scaleY(1.03);

            box-shadow:
                0 8px 18px rgba(47, 143, 91, 0.30);
        }


        .chart-column small {
            color: var(--green-dark);

            font-weight: 600;
        }


        .bar-42 span {
            height: 42%;
        }

        .bar-58 span {
            height: 58%;
        }

        .bar-51 span {
            height: 51%;
        }

        .bar-72 span {
            height: 72%;
        }

        .bar-66 span {
            height: 66%;
        }

        .bar-83 span {
            height: 83%;
        }


        /* =====================================================
           ACTIVITY
        ===================================================== */

        .activity-list {
            padding: 8px 20px 15px;
        }


        .activity-item {
            display: flex;

            gap: 12px;

            padding: 15px 0;

            border-bottom: 1px solid var(--border);
        }


        .activity-item:last-child {
            border-bottom: none;
        }


        .activity-dot {
            width: 10px;
            height: 10px;

            min-width: 10px;

            margin-top: 5px;

            border-radius: 50%;
        }


        .activity-dot.bg-primary,
        .activity-dot.bg-success,
        .activity-dot.bg-warning {
            background: var(--green) !important;
        }


        .activity-item .fw-semibold {
            color: var(--dark);
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table {
            color: var(--text);
        }


        .table thead {
            background: var(--green-light);
        }


        .table thead th {
            color: var(--green-dark);

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.3px;

            border-bottom: 2px solid #cfe6d7;
        }


        .table tbody tr {
            transition: 0.2s ease;
        }


        .table tbody tr:hover {
            background: #f5fbf7;
        }


        .table tbody td {
            border-color: var(--border);
        }


        .table .fw-semibold {
            color: var(--dark);
        }


        /* =====================================================
           BADGES
        ===================================================== */

        .text-bg-success {
            background: var(--green) !important;

            color: #ffffff !important;
        }


        .text-bg-warning {
            background: #d9a72c !important;

            color: #ffffff !important;
        }


        .text-bg-secondary {
            background: #839189 !important;

            color: #ffffff !important;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .admin-footer {
            background: #ffffff !important;

            border-top: 1px solid var(--border);

            color: var(--muted);
        }


        .admin-footer a {
            color: var(--green) !important;

            text-decoration: none;
        }


        .admin-footer a:hover {
            color: var(--green-dark) !important;
        }


        /* =====================================================
           NOTIFICATION
        ===================================================== */

        .notification-dot {
            background: var(--green) !important;
        }


        .notification-title {
            color: var(--dark);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 768px) {

            .page-heading {
                align-items: flex-start;

                flex-direction: column;
            }


            .heading-actions {
                width: 100%;

                display: flex;

                gap: 8px;
            }


            .heading-actions .btn {
                flex: 1;
            }


            .chart-bars {
                padding-left: 15px;
                padding-right: 15px;

                gap: 8px;
            }


            .chart-column {
                width: 35px;
            }

        }


        @media (max-width: 480px) {

            .page-heading {
                padding: 16px;
            }


            .page-icon {
                width: 45px;
                height: 45px;
            }


            .metric-card {
                min-height: 140px;

                padding: 17px;
            }


            .metric-value {
                font-size: 25px;
            }


            .chart-bars {
                min-height: 220px;

                height: 220px;
            }


            .chart-column {
                height: 170px;

                width: 27px;
            }

        }

    </style>

</head>


<body>


<div class="admin-shell">

    <div class="sidebar-backdrop"
         data-sidebar-close>
    </div>


    <div class="admin-main">


        <!-- =================================================
             NAVBAR
        ================================================== -->

        <nav class="navbar admin-navbar navbar-expand bg-white">

            <div class="container-fluid px-3 px-lg-4">


             


                <form class="d-none d-md-flex ms-3 flex-grow-1"
                      role="search">

                    <input class="form-control search-input"
                           type="search"
                           placeholder="Search users, orders, reports"
                           aria-label="Search">

                </form>


                <div class="navbar-actions ms-auto">


                    <button class="icon-button theme-toggle"
                            type="button"
                            data-theme-toggle
                            aria-label="Switch color theme"
                            title="Switch color theme">

                        <i class="bi bi-moon-stars"
                           data-theme-icon>
                        </i>

                    </button>


                    <div class="dropdown">

                        <button class="icon-button"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                aria-label="Notifications">

                            <span class="notification-dot"></span>

                            <i class="bi bi-bell"></i>

                        </button>


                        <div class="dropdown-menu dropdown-menu-end notification-menu">

                            <div class="dropdown-header fw-bold text-body">
                                Notifications
                            </div>


                            <a class="dropdown-item"
                               href="users.html">

                                <span class="notification-title">
                                    New user registered
                                </span>

                                <span class="notification-time">
                                    4 minutes ago
                                </span>

                            </a>


                            <a class="dropdown-item"
                               href="charts.html">

                                <span class="notification-title">
                                    Revenue target reached
                                </span>

                                <span class="notification-time">
                                    32 minutes ago
                                </span>

                            </a>


                            <a class="dropdown-item"
                               href="settings.html">

                                <span class="notification-title">
                                    Security review completed
                                </span>

                                <span class="notification-time">
                                    1 hour ago
                                </span>

                            </a>

                        </div>

                    </div>


                    <div class="dropdown">

                        <button class="profile-button dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">

                        

                            <span class="profile-name d-none d-sm-inline">
                                Admin Zain
                            </span>

                        </button>


                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a class="dropdown-item"
                                   href="profile.html">
                                    Profile
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                   href="settings.html">
                                    Account settings
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item"
                                   href="login.html">
                                    Sign out
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </nav>



        <!-- =================================================
             DASHBOARD
        ================================================== -->

        <main class="dashboard-content">


            <div class="container-fluid px-3 px-lg-4 py-4">


                <!-- PAGE HEADING -->

                <div class="page-heading">


                    <div class="page-heading-copy">

                        <span class="page-icon">

                            <i class="bi bi-speedometer2"></i>

                        </span>


                        <div>

                            <p class="eyebrow mb-1">
                                E-BOOK ADMIN
                            </p>

                            <h1 class="h3 mb-1">
                                Dashboard
                            </h1>

                            <p class="text-muted mb-0">
                                Monitor books, orders, customers and authors from one clean workspace.
                            </p>

                        </div>

                    </div>


                    <div class="heading-actions">

                        <button class="btn btn-outline-secondary btn-sm"
                                type="button">

                            <i class="bi bi-download"></i>

                            Export

                        </button>


                        <button class="btn btn-primary btn-sm"
                                type="button">

                            <i class="bi bi-file-earmark-plus"></i>

                            Create Report

                        </button>

                    </div>


                </div>



                <!-- =================================================
                     METRICS
                ================================================== -->

                <section class="row g-3 mt-1"
                         aria-label="Dashboard metrics">


                    <!-- REVENUE -->

                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-primary">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Revenue
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-currency-dollar"></i>

                                </span>

                            </div>


                            <div class="metric-value">
                                {{$total_price}}
                            </div>


                            <div class="metric-meta">

                                <span class="text-success">
                                    +12.5%
                                </span>

                                <span>
                                    from last month
                                </span>

                            </div>

                        </article>

                    </div>



                    <!-- ORDERS -->

                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-success">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Orders
                                </span>

                                <span class="metric-icon">

                       <i class="bi bi-bag-check" style="color: #2f8f5b !important;"></i>

                                </span>

                            </div>


                            <div class="metric-value">
                                {{$ordercount}}
                            </div>


                            <div class="metric-meta">

                                <span class="text-success">
                                    +8.2%
                                </span>

                                <span>
                                    new orders
                                </span>

                            </div>

                        </article>

                    </div>



                    <!-- CUSTOMERS -->

                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-warning">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Customers
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-people"></i>

                                </span>

                            </div>


                            <div class="metric-value">
                                {{$customer}}
                            </div>


                            <div class="metric-meta">

                                <span class="text-success">
                                    +5.1%
                                </span>

                                <span>
                                    active users
                                </span>

                            </div>

                        </article>

                    </div>



                    <!-- AUTHORS -->

                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-danger">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Author
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-person-badge"></i>

                                </span>

                            </div>


                            <div class="metric-value">
                                {{$authorcount}}
                            </div>


                            <div class="metric-meta">

                                <span>
                                    on working
                                </span>

                            </div>

                        </article>

                    </div>


                </section>



                <!-- =================================================
                     CHART + ACTIVITY
                ================================================== -->

                <section class="row g-3 mt-1">


                    <!-- SALES -->

                    <div class="col-12 col-xl-8">

                        <div class="panel">


                            <div class="panel-header">

                                <div>

                                    <h2 class="h5 mb-1 section-title">

                                        <i class="bi bi-graph-up-arrow"></i>

                                        <span>
                                            Sales Performance
                                        </span>

                                    </h2>


                                    <p class="text-muted mb-0">
                                        Monthly revenue compared with operational targets.
                                    </p>

                                </div>


                                <a class="btn btn-light btn-sm"
                                   href="charts.html">

                                    View Details

                                </a>

                            </div>



                            <div class="chart-bars"
                                 aria-label="Sales performance chart">


                                <div class="chart-column bar-42">

                                    <span></span>

                                    <small>
                                        Jan
                                    </small>

                                </div>


                                <div class="chart-column bar-58">

                                    <span></span>

                                    <small>
                                        Feb
                                    </small>

                                </div>


                                <div class="chart-column bar-51">

                                    <span></span>

                                    <small>
                                        Mar
                                    </small>

                                </div>


                                <div class="chart-column bar-72">

                                    <span></span>

                                    <small>
                                        Apr
                                    </small>

                                </div>


                                <div class="chart-column bar-66">

                                    <span></span>

                                    <small>
                                        May
                                    </small>

                                </div>


                                <div class="chart-column bar-83">

                                    <span></span>

                                    <small>
                                        Jun
                                    </small>

                                </div>


                            </div>

                        </div>

                    </div>



                    <!-- ACTIVITY -->

                    <div class="col-12 col-xl-4">

                        <div class="panel h-100">


                            <div class="panel-header">

                                <div>

                                    <h2 class="h5 mb-1 section-title">

                                        <i class="bi bi-activity"></i>

                                        <span>
                                            Team Activity
                                        </span>

                                    </h2>


                                    <p class="text-muted mb-0">
                                        Recent operational updates.
                                    </p>

                                </div>

                            </div>


                            <div class="activity-list">


                                <div class="activity-item">

                                    <span class="activity-dot bg-primary"></span>

                                    <div>

                                        <p class="mb-1 fw-semibold">
                                            New campaign launched
                                        </p>

                                        <p class="text-muted small mb-0">
                                            Marketing team published the May offer.
                                        </p>

                                    </div>

                                </div>


                                <div class="activity-item">

                                    <span class="activity-dot bg-success"></span>

                                    <div>

                                        <p class="mb-1 fw-semibold">
                                            Payment batch cleared
                                        </p>

                                        <p class="text-muted small mb-0">
                                            246 invoices were processed successfully.
                                        </p>

                                    </div>

                                </div>


                                <div class="activity-item">

                                    <span class="activity-dot bg-warning"></span>

                                    <div>

                                        <p class="mb-1 fw-semibold">
                                            Support queue rising
                                        </p>

                                        <p class="text-muted small mb-0">
                                            Average first response time is 18 minutes.
                                        </p>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>


                </section>



                <!-- =================================================
                     RECENT USERS
                ================================================== -->

                <section class="panel mt-3">


                    <div class="panel-header">


                        <div>

                            <h2 class="h5 mb-1 section-title">

                                <i class="bi bi-people"></i>

                                <span>
                                    Recent Users
                                </span>

                            </h2>


                            <p class="text-muted mb-0">
                                Latest account activity across the workspace.
                            </p>

                        </div>


                        <a class="btn btn-outline-secondary btn-sm"
                           href="users.html">

                            Manage Users

                        </a>


                    </div>



                    <div class="table-responsive">


                        <table class="table align-middle mb-0">


                            <thead>

                                <tr>

                                    <th scope="col">
                                        User
                                    </th>

                                    <th scope="col">
                                        Role
                                    </th>

                                    <th scope="col">
                                        Team
                                    </th>

                                    <th scope="col">
                                        Status
                                    </th>

                                    <th scope="col">
                                        Joined
                                    </th>

                                    <th scope="col"
                                        class="text-end">

                                        Action

                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center gap-2">

                                            <img class="avatar-img avatar-sm"
                                                 src="{{asset('user/aassets/images/avatar/avatar-1.jpg')}}"
                                                 alt="Sarah Ahmed">


                                            <div>

                                                <p class="fw-semibold mb-0">
                                                    Sarah Ahmed
                                                </p>

                                                <p class="text-muted small mb-0">
                                                    sarah@example.com
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <td class="text-dark">
                                        Admin
                                    </td>

                                    <td  class="text-dark">
                                        Operations
                                    </td>

                                    <td>

                                        <span class="badge text-bg-success">
                                            Active
                                        </span>

                                    </td>

                                    <td class="text-dark">
                                        Jan 12, 2026
                                    </td>


                                    <td class="text-end">

                                        <a class="btn btn-light btn-sm"
                                           href="user-details.html">

                                            View

                                        </a>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center gap-2">

                                            <img class="avatar-img avatar-sm"
                                                 src="{{asset('user/aassets/images/avatar/avatar-2.jpg')}}"
                                                 alt="Rafi Khan">


                                            <div>

                                                <p class="fw-semibold mb-0">
                                                    Rafi Khan
                                                </p>

                                                <p class="text-muted small mb-0">
                                                    rafi@example.com
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <td class="text-dark">
                                        Manager
                                    </td>

                                    <td class="text-dark">
                                        Sales
                                    </td>

                                    <td>

                                        <span class="badge text-bg-success">
                                            Active
                                        </span>

                                    </td>

                                    <td class="text-dark">
                                        Feb 03, 2026
                                    </td>


                                    <td class="text-end">

                                        <a class="btn btn-light btn-sm"
                                           href="user-details.html">

                                            View

                                        </a>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center gap-2">

                                            <img class="avatar-img avatar-sm"
                                                 src="{{asset('user/aassets/images/avatar/avatar-3.jpg')}}"
                                                 alt="Nadia Islam">


                                            <div>

                                                <p class="fw-semibold mb-0">
                                                    Nadia Islam
                                                </p>

                                                <p class="text-muted small mb-0">
                                                    nadia@example.com
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <td class="text-dark">
                                        Editor
                                    </td>

                                    <td class="text-dark">
                                        Content
                                    </td>

                                    <td>

                                        <span class="badge text-bg-warning">
                                            Pending
                                        </span>

                                    </td>

                                    <td class="text-dark">
                                        Mar 18, 2026
                                    </td>


                                    <td class="text-end">

                                        <a class="btn btn-light btn-sm"
                                           href="user-details.html">

                                            View

                                        </a>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center gap-2">

                                            <img class="avatar-img avatar-sm"
                                                 src="{{asset('user/aassets/images/avatar/avatar-4.jpg')}}"
                                                 alt="Mina Torres">


                                            <div>

                                                <p class="fw-semibold mb-0">
                                                    Mina Torres
                                                </p>

                                                <p class="text-muted small mb-0">
                                                    mina@example.com
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <td class="text-dark">
                                        Viewer
                                    </td>

                                    <td class="text-dark">
                                        Finance
                                    </td>

                                    <td>

                                        <span class="badge text-bg-secondary">
                                            Suspended
                                        </span>

                                    </td>

                                    <td class="text-dark">
                                        Apr 07, 2026
                                    </td>


                                    <td class="text-end">

                                        <a class="btn btn-light btn-sm"
                                           href="user-details.html">

                                            View

                                        </a>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center gap-2">

                                            <img class="avatar-img avatar-sm"
                                                 src="{{asset('user/aassets/images/avatar/avatar-5.jpg')}}"
                                                 alt="Jon Oliver">


                                            <div>

                                                <p class="fw-semibold mb-0">
                                                    Jon Oliver
                                                </p>

                                                <p class="text-muted small mb-0">
                                                    jon@example.com
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <td class="text-dark">
                                        Analyst
                                    </td>

                                    <td class="text-dark">
                                        Data
                                    </td>

                                    <td>

                                        <span class="badge text-bg-success">
                                            Active
                                        </span>

                                    </td>

                                    <td class="text-dark">
                                        Apr 22, 2026
                                    </td>


                                    <td class="text-end">

                                        <a class="btn btn-light btn-sm"
                                           href="user-details.html">

                                            View

                                        </a>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </div>

                </section>


            </div>

        </main>



        <!-- =================================================
             FOOTER
        ================================================== -->

        <footer class="admin-footer">

            <div class="container-fluid px-3 px-lg-4">

                <span>
                    Copyright 2026 E-Book.
                    <br>
                    Admin Dashboard
                </span>

                <span>
                    Professional E-Book workspace.
                </span>

            </div>

        </footer>


    </div>

</div>


<script src="{{asset('user/aassets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('user/aassets/js/main.js')}}"></script>


</body>

</html>

@endsection

