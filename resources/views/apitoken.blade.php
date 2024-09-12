@extends('layouts.app')

@section('content')
<div class="container p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="flex-grow-1 text-center">API Token</h1>
        <a href="{{ route('url.index') }}" class="btn btn-secondary">Back</a>
    </div>
    
    <p>Copy this token and use it to authenticate your API requests:</p>
    <div class="alert alert-info">
        <strong id="api-token">{{ $token }}</strong>
    </div>
    <button class="btn btn-primary" onclick="copyApiToken()">Copy Token</button>

    <p><small>Use the token for API requests</small></p>
</div>

<script>
    function copyApiToken() {
        const token = document.getElementById('api-token').innerText;
        navigator.clipboard.writeText(token).then(() => {
            alert('Token copied to clipboard!');
        });
    }
</script>
@endsection
