@extends('admin.sidebar')

@section('admin')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous">

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">

<style>

:root {
    --bookim-green: #7BB579;
    --bookim-green-dark: #68A768;
    --bookim-light-green: #EAF4E8;
    --bookim-bg: #F7F8F6;
    --bookim-gray: #737373;
    --bookim-border: #E1E4E1;
    --bookim-text: #315438;
    --bookim-soft: #FAFCF9;
}

/* =========================
   PAGE
========================= */

body {
    background: var(--bookim-bg);
}

.competition-page {
    min-height: 100vh;
    background: var(--bookim-bg);
}

/* =========================
   TITLE
========================= */

.competition-icon {
    width: 58px;
    height: 58px;
    background: var(--bookim-light-green);
    border: 1px solid #c9dfc6;
    color: var(--bookim-green-dark);
}

.competition-title {
    color: var(--bookim-text);
    font-weight: 800;
}

.competition-subtitle {
    color: var(--bookim-gray);
}

/* =========================
   PARTICIPANT CARD
========================= */

.participant-card {
    background: #ffffff;
    border: 1px solid var(--bookim-border);
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(49, 84, 56, 0.07);
    transition: 0.3s;
}

.participant-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 13px 30px rgba(49, 84, 56, 0.11);
}

/* =========================
   HEADER
========================= */

.participant-header {
    background: #ffffff;
    border-bottom: 1px solid var(--bookim-border);
}

.user-icon {
    width: 42px;
    height: 42px;
    background: var(--bookim-light-green);
    border: 1px solid #c9dfc6;
    color: var(--bookim-green-dark);
}

.participant-name {
    color: var(--bookim-text);
}

.participant-email {
    color: var(--bookim-gray);
}

.participant-badge {
    background: var(--bookim-light-green);
    color: var(--bookim-green-dark);
    border: 1px solid #c9dfc6;
}

/* =========================
   INFORMATION
========================= */

.info-label {
    color: #8a8a8a;
}

.info-label i {
    color: var(--bookim-green-dark);
}

.info-value {
    color: var(--bookim-text);
}

/* =========================
   DATE
========================= */

.date-box {
    background: var(--bookim-soft);
    border: 1px solid var(--bookim-border);
}

.date-value {
    color: var(--bookim-text);
}

/* =========================
   PRIZE
========================= */

.prize-badge {
    background: var(--bookim-light-green);
    color: var(--bookim-green-dark);
    border: 1px solid #c9dfc6;
}

/* =========================
   WRITING
========================= */

.writing-box {
    background: var(--bookim-soft);
    border: 1px solid var(--bookim-border);
    color: var(--bookim-gray);
    line-height: 1.6;
}

/* =========================
   FOOTER
========================= */

.participant-footer {
    background: #ffffff;
    border-top: 1px solid var(--bookim-border) !important;
}

.file-name {
    color: var(--bookim-gray);
}

.file-name i {
    color: var(--bookim-green-dark);
}

/* =========================
   VIEW BUTTON
========================= */

.view-btn {
    background: var(--bookim-green);
    border: 1px solid var(--bookim-green);
    color: #ffffff;
    transition: 0.3s;
}

.view-btn:hover {
    background: var(--bookim-green-dark);
    border-color: var(--bookim-green-dark);
    color: #ffffff;
}

/* =========================
   DELETE BUTTON
========================= */

