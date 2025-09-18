@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to your Dashboard!</h1>
    <p>You are logged in.</p>
    <a href="{{ route('games.index') }}" class="btn btn-primary">Go to Games</a>
</div>
@endsection
