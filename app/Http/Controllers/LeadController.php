<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        Lead::create($validated);
        return back()->with('success', 'Your service request has been submitted successfully! We will contact you soon.');
    }

    public function index() {
        $leads = Lead::latest()->get();
        return view('dashboard', compact('leads'));
    }

    public function update(Request $request, Lead $lead) {
        $validated = $request->validate([
            'status' => 'required|in:pending,assigned,completed',
            'vendor_name' => 'nullable|string|max:255',
        ]);
        $lead->update($validated);
        return back()->with('success', 'Lead updated successfully!');
    }
}
