<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_type' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create(array_merge($validated, ['status' => 'new']));

        return redirect()->back()->with('success', 'Thank you!  We will contact you soon.');
    }
}