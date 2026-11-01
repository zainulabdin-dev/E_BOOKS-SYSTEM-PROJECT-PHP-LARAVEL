
@extends('admin.sidebar')

@section('admin')

<style>
    .contacts-page {
        background: #f7faf8;
        min-height: 100vh;
        padding: 30px;
    }

    .contacts-header {
        margin-bottom: 25px;
    }

    .contacts-header h2 {
        font-size: 28px;
        font-weight: 700;
        color: #172b20;
        margin-bottom: 6px;
    }

    .contacts-header p {
        color: #777;
        margin: 0;
    }

    .contact-card {
        background: #fff;
        border-radius: 15px;
        padding: 24px;
        margin-bottom: 20px;
        border: 1px solid #e7eee9;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .contact-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #198754;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: 700;
    }

    .user-info h4 {
        margin: 0;
        font-size: 18px;
        color: #172b20;
        font-weight: 600;
    }

    .user-info a {
        color: #198754;
        text-decoration: none;
        font-size: 14px;
    }

    .contact-date {
        color: #888;
        font-size: 13px;
    }

    .message-box {
        background: #f7faf8;
        border-left: 4px solid #198754;
        border-radius: 8px;
        padding: 18px;
    }

    .message-box span {
        display: block;
        font-size: 13px;
        color: #777;
        margin-bottom: 7px;
        font-weight: 600;
    }

    .message-box p {
        margin: 0;
        color: #333;
        line-height: 1.7;
        word-break: break-word;
    }

    @media (max-width: 767px) {

        .contacts-page {
            padding: 20px 15px;
        }

        .contact-top {
            align-items: flex-start;
            flex-direction: column;
        }

        .contact-date {
            margin-left: 64px;
        }
    }
</style>


<div class="contacts-page">

    <div class="contacts-header">
        <h2>Contact Messages</h2>
        <p>Messages received from website users</p>
    </div>


    @forelse($contacts as $contact)

        <div class="contact-card">

            <div class="contact-top">

                <div class="user-info">

                    <div class="user-avatar">
                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                    </div>

                    <div>
                        <h4>{{ $contact->name }}</h4>

                        <a href="mailto:{{ $contact->email }}">
                            {{ $contact->email }}
                        </a>
                    </div>

                </div>

                <div class="contact-date">
                    {{ $contact->created_at->format('d M Y, h:i A') }}
                </div>

            </div>


            <div class="message-box">

                <span>MESSAGE</span>

                <p>
                    {{ $contact->message }}
                </p>

            </div>

        </div>

    @empty

        <div class="contact-card text-center">

            <h4>No Messages Found</h4>

            <p class="text-muted mb-0">
                There are currently no contact messages.
            </p>

        </div>

    @endforelse

</div>

@endsection
