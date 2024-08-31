<?php

namespace ResierPackage\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ResierPackage\Models\ResierModel;
use Inertia\Inertia;

class ResierController extends Controller
{
    public function index()
    {
        return Inertia::render('Resier/Index');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form data (e.g., save to database, send email, etc.)
        // ...

        return back()->with('success', 'Your message has been sent!');
    }
}