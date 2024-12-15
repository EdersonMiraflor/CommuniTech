<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function displays()
    {
        // Fetch all announcements
        $announcements = Announcement::latest()->get();

        // Return view with announcements
        return view('home', compact('announcements'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'announcement_title' => 'required|string|max:255',
            'announcement_text' => 'required|string',
        ]);

        // Create a new announcement
        Announcement::create([
            'User_Id' => auth()->id(), // Assuming user is logged in
            'announcement_title' => $request->announcement_title,
            'announcement_text' => $request->announcement_text,
        ]);

        // Redirect back with success message
        return redirect()->route('announcement.displays')->with('success', 'Announcement added successfully!');
    }
}
