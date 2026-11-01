
@extends('user.navbar')

@section('nav')

<style>

/* =========================================================
   COMPETITION SUBMISSION - E_BOOK GREEN THEME
========================================================= */

.submission-page {
    background: #f7faf8;
    padding: 65px 15px;
    min-height: 75vh;
}

.submission-container {
    max-width: 1050px;
    margin: auto;
}

/* HEADER */

.submission-heading {
    text-align: center;
    margin-bottom: 40px;
}

.submission-heading .small-title {
    color: #198754;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 8px;
}

.submission-heading h2 {
    color: #17221b;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 10px;
}

.submission-heading p {
    color: #777;
    margin: 0;
}

/* MAIN CARD */

.submission-card {
    background: #fff;
    border: 1px solid #e7eee9;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 35px rgba(0,0,0,.06);
}

/* TOP */

.submission-top {
    padding: 30px;
    background: linear-gradient(135deg, #198754, #146c43);
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.submission-top h3 {
    margin: 0 0 6px;
    font-size: 25px;
    font-weight: 700;
}

.submission-top p {
    margin: 0;
    opacity: .9;
}

/* STATUS */

.pending-badge {
    background: #fff;
    color: #198754;
    padding: 10px 17px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    white-space: nowrap;
}

.pending-badge i {
    margin-right: 6px;
}

/* CONTENT */

.submission-content {
    padding: 32px;
}

/* USER */

.user-section {
    display: flex;
    align-items: center;
    gap: 15px;
    padding-bottom: 25px;
    border-bottom: 1px solid #edf1ee;
    margin-bottom: 25px;
}

.user-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #e9f7ef;
    color: #198754;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 23px;
    font-weight: 700;
}

.user-section h4 {
    margin: 0 0 4px;
    font-size: 19px;
    font-weight: 700;
    color: #17221b;
}

.user-section span {
    color: #888;
    font-size: 13px;
}

/* INFO */

.info-box {
    height: 100%;
    background: #f8faf9;
    border: 1px solid #e8eee9;
    border-radius: 12px;
    padding: 18px;
}

.info-label {
    display: block;
    color: #888;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .7px;
    margin-bottom: 7px;
}

.info-value {
    color: #17221b;
    font-size: 15px;
    font-weight: 600;
}

/* WRITING */

.writing-box {
    margin-top: 25px;
    padding: 24px;
    border: 1px solid #e8eee9;
    border-radius: 12px;
}

.writing-box h5 {
    color: #198754;
    font-size: 17px;
    font-weight: 700;
    margin-bottom: 15px;
}

.writing-box p {
    color: #666;
    line-height: 1.8;
    margin: 0;
}

/* FILE */

.file-box {
    margin-top: 20px;
    padding: 18px;
    background: #f8faf9;
    border-radius: 12px;
    border: 1px solid #e8eee9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
}

.file-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.file-icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    background: #e9f7ef;
    color: #198754;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
}

.file-name {
    color: #333;
    font-size: 14px;
    font-weight: 600;
    word-break: break-all;
}

.file-label {
    color: #999;
    font-size: 12px;
}

.view-file-btn {
    background: #198754;
    color: #fff;
    text-decoration: none;
    padding: 9px 16px;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
}

.view-file-btn:hover {
    color: #fff;
    background: #146c43;
}

/* RESULT */

.result-box {
    margin-top: 25px;
    padding: 22px;
    border-radius: 12px;
    background: #fff8e6;
    border: 1px solid #f1dfad;
    text-align: center;
}

.result-box i {
    color: #c99700;
    font-size: 23px;
    margin-bottom: 8px;
}

.result-box h5 {
    color: #705700;
    font-weight: 700;
    margin: 0 0 5px;
}

.result-box p {
    color: #8a7440;
    margin: 0;
    font-size: 14px;
}

/* RESPONSIVE */

@media(max-width: 767px) {

    .submission-page {
        padding: 45px 15px;
    }

    .submission-heading h2 {
        font-size: 29px;
    }

    .submission-top {
        padding: 25px 20px;
        flex-direction: column;
        align-items: flex-start;
    }

    .submission-content {
        padding: 22px;
    }

    .file-box {
        align-items: flex-start;
        flex-direction: column;
    }

    .view-file-btn {
        width: 100%;
        text-align: center;
    }

}

</style>


