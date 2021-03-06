@extends('layouts.master')

@section('content')
    <div class="header-empty-space"></div>
    <form action="{{ route('signin') }}" method="post">
        <div class="input-group">
            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        {{ csrf_field() }}
        <button type="submit">Sign In</button>
    </form>
@endsection