@extends('admin.sidebar')

@section('admin')

<!-- Bootstrap 5 -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLImNao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">

<!-- Font Awesome -->

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

    .news-wrapper {
        min-height: 85vh;
        padding: 40px 15px;
    }

    /* PAGE HEADER */

    .page-icon {
        width: 58px;
        height: 58px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--bookim-light-green);
        border: 1px solid #d2e6d0;
    }

    .page-icon i {
        color: var(--bookim-green-dark);
        font-size: 22px;
    }

    .page-title {
        color: var(--bookim-navy);
        font-weight: 800;
    }

    .page-subtitle {
        color: var(--bookim-gray);
    }

    /* MAIN CARD */

    .news-card {
        max-width: 950px;
        margin: auto;
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 35px rgba(8, 8, 45, 0.08);
        position: relative;
    }

    .news-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 70px;
        height: 4px;
        background: var(--bookim-green);
        border-radius: 0 0 10px 10px;
        z-index: 2;
    }

    /* CARD HEADER */

    .news-card-header {
        background: #ffffff;
        border-bottom: 1px solid var(--bookim-border);
        padding: 22px 25px;
    }

    .header-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        background: var(--bookim-light-green);
        border: 1px solid #d2e6d0;
        border-radius: 11px;
        color: var(--bookim-green-dark);
    }

    .header-title {
        color: var(--bookim-navy);
    }

    .header-subtitle {
        color: var(--bookim-gray);
    }

    /* FORM */

    .form-label {
        color: var(--bookim-navy);
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-label i {
        color: var(--bookim-green-dark);
    }

    .form-control,
    .form-select {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        color: var(--bookim-navy);
        border-radius: 9px;
        padding: 12px 14px;
        transition: .25s;
    }

    .form-control:focus,
    .form-select:focus {
        background: #ffffff;
        color: var(--bookim-navy);
        border-color: var(--bookim-green);
        box-shadow: 0 0 0 0.2rem rgba(123, 181, 121, .18);
    }

    .form-control::placeholder {
        color: #9b9b9b;
    }

    .form-select {
        cursor: pointer;
    }

    .form-select option {
        background: #ffffff;
        color: var(--bookim-navy);
    }

    textarea.form-control {
        resize: vertical;
    }

    /* FILE AREA */

    .image-upload-box {
        background: var(--bookim-light-green);
        border: 1px dashed #b9cdb7;
        border-radius: 10px;
        padding: 12px;
        transition: .25s;
    }

    .image-upload-box:hover {
        border-color: var(--bookim-green);
        background: #f0f7ee;
    }

    .image-upload-box .form-control {
        background: #ffffff;
    }

    .upload-help {
        color: var(--bookim-gray);
    }

    .upload-help i {
        color: var(--bookim-green-dark);
    }

    /* BUTTONS */

    .publish-btn {
        background: var(--bookim-navy);
        border: 1px solid var(--bookim-navy);
        color: #ffffff;
        border-radius: 9px;
        transition: .3s;
    }

    .publish-btn:hover {
        background: var(--bookim-green-dark);
        border-color: var(--bookim-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 7px 18px rgba(104, 167, 104, .25);
    }

    .reset-btn {
        background: #ffffff;
        border: 1px solid var(--bookim-border);
        color: var(--bookim-navy);
        border-radius: 9px;
        transition: .3s;
    }

    .reset-btn:hover {
        background: var(--bookim-light-green);
        border-color: var(--bookim-green);
        color: var(--bookim-navy);
    }

    /* FOOTER */

    .news-footer {
        background: #fafbf9;
        border-top: 1px solid var(--bookim-border);
    }

    .news-footer small {
        color: var(--bookim-gray);
    }

    .news-footer i {
        color: var(--bookim-green-dark);
    }

    /* RESPONSIVE */

    @media (max-width: 767px) {

        .news-wrapper {
            padding: 25px 10px;
        }

        .news-card-header {
            padding: 20px;
        }

        .page-title {
            font-size: 24px;
        }

        .news-card {
            border-radius: 14px;
        }

    }

    @media (max-width: 480px) {

        .news-wrapper {
            padding: 20px 8px;
        }

        .page-title {
            font-size: 21px;
        }

        .page-subtitle {
            font-size: 13px;
        }

        .news-card-header {
            padding: 18px;
        }

        .header-icon {
            width: 43px;
            height: 43px;
        }

        .form-control,
        .form-select {
            font-size: 14px;
        }

        .publish-btn,
        .reset-btn {
            width: 100%;
        }

    }

</style>

<div class="container-fluid news-wrapper">


<div class="container px-2 px-sm-3 px-md-4">

    <!-- PAGE HEADER -->

    <div class="text-center mb-4 mb-md-5">

        <div class="page-icon mb-3">

            <i class="fa-solid fa-newspaper"></i>

        </div>

        <h2 class="page-title mb-2 fs-4 fs-md-2">
            Upload News
        </h2>

        <p class="page-subtitle small mb-0">
            Create and publish a new article
        </p>

    </div>


    <!-- NEWS CARD -->

    <div class="news-card">


        <!-- CARD HEADER -->

        <div class="news-card-header">

            <div class="d-flex align-items-center">

                <div class="header-icon me-3">

                    <i class="fa-solid fa-newspaper"></i>

                </div>

                <div>

                    <h5 class="fw-bold mb-1 header-title">
                        Upload News
                    </h5>

                    <small class="header-subtitle">
                        Enter the details of your news article
                    </small>

                </div>

            </div>

        </div>


        <!-- FORM BODY -->

        <div class="card-body p-3 p-sm-4 p-md-5">

            <form action="{{ route('news_publish') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- TITLE -->

                <div class="mb-4">

                    <label class="form-label small">

                        <i class="fa-solid fa-heading me-1"></i>

                        News Title

                    </label>

                    <input type="text"
                           name="title"
                           class="form-control"
                           placeholder="Enter news title"
                           required>

                </div>


                <!-- DESCRIPTION -->

                <div class="mb-4">

                    <label class="form-label small">

                        <i class="fa-solid fa-align-left me-1"></i>

                        News Description

                    </label>

                    <textarea name="description"
                              class="form-control"
                              rows="7"
                              placeholder="Write your news here..."
                              required></textarea>

                </div>


                <!-- IMAGE + PUBLISHED DATE -->

                <div class="row g-3 g-md-4 mb-1">


                    <!-- IMAGE -->

                    <div class="col-12 col-md-7">

                        <label class="form-label small">

                            <i class="fa-solid fa-image me-1"></i>

                            News Image

                        </label>

                        <div class="image-upload-box">

                            <input type="file"
                                   name="book_image"
                                   class="form-control"
                                   accept="image/*">

                            <small class="d-block mt-2 upload-help">

                                <i class="fa-solid fa-circle-info me-1"></i>

                                Recommended: JPG, PNG or WEBP

                            </small>

                        </div>

                    </div>


                    <!-- PUBLISHED DATE -->

                    <div class="col-12 col-md-5">

                        <label class="form-label small">

                            <i class="fa-regular fa-calendar me-1"></i>

                            Published Date

                        </label>

                        <input type="date"
                               name="published_date"
                               class="form-control">

                    </div>

                </div>


                <!-- END DATE + PRIZE -->

                <div class="row g-3 g-md-4 mb-4">


                    <!-- END DATE -->

                    <div class="col-12 col-md-6">

                        <label class="form-label small">

                            <i class="fa-regular fa-calendar-check me-1"></i>

                            End Date

                        </label>

                        <input type="date"
                               name="end_date"
                               class="form-control">

                    </div>


                    <!-- PRIZE -->

                    <div class="col-12 col-md-6">

                        <label class="form-label small">

                            <i class="fa-solid fa-gift me-1"></i>

                            Winning Prize

                        </label>

                        <input type="text"
                               name="prize"
                               class="form-control"
                               placeholder="Enter winning prize">

                    </div>

                </div>


                <!-- STATUS -->

                <div class="mb-4">

                    <label class="form-label small">

                        <i class="fa-solid fa-toggle-on me-1"></i>

                        News Status

                    </label>

                    <select name="status"
                            class="form-select">

                        <option value="1" selected>
                            Active
                        </option>

                        <option value="0">
                            Inactive
                        </option>

                    </select>

                </div>


                <!-- BUTTONS -->

                <div class="d-flex flex-column flex-sm-row gap-2 gap-sm-3 pt-2">

                    <!-- PUBLISH -->

                    <button type="submit"
                            class="btn publish-btn px-4 py-2 fw-semibold">

                        <i class="fa-solid fa-paper-plane me-2"></i>

                        Publish News

                    </button>


                    <!-- RESET -->

                    <button type="reset"
                            class="btn reset-btn px-4 py-2 fw-semibold">

                        <i class="fa-solid fa-rotate-left me-2"></i>

                        Reset

                    </button>

                </div>

            </form>

        </div>


        <!-- FOOTER -->

        <div class="news-footer p-3 px-md-4">

            <div class="d-flex align-items-center justify-content-center">

                <small>

                    <i class="fa-solid fa-shield-halved me-1"></i>

                    Admin Content Management

                </small>

            </div>

        </div>

    </div>

</div>


</div>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>

@endsection

