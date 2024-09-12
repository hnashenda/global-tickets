@extends('layouts.app')

@section('content')
<div class="container p-4" style="padding: 30px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="flex-grow-1 text-center">Edit URL</h1>
        <a href="{{ route('url.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <form action="{{ route('url.update', $url->id) }}" method="POST" class="w-50 p-4 border rounded shadow-sm bg-light">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group mb-3">
                <label for="target_url" class="form-label">Target URL:</label>
                <input type="text" class="form-control" id="target_url" name="target_url" value="{{ old('target_url', $url->target_url) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="shortened_url" class="form-label">Shortened URL:</label>
                <input type="text" class="form-control" id="shortened_url" name="shortened_url" value="{{ old('shortened_url', $url->shortened_url) }}" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Update URL</button>
        </form>
    </div>
</div>   
@endsection