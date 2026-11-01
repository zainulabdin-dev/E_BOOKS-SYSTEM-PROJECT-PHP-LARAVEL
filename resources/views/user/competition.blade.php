@extends('user.navbar')
@section('nav')
    

<style>
    .competition-page {
        padding: 60px 0;
    }

    .competition-wrapper {
        width: 90%;
        max-width: 950px;
        margin: auto;
    }

    .competition-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        padding: 35px;
        margin-bottom: 30px;
    }

    .competition-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .competition-title h2 {
        margin-bottom: 10px;
    }

    .competition-title p {
        color: #777;
    }

    .competition-badge {
        display: inline-block;
        background: #4CAF50;
        color: #fff;
        padding: 7px 18px;
        border-radius: 30px;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .competition-card hr {
        border: 0;
        border-top: 1px solid #eee;
        margin: 25px 0;
    }

    .competition-info {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-top: 25px;
    }

    .info-box {
        background: #f7f7f7;
        padding: 18px;
        border-radius: 8px;
    }

    .info-box small {
        display: block;
        color: #777;
        margin-bottom: 6px;
    }

    .competition-rules {
        padding-left: 20px;
        color: #666;
    }

    .competition-rules li {
        margin-bottom: 8px;
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group.full {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .form-control-custom {
        width: 100%;
        padding: 13px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
        font-size: 15px;
        box-sizing: border-box;
    }

    .form-control-custom:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.1);
    }

    textarea.form-control-custom {
        resize: vertical;
        min-height: 180px;
    }

    .file-note {
        color: #777;
        font-size: 13px;
        margin-top: 6px;
        display: block;
    }

    .agreement {
        margin: 10px 0 25px;
    }

    .submit-area {
        text-align: center;
    }

    .submit-btn {
        border: none;
        padding: 13px 28px;
        border-radius: 5px;
        background: #4CAF50;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
    }

    @media (max-width: 767px) {

        .competition-page {
            padding: 35px 15px;
        }

        .competition-wrapper {
            width: 100%;
        }

        .competition-card {
            padding: 25px 18px;
        }

        .competition-info,
        .form-row {
            grid-template-columns: 1fr;
        }

        .form-group.full {
            grid-column: auto;
        }

    }
</style>


<div class="competition-page">

    <div class="competition-wrapper">

        <!-- Competition Details -->
        <div class="competition-card">

            <div class="competition-title">

                <span class="competition-badge">
                    Writing Competition
                </span>

                <h2>
                    Short Story Writing Competition
                </h2>

                <p>
                    Show your creativity and submit your best short story.
                </p>

            </div>

            <hr>

            <div class="competition-info">

                <div class="info-box">
                    <small>
                        <i class="fa-light fa-calendar-days"></i>
                        Start Date
                    </small>

                    <strong>
                        {{$news->start_date}}
                    </strong>
                </div>

                <div class="info-box">
                    <small>
                        <i class="fa-light fa-calendar-days"></i>
                        End Date
                    </small>

                    <strong>
              {{$news->end_date}}
                    </strong>
                </div>

                <div class="info-box">
                    <small>
                        <i class="fa-light fa-pen-nib"></i>
                        Topic
                    </small>

                    <strong>
                     {{$news->title}}
                    </strong>
                </div>

                <div class="info-box">
                    <small>
                        <i class="fa-light fa-trophy"></i>
                        Prize
                    </small>

                    <strong>
                          {{$news->prize}}
                    </strong>
                </div>

            </div>

            <hr>

            <h4>
                About Competition
            </h4>

            <p style="color:#777;">
               {{$news->description}}
            </p>

            <br>

            <h4>
                Competition Rules
            </h4>

            <ul class="competition-rules">

                <li>
                    Submit your own original work.
                </li>

                <li>
                    Story should be related to the given topic.
                </li>

                <li>
                    Only one submission is allowed per participant.
                </li>

                <li>
                    Submission must be made before the deadline.
                </li>

            </ul>

        </div>


        <!-- Participation Form -->
        <div class="competition-card">

            <div class="competition-title">

                <h2>
                    Participate in Competition
                </h2>

                <p>
                    Submit your writing below.
                </p>

            </div>
<form action="{{ route('comp.upload') }}" method="post" enctype="multipart/form-data">

    @csrf

    <div class="form-row">

        <div class="form-group">

            <label>Your Name</label>

            <input type="text"
                   name="name"
                   class="form-control-custom"
                   placeholder="Enter your name">

        </div>


        <div class="form-group">

            <label>Email</label>

            <input type="email"
                   name="email"
                   class="form-control-custom"
                   placeholder="Enter your email">

        </div>


        <div class="form-group full">

            <label>Submission Title</label>

            <input type="text"
                   name="submission_title"
                   class="form-control-custom"
                   placeholder="Enter your story title">

        </div>


        <div class="form-group full">

            <label>Your Writing</label>

            <textarea name="writing"
                      class="form-control-custom"
                      placeholder="Write your story here..."></textarea>

        </div>


        <div class="form-group full">

            <label>Upload File</label>

            <input type="file"
                   name="file"
                   class="form-control-custom">

            <span class="file-note">
                Accepted formats: PDF, DOC, DOCX
            </span>

        </div>

    </div>


    <div class="agreement">

        <input type="checkbox"
               id="agree"
               name="agree">

        <label for="agree">
            I confirm that this is my original work.
        </label>

    </div>


    <input type="hidden"
           value="{{ $news->start_date }}"
           name="start_date">

    <input type="hidden"
           value="{{ $news->end_date }}"
           name="end_date">

    <input type="hidden"
           value="{{ $news->title }}"
           name="title">

    <input type="hidden"
           value="{{ $news->prize }}"
           name="prize">


    <div class="submit-area">

        <button type="submit" class="submit-btn">

            Submit Competition Entry

            <i class="fa-regular fa-arrow-right-long"></i>

        </button>

    </div>
<input type="hidden" value="{{$userid}}" name="userid">
<input type="hidden" value="empty" name="rank">
</form>

        </div>

    </div>

</div>
@endsection