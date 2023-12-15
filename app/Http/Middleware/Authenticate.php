<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            // Check if the user is authenticated and has the 'admin' role
            if ($request->user() && $request->user()->hasRole('admin')) {
                // Redirect admin to the admin URL
                return route('admin.dashboard'); // Change 'admin.dashboard' to your actual admin route
            } else {
                // Redirect non-admin users to the login page
                return route('login');
            }
        }

        return null;
    }
}