@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{ __('Payment') }}</h2>
            </div>

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message')}}
                </div>
            @endif
            <form method="POST" action="{{ route('payments.store') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Make Payment</button>
            </form>
        </div>
    </div>
</div>
@endsection