<section class="submission-page mb-4">

    <div class="submission-container">

        <!-- PAGE HEADER -->

        <div class="submission-heading">

            <div class="small-title">
                Competition Submission
            </div>

            <h2>
                Your Submission
            </h2>

            <p>
                Your competition entry has been successfully submitted.
            </p>

        </div>


        @foreach ($winner as $item)

        <div class="submission-card">

            <!-- TOP -->

            <div class="submission-top">

                <div>

                    <h3>
                        {{ $item->title }}
                    </h3>

                    <p>
                        {{ $item->submission_title }}
                    </p>

                </div>
@foreach ($winner2 as $result)
@if ($result->rank == 'lose')
      <div class="pending-badge">

                <i class="fa-solid fa-face-sad-tear" style="color: rgb(5, 155, 40);"></i>

                    Better Luck Next Time

                </div>
@elseif($result->rank == 1 || $result->rank == 2 || $result->rank == 3)
     <div class="pending-badge">

                  
                     <i class="fa-solid fa-trophy" style="color: rgb(5, 155, 40);font-size: 20px;"></i>

                CONGRATULATION

                </div>
                @else
                 <div class="pending-badge">

                    <i class="fa-regular fa-clock"></i>

                Result Pending

                </div>
                @endif
   
@endforeach
               

            </div>


            <div class="submission-content">

                <!-- USER -->

                <div class="user-section">

                    <div class="user-avatar">

                        {{ strtoupper(substr($item->name, 0, 1)) }}

                    </div>

                    <div>

                        <h4>
                            {{ $item->name }}
                        </h4>

                        <span>
                            {{ $item->email }}
                        </span>

                    </div>

                </div>


                <!-- DETAILS -->

                <div class="row g-3">

                    <div class="col-md-6">

                        <div class="info-box">

                            <span class="info-label">
                                Submission Title
                            </span>

                            <div class="info-value">
                                {{ $item->submission_title }}
                            </div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="info-box">

                            <span class="info-label">
                                Competition
                            </span>

                            <div class="info-value">
                                {{ $item->title }}
                            </div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="info-box">

                            <span class="info-label">
                                Competition Start
                            </span>

                            <div class="info-value">
                                {{ \Carbon\Carbon::parse($item->start_date)->format('d M Y') }}
                            </div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="info-box">

                            <span class="info-label">
                                Competition End
                            </span>

                            <div class="info-value">
                                {{ \Carbon\Carbon::parse($item->end_date)->format('d M Y') }}
                            </div>

                        </div>

                    </div>

                </div>


                <!-- WRITING -->

                <div class="writing-box">

                    <h5>

                        <i class="fa-solid fa-pen-nib me-2"></i>

                        Submitted Writing

                    </h5>

                    <p>
                        {{ $item->writing }}
                    </p>

                </div>


                <!-- FILE -->

                @if($item->file)

                <div class="file-box">

                    <div class="file-info">

                        <div class="file-icon">

                            <i class="fa-solid fa-file-pdf"></i>

                        </div>

                        <div>

                            <div class="file-name">
                                {{ $item->file }}
                            </div>

                            <div class="file-label">
                                Uploaded Submission
                            </div>

                        </div>

                    </div>

                    <a href="{{ asset('storage/books/' . $item->file) }}"
                       target="_blank"
                       class="view-file-btn">

                        <i class="fa-solid fa-eye me-1"></i>

                        View File

                    </a>

                </div>

                @endif


                <!-- RESULT -->

             

            </div>

        </div>

        @endforeach

    </div>

</section>


