<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class TokenController extends Controller
{
    public function show()
    {
        // Retrieve the token from the session
        $token = session('api_token');

        // Check if the token is available
        if (!$token) {
            // Handle the case where the token is not available, e.g., return an error or generate a new one
            return redirect()->back()->withErrors('No API token found. Please log in again.');
        }

        // Return the view and pass the token
        return view('apitoken', ['token' => $token]);
    }
}
