@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{ __('Notifications') }}</h2>
            </div>

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message')}}
                </div>
            @endif
            <ul>
                @forelse($notifications as $notification)
                    @if ($notification->type === 'App\Notifications\PaymentReceived')
                        <li>We have received a payment of {{ $notification->data['amount'] }} from you.</li>
                    @endif
                @empty
                    <li>You have no unread notifications.</li>
                @endforelse
            </ul>

        </div>
    </div>
</div>
@endsection
