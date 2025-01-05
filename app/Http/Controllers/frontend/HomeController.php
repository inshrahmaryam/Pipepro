<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Remove the import for the Menu model since it's not needed

class HomeController extends Controller
{
    /**
     * Display a listing of the plumbing services.
     */
    public function index()
    {
        // Instead of fetching menu items, fetch plumbing services (if applicable)
        // Example: $services = Service::all(); // If you have a Service model

        return view('frontend.index'); // No need to pass 'menus' to the view
    }

    /**
     * Handle the form submission for plumbing service requests.
     */
    public function submitMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required|numeric',
            'service' => 'required',  // You can replace this with an actual plumbing service selection
            'address' => 'required'
        ]);

        // You can handle the plumbing service request and save it in a database model
        $home = new homeModel();
        $home->name = $request->name;
        $home->phonenumber = $request->phonenumber;
        $home->service = $request->service;
        $home->address = $request->address;
        $home->save();

        return redirect()->route('home')->with('success', 'Thanks for contacting us. We\'ll reach out to you soon!');
    }
}
