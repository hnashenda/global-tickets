<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    //List all
    public function index(){
        /*
        $urls = Url::all();
        return view('url.index',compact('urls'));
        */
        $urls = Url::where('user_id', auth()->id())->get(); //  URLs only for the authenticated user
        return view('url.index', compact('urls'));
    }

    //Routing to page/view which will hold the create form
    public function create(){
        return view('url.create');
    }

    // This would create the entry for the course
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'target_url' => ['required', 'string', 'max:255', 'url', 'unique:urls'],  // Validation for a legitimate and unique URL
            'shortened_url' => ['required', 'string', 'max:255', 'unique:urls']       // Validation for a unique string
        ]);
    
        /*$url = Url::create($validatedData); 
        $url->user_id = auth()->id(); // Associate with the authenticated user
        $url->save();*/
        // Add user_id to the data being saved
        $validatedData['user_id'] = auth()->id(); // Get the currently logged-in user's ID

        $url = Url::create($validatedData);

        return redirect()->route('url.index')->with('success', 'URL shortened successfully');
        /* 
        Url::create($request->all());
        return redirect()->route('url.index');*/
    
    }

    //Fetching single record form server, GET
    public function show($id){

        $url = Url::find($id);
        return view('url.show',compact('url'));

    }

    //Fetching single record form server, GET
    public function edit($id){

        $url = Url::find($id);
        return view('url.edit', compact('url'));    
    }

    //Updating data on a server. PATCH
    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'target_url' => ['required', 'string', 'max:255', 'url', Rule::unique('urls')->ignore($url->id)], // Ignore uniqueness check for current URL
            'shortened_url' => ['required', 'string', 'max:255', Rule::unique('urls')->ignore($url->id)]      // Ignore uniqueness check for current shortened URL
        ]);
    
        $url = Url::findOrFail($id);
        $url->update($validatedData);
    
        return redirect()->route('url.index')->with('success', 'URL updated successfully!');

    }

    //Deleting entry from the database
    public function destroy($id){

        //$url = Url::find($id);
        // Find the URL by its ID
        $url = Url::findOrFail($id);

        // Delete the URL from the database
        $url->delete();

        // Redirect to the list of URLs with a success message
        return redirect()->route('url.index')->with('success', 'URL deleted successfully');

    }

    // Find the URL by shortened_url
    public function redirect($shortened_url)
    {
    
        $url = Url::where('shortened_url', $shortened_url)->first();

        // If the shortened URL exists, redirect to the target URL
        if ($url) {
            return redirect($url->target_url);
            //return redirect()->away($url->target_url);
        }

        // If the shortened URL doesn't exist, show a 404 error
        abort(404, 'Shortened URL not found');
    }



}
