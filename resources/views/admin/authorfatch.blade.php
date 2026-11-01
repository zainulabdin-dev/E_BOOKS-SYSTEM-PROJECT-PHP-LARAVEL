@extends('admin.sidebar')

@section('admin')

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>All Authors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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
        background: var(--bookim-bg) !important;
    }

    .authors-page {
        min-height: 100vh;
        background: var(--bookim-bg);
        padding: 30px 20px;
    }

    .authors-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* HEADER */

    .authors-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .authors-title {
        margin: 0;
        color: var(--bookim-navy);
        font-size: 28px;
        font-weight: 800;
    }

    .authors-title i {
        color: var(--bookim-green);
    }

    .authors-subtitle {
        color: var(--bookim-gray);
        font-size: 14px;
        margin: 6px 0 0;
    }

    /* SUCCESS */

    .alert-success {
        background: #f0f8ee;
        border: 1px solid #cfe3cc;
        color: #397336;
        border-radius: 10px;
    }

    /* AUTHOR GRID */

    .authors-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    /* AUTHOR CARD */

    .author-card {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(8, 8, 45, .06);
        transition: .25s ease;
    }

    .author-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 32px rgba(8, 8, 45, .10);
        border-color: #d3e2d0;
    }

    /* CARD HEADER */

    .author-card-header {
        background: var(--bookim-light-green);
        padding: 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #d8e6d6;
    }

    .author-icon {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #ffffff;
        color: var(--bookim-green-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        border: 1px solid #d5e5d2;
    }

    .author-id {
        font-size: 12px;
        font-weight: 800;
        color: var(--bookim-green-dark);
        background: #ffffff;
        border: 1px solid #d4e4d1;
        padding: 6px 10px;
        border-radius: 20px;
    }

    /* CARD BODY */

    .author-card-body {
        padding: 20px;
    }

    .field-label {
        display: block;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .4px;
        color: var(--bookim-gray);
        margin-bottom: 7px;
    }

    .author-name-box {
        background: #fbfcfb;
        border: 1px solid var(--bookim-border);
        border-radius: 8px;
        padding: 11px 13px;
        color: var(--bookim-navy);
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 17px;
        word-break: break-word;
    }

    .author-detail-box {
        background: #fbfcfb;
        border: 1px solid var(--bookim-border);
        border-radius: 8px;
        padding: 12px 13px;
        color: var(--bookim-gray);
        font-size: 14px;
        line-height: 1.6;
        min-height: 90px;
        word-break: break-word;
    }

    /* ACTIONS */

    .author-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .author-action {
        flex: 1;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        transition: .2s;
    }

    .edit-btn {
        background: var(--bookim-light-green);
        border: 1px solid #cfe2cc;
        color: var(--bookim-green-dark);
    }

    .edit-btn:hover {
        background: var(--bookim-green);
        color: #ffffff;
        border-color: var(--bookim-green);
    }

    .delete-btn {
        background: #fff3f4;
        border: 1px solid #f0d1d5;
        color: #d94c62;
    }

    .delete-btn:hover {
        background: #d94c62;
        color: #ffffff;
        border-color: #d94c62;
    }

    /* EMPTY */

    .empty-author {
        grid-column: 1 / -1;
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 15px;
        padding: 60px 20px;
        text-align: center;
        color: var(--bookim-gray);
        box-shadow: 0 8px 25px rgba(8, 8, 45, .05);
    }

    .empty-author i {
        font-size: 42px;
        color: var(--bookim-green);
        margin-bottom: 15px;
    }

    .empty-author h5 {
        color: var(--bookim-navy);
        font-weight: 800;
        margin-bottom: 5px;
    }

    .empty-author p {
        margin: 0;
        color: var(--bookim-gray);
    }

    /* TABLET */

    @media(max-width: 991.98px) {

        .authors-grid {
            grid-template-columns: repeat(2, 1fr);
        }

    }

    /* MOBILE */

    @media(max-width: 767.98px) {

        .authors-page {
            padding: 22px 12px;
        }

        .authors-title {
            font-size: 24px;
        }

        .authors-subtitle {
            font-size: 13px;
        }

        .authors-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .author-card-header {
            padding: 16px;
        }

        .author-card-body {
            padding: 17px;
        }

    }

    @media(max-width: 480px) {

        .authors-page {
            padding: 18px 9px;
        }

        .authors-title {
            font-size: 21px;
        }

        .authors-header {
            margin-bottom: 18px;
        }

        .author-actions {
            flex-direction: column;
        }

        .author-action {
            width: 100%;
        }

    }

</style>


</head>

<body>

<div class="authors-page">


<div class="authors-wrapper">

    <!-- HEADER -->

    <div class="authors-header">

        <div>

            <h1 class="authors-title">
                <i class="fa-solid fa-user-pen me-2"></i>
                ALL AUTHORS
            </h1>

            <p class="authors-subtitle">
                Manage all authors in your publishing system.
            </p>

        </div>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show mb-4"
             role="alert">

            <strong>
                <i class="fa-solid fa-circle-check me-1"></i>
                MESSAGE
            </strong>

            {{session('success')}}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>

        </div>

    @endif


    <!-- AUTHORS -->

    <div class="authors-grid">

        @forelse($allauthor as $authors)

            <div class="author-card">

                <!-- CARD HEADER -->

                <div class="author-card-header">

                    <div class="author-icon">

                        <i class="fa-solid fa-user"></i>

                    </div>

                    <span class="author-id">
                        ID #{{$authors->id}}
                    </span>

                </div>


                <!-- CARD BODY -->

                <div class="author-card-body">

                    <!-- NAME -->

                    <span class="field-label">
                        Author Name
                    </span>

                    <div class="author-name-box">

                        <i class="fa-solid fa-user me-2"
                           style="color:var(--bookim-green-dark);"></i>

                        {{$authors->name}}

                    </div>


                    <!-- DETAIL -->

                    <span class="field-label">
                        Description
                    </span>

                    <div class="author-detail-box">

                        {{$authors->detail}}

                    </div>


                    <!-- ACTIONS -->

                    <div class="author-actions">

                        <a href="{{route('editauthor',$authors->id)}}"
                           class="author-action edit-btn"
                           title="Edit Author">

                            <i class="fa-solid fa-pen-to-square"></i>

                            Edit

                        </a>


                        <a href="{{route('deletauthor',$authors->id)}}"
                           class="author-action delete-btn"
                           title="Delete Author">

                            <i class="fa-solid fa-trash"></i>

                            Delete

                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="empty-author">

                <i class="fa-solid fa-user-pen d-block"></i>

                <h5>
                    No Authors Found
                </h5>

                <p>
                    There are currently no authors available.
                </p>

            </div>

        @endforelse

    </div>

</div>


</div>

</body>
</html>

@endsection