.delete-btn {
    width: 38px;
    height: 38px;
    min-width: 38px;
    flex-shrink: 0;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    background: #fdf0f2;
    border: 1px solid #efcbd2;
    color: #c85d6d;

    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.delete-btn:hover {
    background: #f8dfe3;
    border-color: #e5aeb8;
    color: #a94455;
    transform: translateY(-1px);
}

/* =========================
   RANK SECTION
========================= */

.rank-section {
    margin-top: 20px;
    padding: 15px;
    background: var(--bookim-light-green);
    border: 1px solid #c9dfc6;
    border-radius: 12px;
}

.rank-label {
    color: var(--bookim-text);
    font-size: 13px;
    font-weight: 700;
}

.rank-label i {
    color: var(--bookim-green-dark);
}

.rank-input {
    border: 1px solid #c9dfc6;
    border-radius: 8px;
    color: var(--bookim-text);
    font-weight: 600;
}

.rank-input:focus {
    border-color: var(--bookim-green-dark);
    box-shadow: 0 0 0 0.2rem rgba(123, 181, 121, 0.2);
}

.rank-btn {
    background: var(--bookim-green-dark);
    border: 1px solid var(--bookim-green-dark);
    color: #fff;
    border-radius: 8px;
    font-weight: 600;
}

.rank-btn:hover {
    background: var(--bookim-green);
    border-color: var(--bookim-green);
    color: #fff;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 767px) {

    .competition-title {
        font-size: 25px;
    }

}

/* =========================
   SMALL MOBILE
========================= */

@media (max-width: 575px) {

    .competition-page {
        padding-top: 25px !important;
        padding-bottom: 25px !important;
    }

    .competition-icon {
        width: 52px;
        height: 52px;
    }

    .participant-card {
        border-radius: 12px;
    }

    /*
       Footer:
       File name stays on top,
       buttons stay below.
    */

    .participant-footer > div {
        width: 100%;
    }

    .participant-footer .file-name {
        width: 100%;
    }

    .participant-footer .d-flex.align-items-center.justify-content-end {
        width: 100%;
        justify-content: flex-end !important;
    }

    .view-btn {
        flex: 1;
    }

    .delete-btn {
        flex-shrink: 0;
    }

    .rank-btn {
        width: 100%;
    }

}

</style>


<div class="container-fluid py-4 py-md-5 competition-page">

    <div class="container-fluid px-2 px-sm-3 px-md-4 px-xl-5">

        <!-- TITLE -->

        <div class="text-center mb-4 mb-md-5">

            <div class="rounded-circle mx-auto
                        d-flex align-items-center justify-content-center
                        competition-icon mb-3">

                <i class="fa-solid fa-trophy"></i>

            </div>

            <h2 class="fw-bold mb-2 fs-4 fs-md-2 competition-title">

                Competition Participants

            </h2>

            <p class="small mb-0 competition-subtitle">

                Review submissions and assign competition ranks

            </p>

        </div>


        <!-- CARDS -->

        <div class="row g-3 g-md-4">

            @foreach ($data as $entry)

                <div class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 border-0 participant-card">


                        <!-- HEADER -->

                        <div class="card-header border-0 p-3 participant-header">

                            <div class="d-flex align-items-center">

                                <div class="rounded-circle
                                            d-flex align-items-center
                                            justify-content-center
                                            flex-shrink-0 me-2 me-sm-3
                                            user-icon">

                                    <i class="fa-solid fa-user-pen"></i>

                                </div>

                                <div class="flex-grow-1 overflow-hidden">

                                    <div class="fw-bold small text-truncate participant-name">

                                        {{ $entry->name }}

                                    </div>

                                    <div class="small text-truncate participant-email">

                                        {{ $entry->email }}

                                    </div>

                                </div>

                                <span class="badge rounded-pill ms-2
                                             flex-shrink-0 d-none d-sm-inline-block
                                             participant-badge">

                                    Participant

                                </span>

                            </div>

                        </div>


                        <!-- BODY -->

                        <div class="card-body p-3 p-md-4">


                            <!-- SUBMISSION -->

                            <div class="mb-3 mb-md-4">

                                <small class="d-block mb-1 info-label">

                                    <i class="fa-solid fa-pen-nib me-1"></i>

                                    Submission Title

                                </small>

                                <div class="fw-semibold small text-break info-value">

                                    {{ $entry->submission_title }}

                                </div>

                            </div>


                            <!-- COMPETITION -->

                            <div class="mb-3 mb-md-4">

                                <small class="d-block mb-1 info-label">

                                    <i class="fa-solid fa-trophy me-1"></i>

                                    Competition

                                </small>

                                <div class="fw-semibold small text-break info-value">

                                    {{ $entry->title }}

                                </div>

                            </div>


                            <!-- DATES -->

                            <div class="row g-2 mb-3 mb-md-4">

                                <div class="col-12 col-sm-6">

                                    <div class="rounded p-2 p-sm-3 h-100 date-box">

                                        <small class="d-block mb-1 info-label">

                                            <i class="fa-regular fa-calendar me-1"></i>

                                            Start Date

                                        </small>

                                        <div class="small fw-semibold text-break date-value">

                                            {{ $entry->start_date }}

                                        </div>

                                    </div>

                                </div>


                                <div class="col-12 col-sm-6">

                                    <div class="rounded p-2 p-sm-3 h-100 date-box">

                                        <small class="d-block mb-1 info-label">

                                            <i class="fa-regular fa-calendar-check me-1"></i>

                                            End Date

                                        </small>

                                        <div class="small fw-semibold text-break date-value">

                                            {{ $entry->end_date }}

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- PRIZE -->

                            <div class="mb-3 mb-md-4">

                                <small class="d-block mb-2 info-label">

                                    <i class="fa-solid fa-gift me-1"></i>

                                    Prize

                                </small>

                                <span class="badge rounded-pill px-3 py-2
                                             text-wrap text-break prize-badge">

                                    <i class="fa-solid fa-award me-1"></i>

                                    {{ $entry->prize }}

                                </span>

                            </div>


                            <!-- WRITING -->

                            <div>

                                <small class="d-block mb-2 info-label">

                                    <i class="fa-solid fa-align-left me-1"></i>

                                    Writing

                                </small>

                                <div class="rounded p-3 small text-break writing-box">

                                    {{ Str::limit($entry->writing, 120) }}

                                </div>

                            </div>


                            <!-- RANK FORM -->
<form action="{{ route('winning', $entry->id) }}"
      method="POST"
      class="rank-section">
    @csrf

    <div class="rank-label mb-2">
        <i class="fa-solid fa-ranking-star me-1"></i>
        Assign Rank
    </div>

    <div class="input-group">
        <input type="text"
               name="rank"
               class="form-control rank-input"
               placeholder="Enter 1, 2, 3 or lose"
               value="{{ $entry->rank }}"
               required>

        <button type="submit" class="btn rank-btn">
            <i class="fa-solid fa-check me-1"></i>
            Update
        </button>
    </div>
</form>


                        </div>


                        <!-- FOOTER -->

                        <div class="card-footer border-0 p-3 participant-footer">

                            <div class="d-flex flex-column flex-sm-row
                                        align-items-stretch align-items-sm-center
                                        gap-2">

                                <!-- FILE NAME -->

                                <div class="flex-grow-1 text-truncate">

                                    <small class="d-block text-truncate file-name">

                                        <i class="fa-regular fa-file me-1"></i>

                                        {{ $entry->file }}

                                    </small>

                                </div>


                                <!-- ACTION BUTTONS -->

                                <div class="d-flex align-items-center
                                            justify-content-end
                                            gap-2 flex-shrink-0">


                                    <!-- DELETE -->

                                    <a href="{{route('delcomp',$entry->id)}}"
                                       class="delete-btn"
                                       title="Delete">

                                        <i class="fa-solid fa-trash"></i>

                                    </a>


                                    <!-- VIEW FILE -->

                                    <a href="{{ asset('storage/books/' . $entry->file) }}"
                                       target="_blank"
                                       class="btn btn-sm flex-shrink-0 view-btn">

                                        <i class="fa-regular fa-eye me-1"></i>

                                        <span class="d-none d-sm-inline">

                                            View File

                                        </span>

                                        <span class="d-inline d-sm-none">

                                            View

                                        </span>

                                    </a>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            @endforeach

        </div>

    </div>

</div>

@endsection