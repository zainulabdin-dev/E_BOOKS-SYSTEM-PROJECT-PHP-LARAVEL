@extends('admin.sidebar')

@section('admin')

<!-- Bootstrap 5 -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous">

<!-- Font Awesome -->

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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
    }

    /* PAGE */

    .news-page {
        min-height: 100vh;
        background: var(--bookim-bg);
    }

    /* PAGE TITLE */

    .page-label {
        color: var(--bookim-gray);
        letter-spacing: .6px;
    }

    .page-title {
        color: var(--bookim-navy);
        font-weight: 800;
    }

    .page-title span {
        color: var(--bookim-green-dark);
    }

    /* NEWS COUNT */

    .news-count {
        background: var(--bookim-light-green);
        border: 1px solid #c9dfc6;
        color: var(--bookim-green-dark);
    }

    /* NEWS CARD */

    .news-card {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(8, 8, 45, 0.07);
    }

    /* CARD HEADER */

    .news-header {
        background: #ffffff;
        border-bottom: 1px solid var(--bookim-border) !important;
    }

    .news-icon {
        width: 44px;
        height: 44px;
        background: var(--bookim-light-green);
        border: 1px solid #c9dfc6;
        color: var(--bookim-green-dark);
    }

    .news-title {
        color: var(--bookim-navy);
    }

    .news-id {
        color: var(--bookim-gray);
    }

    /* STATUS */

    .active-status {
        background: #edf8ed;
        color: #4d9650;
        border: 1px solid #c9e5c8;
    }

    .inactive-status {
        background: #f3f4f3;
        color: #777;
        border: 1px solid #dedfdd;
    }

    /* IMAGE */

    .news-image {
        height: 270px;
        object-fit: cover;
        border: 1px solid var(--bookim-border);
    }

    .image-label {
        background: rgba(8, 8, 45, .88);
        color: #ffffff;
        border: 1px solid rgba(123, 181, 121, .45);
    }

    /* LABEL */

    .form-label-custom {
        color: var(--bookim-gray);
    }

    .form-label-custom i {
        color: var(--bookim-green-dark);
    }

    /* INPUTS */

    .news-input,
    .news-select {
        background: #ffffff !important;
        border: 1px solid var(--bookim-border) !important;
        color: var(--bookim-navy) !important;
        border-radius: 9px !important;
        padding: 11px 13px !important;
        transition: .25s;
    }

    .news-input:focus,
    .news-select:focus {
        background: #ffffff !important;
        color: var(--bookim-navy) !important;
        border-color: var(--bookim-green) !important;
        box-shadow: 0 0 0 .2rem rgba(123, 181, 121, .17) !important;
    }

    .news-select option {
        background: #ffffff;
        color: var(--bookim-navy);
    }

    .news-textarea {
        resize: none;
    }

    /* UPDATE BUTTON */

    .update-btn {
        background: var(--bookim-navy);
        border: 1px solid var(--bookim-navy);
        color: #ffffff;
        border-radius: 8px;
        transition: .3s;
    }

    .update-btn:hover {
        background: var(--bookim-green-dark);
        border-color: var(--bookim-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(104, 167, 104, .22);
    }

    /* FOOTER */

    .news-footer {
        background: #fafbf9;
        border-color: var(--bookim-border) !important;
    }

    .footer-text {
        color: var(--bookim-gray);
    }

    .footer-text i {
        color: var(--bookim-green-dark);
    }

    .admin-content {
        color: #999;
    }

    .admin-content i {
        color: var(--bookim-green-dark);
    }

    /* EMPTY */

    .empty-card {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 15px;
    }

    .empty-icon {
        width: 70px;
        height: 70px;
        background: var(--bookim-light-green);
        border: 1px solid #c9dfc6;
        color: var(--bookim-green-dark);
    }

    .empty-title {
        color: var(--bookim-navy);
    }

    .empty-text {
        color: var(--bookim-gray);
    }

    /* RESPONSIVE */

    @media (max-width: 767px) {

        .news-image {
            height: 240px;
        }

        .page-title {
            font-size: 25px;
        }

    }

    @media (max-width: 575px) {

        .news-image {
            height: 220px;
        }

        .news-title {
            font-size: 16px;
        }

        .update-btn {
            width: 100%;
        }

    }

</style>

<div class="container-fluid py-4 py-md-5 news-page">


<div class="container-fluid px-2 px-sm-3 px-md-4 px-xl-5">


    <!-- PAGE TITLE -->

    <div class="mb-4 mb-md-5">

        <div class="d-flex flex-column flex-md-row
                    align-items-start align-items-md-center
                    justify-content-between gap-3">

            <div>

                <div class="small mb-2 page-label">
                    ADMIN PANEL / CONTENT MANAGEMENT
                </div>

                <h2 class="fw-bold mb-0 fs-4 fs-md-2 page-title">

                    News &

                    <span>
                        Competitions
                    </span>

                </h2>

            </div>


            <!-- NEWS COUNT -->

            <div class="d-inline-flex align-items-center
                        rounded-pill px-3 py-2 news-count">

                <i class="fa-solid fa-newspaper me-2"></i>

                <span class="small fw-semibold">

                    {{ $news->count() }} News

                </span>

            </div>

        </div>

    </div>


    <!-- NEWS LOOP -->

    @forelse($news as $item)


    <div class="card border-0 mb-4 mb-md-5 news-card">


        <!-- HEADER -->

        <div class="card-header border-0 p-3 p-md-4 news-header">

            <div class="d-flex align-items-center
                        justify-content-between gap-3">


                <!-- TITLE AREA -->

                <div class="d-flex align-items-center
                            overflow-hidden">

                    <div class="rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 me-2 me-md-3
                                news-icon">

                        <i class="fa-solid fa-newspaper"></i>

                    </div>


                    <div class="overflow-hidden">

                        <h5 class="fw-bold mb-1 text-truncate news-title">

                            {{ $item->title }}

                        </h5>

                        <div class="small text-truncate news-id">

                            News ID #{{ $item->id }}

                        </div>

                    </div>

                </div>


                <!-- STATUS -->

                @if($item->status == 1)

                    <span class="badge rounded-pill px-3 py-2
                                 flex-shrink-0 active-status">

                        <i class="fa-solid fa-circle-check me-1"></i>

                        <span class="d-none d-sm-inline">
                            Active
                        </span>

                    </span>

                @else

                    <span class="badge rounded-pill px-3 py-2
                                 flex-shrink-0 inactive-status">

                        <i class="fa-solid fa-circle-xmark me-1"></i>

                        <span class="d-none d-sm-inline">
                            Inactive
                        </span>

                    </span>

                @endif


            </div>

        </div>


        <!-- FORM -->

        <form action="{{ route('update_news', $item->id) }}"
              method="POST">

            @csrf

            <div class="row g-0">


                <!-- IMAGE -->

                <div class="col-12 col-lg-4 p-3 p-md-4">

                    <div class="position-relative">

                        <img
                            src="{{ asset('storage/books_pics/' . $item->image) }}"
                            class="img-fluid w-75 rounded-3 news-image"
                            alt="{{ $item->title }}"
                        >


                        <!-- IMAGE LABEL -->

                        <span class="position-absolute
                                     top-0 start-0
                                     m-2 m-md-3
                                     badge rounded-pill px-3 py-2
                                     image-label">

                            <i class="fa-solid fa-image me-1"></i>

                            News Image

                        </span>

                    </div>

                </div>


                <!-- CONTENT -->

                <div class="col-12 col-lg-8">

                    <div class="p-3 p-md-4">

                        <div class="row g-3 g-md-4">


                            <!-- TITLE -->

                            <div class="col-12 col-md-8">

                                <label
                                    for="title{{ $item->id }}"
                                    class="form-label small fw-semibold form-label-custom">

                                    <i class="fa-solid fa-heading me-1"></i>

                                    Title

                                </label>


                                <input
                                    type="text"
                                    id="title{{ $item->id }}"
                                    name="title"
                                    class="form-control news-input"
                                    value="{{ $item->title }}"
                                    required
                                >

                            </div>


                            <!-- PRIZE -->

                            <div class="col-12 col-md-4">

                                <label
                                    for="prize{{ $item->id }}"
                                    class="form-label small fw-semibold form-label-custom">

                                    <i class="fa-solid fa-gift me-1"></i>

                                    Prize

                                </label>


                                <input
                                    type="text"
                                    id="prize{{ $item->id }}"
                                    name="prize"
                                    class="form-control news-input"
                                    value="{{ $item->prize }}"
                                >

                            </div>


                            <!-- DESCRIPTION -->

                            <div class="col-12">

                                <label
                                    for="description{{ $item->id }}"
                                    class="form-label small fw-semibold form-label-custom">

                                    <i class="fa-solid fa-align-left me-1"></i>

                                    Description

                                </label>


                                <textarea
                                    id="description{{ $item->id }}"
                                    name="description"
                                    class="form-control news-input news-textarea"
                                    rows="4"
                                    required
                                >{{ $item->description }}</textarea>

                            </div>


                            <!-- START DATE -->

                            <div class="col-12 col-sm-6 col-md-4">

                                <label
                                    for="start_date{{ $item->id }}"
                                    class="form-label small fw-semibold form-label-custom">

                                    <i class="fa-regular fa-calendar me-1"></i>

                                    Start Date

                                </label>


                                <input
                                    type="date"
                                    id="start_date{{ $item->id }}"
                                    name="start_date"
                                    class="form-control news-input"
                                    value="{{ $item->start_date }}"
                                    required
                                >

                            </div>


                            <!-- END DATE -->

                            <div class="col-12 col-sm-6 col-md-4">

                                <label
                                    for="end_date{{ $item->id }}"
                                    class="form-label small fw-semibold form-label-custom">

                                    <i class="fa-regular fa-calendar-check me-1"></i>

                                    End Date

                                </label>


                                <input
                                    type="date"
                                    id="end_date{{ $item->id }}"
                                    name="end_date"
                                    class="form-control news-input"
                                    value="{{ $item->end_date }}"
                                    required
                                >

                            </div>


                            <!-- STATUS -->

                            <div class="col-12 col-md-4">

                                <label
                                    for="status{{ $item->id }}"
                                    class="form-label small fw-semibold form-label-custom">

                                    <i class="fa-solid fa-toggle-on me-1"></i>

                                    Status

                                </label>


                                <select
                                    id="status{{ $item->id }}"
                                    name="status"
                                    class="form-select fw-semibold news-select"
                                    required
                                >

                                    <option
                                        value="1"
                                        {{ $item->status == 1 ? 'selected' : '' }}
                                    >
                                        Active
                                    </option>

                                    <option
                                        value="0"
                                        {{ $item->status == 0 ? 'selected' : '' }}
                                    >
                                        Inactive
                                    </option>

                                </select>

                            </div>


                            <!-- UPDATE BUTTON -->

                            <div class="col-12">

                                <div class="d-flex
                                            flex-column flex-sm-row
                                            align-items-stretch
                                            align-items-sm-center
                                            justify-content-sm-end
                                            gap-2 mt-2">

                                    <button
                                        type="submit"
                                        class="btn px-4 py-2 fw-semibold update-btn"
                                    >

                                        <i class="fa-solid fa-check me-1"></i>

                                        Update News

                                    </button>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </form>


        <!-- FOOTER -->

        <div class="border-top p-3 p-md-4 news-footer">

            <div class="d-flex flex-column flex-sm-row
                        align-items-start align-items-sm-center
                        justify-content-between
                        gap-2">

                <div class="small text-truncate footer-text"
                     style="max-width:100%;">

                    <i class="fa-regular fa-clock me-1"></i>

                    Created:

                    {{ $item->created_at->format('d M Y, h:i A') }}

                </div>


                <div class="small admin-content">

                    <i class="fa-solid fa-shield-halved me-1"></i>

                    Admin Content

                </div>

            </div>

        </div>


    </div>


    @empty


    <!-- EMPTY -->

    <div class="card border-0 shadow-sm text-center p-4 p-md-5 empty-card">

        <div class="rounded-circle mx-auto mb-3
                    d-flex align-items-center justify-content-center
                    empty-icon">

            <i class="fa-solid fa-newspaper fa-2x"></i>

        </div>


        <h5 class="fw-bold mb-2 empty-title">

            No News Found

        </h5>


        <p class="mb-0 small empty-text">

            There are currently no news or competitions available.

        </p>

    </div>


    @endforelse


</div>
```

</div>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
