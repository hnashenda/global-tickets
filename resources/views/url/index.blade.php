{{-- 
    This view acts as the dashboard showing all the shortened urls.
    It contains a list of all urls as well as buttons to: Create a Url, View a Url, Edit a Url, Delete a Url
--}}

@extends('layouts.app')

@section('content')

<div class="containerp-4" style="padding: 30px;">
    <div class="d-flex justify-content-between">
        <h1 class="text-left"> Shortened URLS</h1>
        <!-- Create a new target and shortened url -->
        <a href="{{ route('url.create') }}" class="btn btn-primary">Create Url</a>
    </div>    

    <div>
        <!-- Link to API Token view -->
        <a href="{{ route('showApiToken') }}" class="btn btn-primary">Access API Token</a>

    </div>
    @if (session('error'))
    <!-- sessio error eg. route does not exist -->
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif    
    @if($urls->isEmpty())
        <!-- If no URLs have been created for the user -->
        <div class="alert alert-danger">
            <p>You have not shortened any URLs yet.</p>
        </div>
    @else
    <div class="d-flex justify-content-center">
        <table class="table p-3">
            <thead class="bg-dark text-white">
                <tr>
                     <!-- Uncomment the next td inorder to show the target url -->
                    <!--th>Target Url</th-->
                    <th>Shortened Url</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($urls as $url)
                <tr>
                    <!-- Uncomment the next td inorder to show the target url -->
                    <!--td>{{ $url->target_url }}</td-->
                    <td>
                        <a href="{{ url('/redirect/' . $url->shortened_url) }}" target="_blank">
                            {{ $url->shortened_url }}
                        </a>
                    </td>
                    <td>
                        <!-- Link to view url details -->
                        <a href="{{ route('url.show', $url->id) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i> View
                        </a>
                    </td>
                    <td> 
                        <!-- Link to edit url view -->   
                        <a href="{{ route('url.edit', $url->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </td>
                    <td>        
                        <form method="post" action=" {{route('url.destroy', $url->id)}}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <!-- Lnk to delete url -->
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>    
                    </td>   
                </tr>
                @endforeach
            </tbody>            
        </table> 
    </div> 
</div>     
@endif
@endsection