<?php

namespace ResierPackage\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use ResierPackage\Models\ResierImage;
use Inertia\Inertia;


class ResierController extends Controller
{
    public function index()
    {
        return Inertia::render('Resier/Index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            
            // Store the file in the public disk
            $path = Storage::disk('public')->putFileAs('resier_images', $image, $filename);

            // Save image information to the database
            ResierImage::create([
                'filename' => $filename,
                'path' => $path,
            ]);

            return back()->with('success', 'Image uploaded successfully!');
        }

        return back()->with('error', 'Failed to upload image.');
    }
}