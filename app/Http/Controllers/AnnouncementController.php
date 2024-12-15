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

    public function destroy($id)
    {
        // Find the announcement by its primary key (Memo_id)
        $announcement = Announcement::where('Memo_id', $id)->firstOrFail();
    
        // Delete the announcement
        $announcement->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Announcement deleted successfully!');
    }

    public function update(Request $request)
    {
        // Validate the input
        $request->validate([
            'announcement_title' => 'required|string|max:255',
            'announcement_text' => 'required|string',
        ]);
    
        // Find the announcement to update
        $announcement = Announcement::findOrFail($request->announcement_title);
    
        // Update the announcement
        $announcement->announcement_text = $request->announcement_text;
        $announcement->save();
    
        // Redirect back with a success message
        return redirect()->route('announcement.displays')->with('success', 'Announcement updated successfully!');
    }
    
}
