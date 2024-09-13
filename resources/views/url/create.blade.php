{{-- 
    This view is create the urls
--}}
@extends('layouts.app')

@section('content')

<div class="container p-4" style="padding: 30px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="flex-grow-1 text-center">Create URLs</h1>
        <a href="{{ route('url.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="d-flex justify-content-center mt-5" >
        <form method="post" action="{{ route('url.store') }}" class="w-50 p-4 border rounded shadow-sm bg-light">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <!-- List errors eg.  when the input is not unique -->
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group mb-3">
                <label  for="target_url" class="form-label">Target Url</label>
                <input  type="text" class="form-control" name="target_url" required/>
            </div>
            
            <div class="form-group mb-3">
                <label  for="shortened_url" class="form-label">Shortened Url</label>
                <input  type="text" class="form-control" name="shortened_url" required/>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create</button>
        </form> 
    </div>
</div>       
@endsection