@foreach ($winner as $winner1)

    {{-- RESULT PENDING --}}
    @if ($winner1->rank == 'empty')

        <div class="result-box mb-5">

            <i class="fa-regular fa-clock"></i>

            <h5>
                Competition Result Pending
            </h5>

            <p>
                The winner will be announced after the competition
                evaluation process is completed.
            </p>

        </div>


    {{-- LOSER RESULT --}}
    @elseif ($winner1->rank == 'lose')

        <style>
            .lose-announcement {
                background: #f7faf8;
                padding: 70px 15px;
                min-height: 70vh;
            }

            .lose-box {
                max-width: 750px;
                margin: auto;
                background: #fff;
                border: 1px solid #e5eee8;
                border-radius: 18px;
                padding: 45px 30px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,.06);
            }

            .lose-icon {
                width: 75px;
                height: 75px;
                margin: 0 auto 20px;
                border-radius: 50%;
                background: #fff3cd;
                color: #856404;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 32px;
            }

            .lose-box .small-title {
                color: #198754;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
            }

            .lose-box h2 {
                color: #17221b;
                font-size: 34px;
                font-weight: 700;
                margin: 10px 0;
            }

            .lose-name {
                color: #198754;
                font-size: 27px;
                font-weight: 700;
                margin: 15px 0 8px;
            }

            .lose-submission {
                color: #777;
                font-size: 15px;
            }

            .lose-message {
                display: inline-block;
                margin-top: 22px;
                padding: 10px 22px;
                background: #fff3cd;
                color: #856404;
                border-radius: 30px;
                font-weight: 700;
            }

            .competition-name {
                color: #555;
                margin-top: 20px;
            }

            @media(max-width: 576px) {

                .lose-announcement {
                    padding: 45px 15px;
                }

                .lose-box {
                    padding: 35px 20px;
                }

                .lose-box h2 {
                    font-size: 28px;
                }

                .lose-name {
                    font-size: 23px;
                }
            }
        </style>

        <section class="lose-announcement">

            <div class="lose-box">

                <div class="lose-icon">
                    <i class="fa-solid fa-face-sad-tear"></i>
                </div>

                <div class="small-title">
                    Competition Result
                </div>

                <h2>
                    Better Luck Next Time!
                </h2>

                <div class="lose-name">
                    {{ $winner1->name }}
                </div>

                <div class="lose-submission">
                    Your submission
                    <strong>{{ $winner1->submission_title }}</strong>
                    was evaluated by the competition judges.
                </div>

                <div class="competition-name">
                    {{ $winner1->title }} Competition
                </div>

                <div class="lose-message">
                    <i class="fa-solid fa-circle-info me-1"></i>
                    Unfortunately, you did not win this time.
                </div>

            </div>

        </section>


    {{-- WINNER RESULT --}}
    @else

        <style>
            .winner-announcement {
                background: #f7faf8;
                padding: 70px 15px;
                min-height: 70vh;
            }

            .winner-box {
                max-width: 750px;
                margin: auto;
                background: #fff;
                border: 1px solid #e5eee8;
                border-radius: 18px;
                padding: 45px 30px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,.06);
            }

            .winner-icon {
                width: 75px;
                height: 75px;
                margin: 0 auto 20px;
                border-radius: 50%;
                background: #e9f7ef;
                color: #198754;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 32px;
            }

            .winner-box .small-title {
                color: #198754;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
            }

            .winner-box h2 {
                color: #17221b;
                font-size: 34px;
                font-weight: 700;
                margin: 10px 0;
            }

            .rank-badge {
                display: inline-block;
                margin-top: 10px;
                padding: 7px 18px;
                background: #198754;
                color: #fff;
                border-radius: 30px;
                font-size: 14px;
                font-weight: 700;
            }

            .winner-name {
                color: #198754;
                font-size: 27px;
                font-weight: 700;
                margin: 15px 0 8px;
            }

            .winner-submission {
                color: #777;
                font-size: 15px;
            }

            .prize {
                display: inline-block;
                margin-top: 22px;
                padding: 10px 22px;
                background: #e9f7ef;
                color: #146c43;
                border-radius: 30px;
                font-weight: 700;
            }

            .competition-name {
                color: #555;
                margin-top: 20px;
            }

            @media(max-width: 576px) {

                .winner-announcement {
                    padding: 45px 15px;
                }

                .winner-box {
                    padding: 35px 20px;
                }

                .winner-box h2 {
                    font-size: 28px;
                }

                .winner-name {
                    font-size: 23px;
                }
            }
        </style>

        <section class="winner-announcement">

            <div class="winner-box">

                <div class="winner-icon">
                    <i class="fa-solid fa-trophy"></i>
                </div>

                <div class="small-title">
                    Competition Result
                </div>

                <h2>
                    Congratulations!
                </h2>

                <div class="rank-badge">

                    <i class="fa-solid fa-medal me-1"></i>

                    Rank:
                    {{ $winner1->rank }}

                </div>

                <div class="winner-name">
                    {{ $winner1->name }}
                </div>

                <div class="winner-submission">

                    Winner of
                    <strong>
                        {{ $winner1->submission_title }}
                    </strong>

                </div>

                <div class="competition-name">
                    {{ $winner1->title }} Competition
                </div>


                {{-- RANK 1 --}}
                @if ($winner1->rank == 1)

                    <div class="prize">

                        <i class="fa-solid fa-gift me-1"></i>

                        Prize:
                        {{ $winner1->prize }}

                    </div>


                {{-- RANK 2 --}}
                @elseif ($winner1->rank == 2)

                    <div class="prize">

                        <i class="fa-solid fa-gift me-1"></i>

                        Prize: $70

                    </div>


                {{-- RANK 3 / OTHER --}}
                @else

                    <div class="prize">

                        <i class="fa-solid fa-gift me-1"></i>

                        Prize: $50

                    </div>

                @endif

            </div>

        </section>

    @endif

@endforeach



@endsection

