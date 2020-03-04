@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div class="title">
            <h2>{{ __('Dashboard') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection
