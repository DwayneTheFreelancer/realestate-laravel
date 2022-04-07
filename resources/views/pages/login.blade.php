@extends('layouts.main')

@section('page-title', 'Login - Smith Realty')

@section('content')
    <div class="auth-page auth-page--login">
        <form class="auth-page__form" action="" method="POST">
            <h3 class="auth-page__title">Login</h3>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label" for="email">Email</label>
                <input class="auth-page__form-input" type="email" id="email" name="email">
            </div>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label" for="password">Password</label>
                <input class="auth-page__form-input" type="password" id="password" name="password">
            </div>
            <div class="auth-page__form-group">
                <button class="auth-page__form-button" type="sumbit">Login</button>
            </div>
        </form>
    </div>
@endsection