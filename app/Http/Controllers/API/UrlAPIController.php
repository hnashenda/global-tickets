<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Validation\Rule;

class UrlAPIController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | UrlAPIController Controller
    |--------------------------------------------------------------------------
    |
    | This API controller handles GET,PUT,POST & DELETE through the API
    | (Fetching, updating, adding and deleting data)    
    |
    */
    
    // Adding, POST. The function to post to the database or create an entry
    public function store(Request $request){

        // Validate the input data
        $validatedData = $request->validate([
            'target_url' => ['required', 'string', 'max:255', 'url', Rule::unique('urls')->where(function ($query) {
                return $query->where('user_id', auth()->id());
            })],
            'shortened_url' => ['required', 'string', 'max:255', Rule::unique('urls')->where(function ($query) {
                return $query->where('user_id', auth()->id());
            })]
        ]);

        // Get the currently logged-in user's ID and add id to the data being saved
        $validatedData['user_id'] = auth()->id();

        // Create and save the url data
        $url = Url::create($validatedData); 
                
        return response()->json(['message' => 'URL created successfully', 'url' => $url], 201);
    
    }

    // Fetching all data from server, GET
    public function index(){
        
        // Get the authenticated user's ID
        $userId = auth()->id();

        // Retrieve only the URLs that belong to the authenticated user
        $urls = Url::where('user_id', $userId)->get();
                
        return response()->json($urls);

    }

    //Fetching single record form server, GET
    public function show($id){
      
        // Find the URL by ID and ensure it belongs to authenticated user
        $url = Url::where('id', $id)->where('user_id', auth()->id())->first();

        // No url data
        if (!$url) {
            return response()->json(['message' => 'URL not found or access denied'], 404);
        }
        
         return response()->json($url);

    }

    // Updating data on a server. PATCH
    public function update(Request $request, $id){
        
        // Find the URL by ID and ensure it belongs to authenticated user
        $url = Url::where('id', $id)->where('user_id', auth()->id())->first();

        // Validate data from input form
        $validatedData = $request->validate([
            'target_url' => ['required', 'string', 'max:255', 'url', Rule::unique('urls')->where(function ($query) use ($url) {
                return $query->where('user_id', auth()->id())->where('id', '!=', $url->id);
            })],
            'shortened_url' => ['required', 'string', 'max:255', Rule::unique('urls')->where(function ($query) use ($url) {
                return $query->where('user_id', auth()->id())->where('id', '!=', $url->id);
            })]
        ]);

        
        // No url data
        if (!$url) {
            return response()->json(['message' => 'URL not found or access denied'], 404);
        }

        // Update the database
        $url->update($validatedData);
        
        return response()->json(['message' => 'URL updated successfully', 'url' => $url]);

    }

    //Delete single url data from the server
    public function destroy($id){
        
        // Find the URL by ID and ensure it belongs to authenticated user
        $url = Url::where('id', $id)->where('user_id', auth()->id())->first();

        // No url data
        if (!$url) {
            return response()->json(['message' => 'URL not found or access denied'], 404);
        }

        // Delete data from database
        $url->delete();
       
        return response()->json(['message' => 'URL deleted successfully']);
        
    }

    
}
