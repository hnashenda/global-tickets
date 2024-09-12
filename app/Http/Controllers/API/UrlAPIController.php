<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Url;
class UrlAPIController extends Controller
{
    // GET,PUT,POST & DELETE (Fetching, updating, adding and deleting data)

    // Adding, POST
    public function store(Request $request){
        $validatedData = $request->validate([
            'target_url' => 'required|string|max:255',
            'shortened_url' => 'required|string'
        ]);
        
        $validatedData['user_id'] = auth()->id();
        $url = Url::create($validatedData); 
    
        return response()->json(['message' => 'URL created successfully', 'url' => $url], 201);
    
    }

    // Fetching all data from server, GET
    public function index(){
        // Get the authenticated user's ID
        $userId = auth()->id();

        // Retrieve only the URLs that belong to the authenticated user
        $urls = Url::where('user_id', $userId)->get();

        //return response()->json($urls);
        //$urls = Url::all();
        return response()->json($urls);

    }

    //Fetching single record form server, GET
    public function show($id){

      /*  $url = Url::find($id);

        if (!$url) {
            return response()->json(['message' => 'URL not found'], 404);
        }

        return response()->json($url);
     */
        // Find the URL by ID and ensure it belongs to the authenticated user
        $url = Url::where('id', $id)->where('user_id', auth()->id())->first();

        if (!$url) {
            return response()->json(['message' => 'URL not found or access denied'], 404);
        }

         return response()->json($url);

    }

    //Updating data on a server. PATCH
    public function update(Request $request, $id){

        /*$url = Url::find($id);

        if (!$url) {
            return response()->json(['message' => 'URL not found'], 404);
        }

        $validatedData = $request->validate([
            'target_url' => 'required|string|max:255',
            'shortened_url' => 'required|string'
        ]);

        $url->update($validatedData);

        return response()->json(['message' => 'URL updated successfully', 'url' => $url]);
        */
        // Find the URL by ID and ensure it belongs to the authenticated user
        $url = Url::where('id', $id)->where('user_id', auth()->id())->first();

        if (!$url) {
            return response()->json(['message' => 'URL not found or access denied'], 404);
        }

        $validatedData = $request->validate([
            'target_url' => 'required|string|max:255',
            'shortened_url' => 'required|string'
        ]);

        $url->update($validatedData);

        return response()->json(['message' => 'URL updated successfully', 'url' => $url]);

    }

    //Deleting data from the server
    public function destroy($id){

        /*$url = Url::find($id);

        if (!$url) {
            return response()->json(['message' => 'URL not found'], 404);
        }

        $url->delete();

        return response()->json(['message' => 'URL deleted successfully']);
        */
        // Find the URL by ID and ensure it belongs to the authenticated user
        $url = Url::where('id', $id)->where('user_id', auth()->id())->first();

        if (!$url) {
            return response()->json(['message' => 'URL not found or access denied'], 404);
        }

        $url->delete();

        return response()->json(['message' => 'URL deleted successfully']);
        
    }

    
}
