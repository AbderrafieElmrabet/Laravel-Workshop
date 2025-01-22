<?php

namespace App\Http\Controllers;

use App\Models\Visitors; // Ensure you're importing the Visitors model
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function display()
    {
        // Retrieve all visitors from the database
        $visitors = Visitors::active()->get();
        // Pass the visitors to the view using compact
        return view('display', compact('visitors'));
    }
}