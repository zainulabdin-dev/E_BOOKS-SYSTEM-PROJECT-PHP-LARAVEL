@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>All Categories</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">

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
        padding: 35px 15px;
    }

    /* HEADER */

    .category-header {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 16px;
        padding: 22px 25px;
        margin-bottom: 25px;
        box-shadow: 0 8px 25px rgba(8, 8, 45, 0.07);
        position: relative;
        overflow: hidden;
    }

    .category-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: var(--bookim-green);
    }

    .category-header h1 {
        font-size: 27px;
        font-weight: 800;
        margin: 0;
        color: var(--bookim-navy);
    }

    .header-icon {
        color: var(--bookim-green-dark);
    }

    /* ADD BUTTON */

    .add-btn {
        background: var(--bookim-navy);
        color: #ffffff;
        border: none;
        padding: 10px 18px;
        border-radius: 9px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
        display: inline-block;
    }

    .add-btn:hover {
        background: var(--bookim-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 7px 18px rgba(104, 167, 104, 0.25);
    }

    /* SUCCESS */

    .success-message {
        background: var(--bookim-light-green);
        border: 1px solid #c9e2c6;
        color: #315b35;
        border-radius: 10px;
    }

    /* CATEGORY CARD */

    .category-card {
        height: 100%;
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 15px;
        padding: 22px;
        transition: 0.3s ease;
        box-shadow: 0 7px 20px rgba(8, 8, 45, 0.06);
        position: relative;
    }

    .category-card:hover {
        transform: translateY(-5px);
        border-color: var(--bookim-green);
        box-shadow: 0 12px 28px rgba(104, 167, 104, 0.15);
    }

    /* CATEGORY ICON */

    .category-icon {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: var(--bookim-light-green);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
    }

    .category-icon i {
        color: var(--bookim-green-dark);
        font-size: 22px;
    }

    /* ID */

    .category-id {
        font-size: 12px;
        color: var(--bookim-gray);
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }

    /* NAME */

    .category-name {
        color: var(--bookim-navy);
        font-size: 21px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    /* DESCRIPTION */

    .category-description {
        color: var(--bookim-gray);
        font-size: 14px;
        line-height: 1.6;
        min-height: 65px;
        margin-bottom: 20px;
    }

    /* ACTIONS */

    .card-actions {
        border-top: 1px solid var(--bookim-border);
        padding-top: 15px;
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .action-btn {
        width: 38px;
        height: 38px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: 0.3s;
    }

    /* EDIT */

    .edit-btn {
        background: var(--bookim-light-green);
        color: var(--bookim-green-dark);
    }

    .edit-btn:hover {
        background: var(--bookim-green);
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* DELETE */

    .delete-btn {
        background: #fff0f2;
        color: #d9536f;
    }

    .delete-btn:hover {
        background: #d9536f;
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* RESPONSIVE */

    @media (max-width: 768px) {

        .category-wrapper {
            padding: 25px 12px;
        }

        .category-header {
            padding: 20px;
        }

        .category-header h1 {
            font-size: 24px;
        }

    }

    @media (max-width: 576px) {

        .category-wrapper {
            padding: 20px 10px;
        }

        .category-header {
            padding: 18px;
        }

        .category-header h1 {
            font-size: 21px;
        }

        .add-btn {
            padding: 8px 12px;
            font-size: 13px;
        }

        .category-card {
            padding: 18px;
        }

        .category-name {
            font-size: 19px;
        }

        .category-description {
            font-size: 13px;
        }

    }

</style>


</head>

<body>

<div class="container-fluid category-wrapper">


<!-- Header -->

<div class="category-header">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

        <div>

            <h1>

                <i class="fa-solid fa-layer-group me-2 header-icon"></i>

                ALL CATEGORIES

            </h1>

        </div>

        <div>

            <a href="{{route('insert')}}" class="add-btn">

                <i class="fa-solid fa-plus me-1"></i>

                ADD CATEGORY

            </a>

        </div>

    </div>

</div>


<!-- Success Message -->

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


<!-- Categories -->

<div class="row g-4">

    @foreach($allcategory as $category)

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

            <div class="category-card">

                <!-- Icon -->

                <div class="category-icon">

                    <i class="fa-solid fa-book-open"></i>

                </div>


                <!-- ID -->

                <div class="category-id">

                    CATEGORY #{{$category->id}}

                </div>


                <!-- Name -->

                <div class="category-name">

                    {{$category->name}}

                </div>


                <!-- Description -->

                <div class="category-description">

                    {{$category->description}}

                </div>


                <!-- Actions -->

                <div class="card-actions">

                    <a href="{{route('editcategory',$category->id)}}"
                       class="action-btn edit-btn"
                       title="Edit Category">

                        <i class="fa-solid fa-pen-to-square"></i>

                    </a>

                    <a href="{{route('deletcategory',$category->id)}}"
                       class="action-btn delete-btn"
                       title="Delete Category">

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

