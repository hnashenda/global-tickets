<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class TokenController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | TokenController Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles displaying the API Token for the logged in user. 
    | Token can be used to access the api
    |
    */

    public function show()
    {
        // Get the token from the session
        $token = session('api_token');

        // Check if the token is available
        if (!$token) {
            // If token is not avaialble generate error message and return  to index view
            return redirect()->back()->withErrors('No API token found. Please log in again to generate token.');
        }

        // Return the view and pass the token
        return view('apitoken', ['token' => $token]);
    }
}
