@extends('user.navbar')

@section('nav')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-12 col-md-8 col-lg-6">

            <div class="text-center py-5">

                <div class="mb-4">
                    <i class="fa-regular fa-file-pdf fa-4x"></i>
                </div>

                <h3 class="mb-3">Your PDF Book</h3>

                <p class="mb-4">
                    Click the button below to open your book PDF.
                </p>

                <a href="{{ asset('storage/books/' . $book->pdf) }}"
                   target="_blank"
                   class="theme-btn d-inline-flex align-items-center gap-2">

                    <i class="fa-regular fa-file-pdf"></i>
                    View PDF

                </a>

            </div>

        </div>

    </div>

</div>

@endsection