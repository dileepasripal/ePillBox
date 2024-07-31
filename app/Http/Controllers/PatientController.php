<?php

// app/Http/Controllers/PatientController.php

namespace App\Http\Controllers;

use App\Models\Prescription; // Assuming you have a Prescription model
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Patient;

class PatientController extends Controller
{
    public function showPrescriptions()
    {
        $patient = Auth::user();
        // $prescriptions = Prescription::where('patient_id', $patient->id)->get(); 

        // Better way using Eloquent Relationship
        $prescriptions = $patient->prescriptions; // Assuming you have the relationship defined 

        return view('patient', compact('prescriptions'));
    }

}
