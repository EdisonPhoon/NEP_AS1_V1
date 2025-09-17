@extends('layouts.app')

@section('title', 'Edit New Game')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Game</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('games.update', $game->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Game Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $game->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre *</label>
                            <input type="text" class="form-control @error('genre') is-invalid @enderror" 
                                   id="genre" name="genre" value="{{ old('genre', $game->genre) }}" required>
                            @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating *</label>
                            <input type="number" class="form-control @error('rating') is-invalid @enderror" 
                                   id="rating" name="rating" value="{{ old('rating', $game->rating) }}" min="0" max="10" required>
                            @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Game
                            </button>
                            <a href="{{ route('games.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection