@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{ __('Contact') }}</h2>
            </div>

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message')}}
                </div>
            @endif
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}" name="email" id="email" aria-describedby="emailHelpId" placeholder="" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
