<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use Illuminate\Support\Facades\DB;

class RiderController extends Controller
{
    // Display a list of riders
    public function index()
    {
        $riders = Rider::all(); // Fetch all riders
        return view('riders.index', compact('riders'));
    }

    // Show the form for creating a new rider
    public function create()
    {
        return view('riders.create');
    }

    // Store a newly created rider in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:riders,email',
            'phone' => 'required|string|min:10|max:15',
            'vehicle' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Rider::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'vehicle' => $request->vehicle,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('riders.index')->with('success', 'Rider created successfully!');
    }

    // Show a single rider's details
    public function show($id)
    {
        $rider = Rider::findOrFail($id);
        return view('riders.show', compact('rider'));
    }

    // Show the form for editing an existing rider
    public function edit($id)
    {
        $rider = Rider::findOrFail($id);
        return view('riders.edit', compact('rider'));
    }

    // Update an existing rider in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:riders,email,' . $id,
            'phone' => 'required|string|min:10|max:15',
            'vehicle' => 'required|string',
        ]);

        Rider::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'vehicle' => $request->vehicle,
        ]);

        return redirect()->route('riders.index')->with('success', 'Rider updated successfully!');
    }

    // Delete a rider from the database
    public function destroy($id)
    {
        Rider::destroy($id);
        return redirect()->route('riders.index')->with('success', 'Rider deleted successfully!');
    }
}
