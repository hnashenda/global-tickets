{{-- 
    This view is to show the details fot a single url
--}}

@extends('layouts.app')

@section('content')

<div class="container p-4" style="padding: 30px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="flex-grow-1 text-center">URL Details</h1>
        <a href="{{ route('url.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="container" style="padding: 30px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">URL</th>
                </tr>
            </thead>
            <tbody>
                <tr>                     
                    <td>Target URL</td>
                    <!-- The original or long url -->
                    <td>{{$url->target_url}}</td>
                </tr>
                <tr>                    
                    <td>Shortened URL</td>
                     <!-- The shortened url -->
                    <td>{{$url->shortened_url}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection