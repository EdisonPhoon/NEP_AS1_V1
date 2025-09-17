@extends('layouts.app')

@section('title', 'Game Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Game Details</h2>
                </div>
                <div class="card-body">
                    @if($game)
                        <div class="mb-3">
                            <strong>ID:</strong> {{ $game->id }}
                        </div>
                        <div class="mb-3">
                            <strong>Name:</strong> {{ $game->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Genre:</strong> {{ $game->genre }}
                        </div>
                        <div class="mb-3">
                            <strong>Rating:</strong> {{ $game->rating }}
                        </div>
                        <div class="mb-3">
                            <strong>Created:</strong> {{ $game->created_at->format('M d, Y') }}
                        </div>
                        <div class="mb-3">
                            <strong>Last Updated:</strong> {{ $game->updated_at->format('M d, Y') }}
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Game not found!
                        </div>
                    @endif

                    <div class="d-flex gap-2">
                        <a href="{{ route('games.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                        <a href="{{ route('games.edit', $game) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection