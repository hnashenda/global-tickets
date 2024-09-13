<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Validation\Rule;

class UrlController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | UrlController Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles GET,PUT,POST & DELETE 
    | (Fetching, updating, adding and deleting data)    
    |
    */
    
    //List all urls associated with authenticated user
    public function index(){
        
        //  URLs only for the authenticated user
        $urls = Url::where('user_id', auth()->id())->get(); 

        // Return the index view with list of urls
        return view('url.index', compact('urls'));
    }

    //Routing to view/create which will hold the create form
    public function create(){
        return view('url.create');
    }

    // // Adding, POST. The function to post to the database or create an entry
    public function store(Request $request){

        // Validate the input data
        $validatedData = $request->validate([
            // Ensure target url is required, a valid string, a valid url format and has max length of 255
            // Uniqueness of target_url is checked for current user only. This allows different users to use
            // the same url but prevents the same user from duplicating it 
            'target_url' => ['required', 'string', 'max:255', 'url', Rule::unique('urls')->where(function ($query) {
                return $query->where('user_id', auth()->id());
            })],
            // Ensure target url is required, a valid string, a valid url format and has max length of 255
            // Uniqueness of target_url is checked for current user only. This allows different users to use
            // the same url but prevents the same user from duplicating it 
            'shortened_url' => ['required', 'string', 'max:255', Rule::unique('urls')->where(function ($query) {
                return $query->where('user_id', auth()->id());
            })]
        ]);
            
        // Get the currently logged-in user's ID and add id to the data being saved
        $validatedData['user_id'] = auth()->id(); 

        // Create and save the url data
        $url = Url::create($validatedData);

        // Redirect to the list of URLs with a success message
        return redirect()->route('url.index')->with('success', 'URL shortened successfully');      
   }

    //Fetching single record form server, GET
    public function show($id){

        // Get url data for a single record using its id
        $url = Url::find($id);

        // Return view/show
        return view('url.show',compact('url'));
    }

    //Fetching single record form server, GET
    public function edit($id){

        // Find single record data and automatically trigger a 404 error page if no handled    
        $url = Url::findOrFail($id);

        // Return view/edit
        return view('url.edit', compact('url'));    
    }

    // Updating data on a server. PATCH
    public function update(Request $request, $id){

        // Find single record data and automatically trigger a 404 error page if no handled
        $url = Url::findOrFail($id);

        // Validate the input data
        $validatedData = $request->validate([
            // Ensure target url is required, a valid string, a valid url format and has max length of 255
            // Uniqueness of target_url is checked for current user only. This allows different users to use
            // the same url but prevents the same user from duplicating it 
            'target_url' => ['required', 'string', 'max:255', 'url', Rule::unique('urls')->ignore($url->id)->where(function ($query) {
                return $query->where('user_id', auth()->id());
            })],
            // Ensure shortened url is required, a valid string, a valid url format and has max length of 255
            // Uniqueness of target_url is checked for current user only. This allows different users to use
            // the same url but prevents the same user from duplicating it 
            'shortened_url' => ['required', 'string', 'max:255', Rule::unique('urls')->ignore($url->id)->where(function ($query) {
                return $query->where('user_id', auth()->id());
            })]
        ]);
        
        
        // Update data
        $url->update($validatedData);
    
        // Redirect to the list of URLs with a success message    
        return redirect()->route('url.index')->with('success', 'URL updated successfully!');

    }

    //Deleting entry from the database
    public function destroy($id){
        
        // Find single record data and automatically trigger a 404 error page if no handled
        $url = Url::findOrFail($id);

        // Delete single record
        $url->delete();

        // Redirect to the list of URLs with a success message
        return redirect()->route('url.index')->with('success', 'URL deleted successfully');

    }

    // Function that handles clicking on shortened url to redirect to actula url
    public function redirect($shortened_url)
    {
        // Find shortened url
        $url = Url::where('shortened_url', $shortened_url)->first();

        // If the shortened URL exists, redirect to the target URL
        if ($url) {
            return redirect($url->target_url);
            // Return redirect()->away($url->target_url);
        }

        // If the shortened URL doe not exist, show a 404 error
        abort(404, 'Shortened URL not found');
    }



}
