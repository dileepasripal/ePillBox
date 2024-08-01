@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>Doctor Dashboard: Prescriptions</h2>
            <br>
            <br>
            {{-- Add Prescription Form --}}
            <section class="add-prescription">
                <h3>Add New Prescription</h3>
                <form action="{{ route('prescriptions.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{ Auth::user()->id }}">
                    
                    <div>
                        <label for="medication_name">Medication Name:</label>
                        <input type="text" id="medication_name" name="medication_name" required>
                    </div>
                    <div>
                        <label for="dosage">Dosage:</label>
                        <input type="text" id="dosage" name="dosage" required>
                    </div>
                    <div>
                        <label for="frequency">Frequency:</label>
                        <input type="text" id="frequency" name="frequency" required>
                    </div>
                    {{-- Add more input fields for start/end dates, instructions, doctor's name, and prescription image as needed --}}
                    <button type="submit">Add Prescription</button>
                </form>
            </section>
        {{-- Add your doctor-specific content here --}}
    </div>
@endsection