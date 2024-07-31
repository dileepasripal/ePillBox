<?php

namespace App\Http\Controllers;

use App\Models\Prescription; 
use Illuminate\Http\Request;
use App\Http\Middleware\Patient;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    public function store(Request $request)
    {
        // ... your validation ...

        $validatedData = $request->validate([
            'medication_name' => 'required|string',
            'dosage' => 'required|string',
            'frequency' => 'required|string',
            // ...other validation rules...
        ]);

        if (Auth::check()) {
            $validatedData['patient_id'] = Auth::id(); // Add this line
        } else {
            // Handle case where the user is not authenticated (e.g., redirect to login)
            return redirect()->route('login')->with('error', 'You must be logged in to add a prescription.');
        }

        Prescription::create($validatedData);

        return redirect()->route('patient')->with('success', 'Prescription added successfully.');
    }


    public function edit(Prescription $prescription) //Laravel will inject the correct prescription for you, based on ID
    {
        return view('prescriptions.edit', compact('prescription')); // Pass the $prescription to your edit view
    }

    public function destroy(Prescription $prescription)
    {
        // Check if the prescription belongs to the authenticated patient (optional, but recommended for security)
        if ($prescription->patient_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $prescription->delete(); // Delete the prescription

        return redirect()->route('patient')->with('success', 'Prescription deleted successfully.');
    }

}
