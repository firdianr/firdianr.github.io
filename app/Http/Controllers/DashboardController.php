<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if the user needs to change their password
        if (Auth::user()->updated_at == Auth::user()->created_at) {
            // Redirect to the password change page
            return redirect('/changepassword');
        } else {
            // Render the dashboard view
            return view('dashboard.index', ['title' => 'Dashboard']);
        }
    }
}
