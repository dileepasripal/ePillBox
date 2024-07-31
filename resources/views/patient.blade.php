@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Prescriptions</h2>

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
    {{-- Existing prescriptions table code below--}}
    <table>
        <thead>
            <tr>
                <th>Medication</th>
                <th>Dosage</th>
                <th>Frequency</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($prescriptions as $prescription) 
            <tr>
                <td>{{ $prescription->medication_name }}</td>
                <td>{{ $prescription->dosage }}</td>
                <td>{{ $prescription->frequency }}</td>
                <td>
                    <a href="{{ route('prescriptions.edit', $prescription->id) }}">Edit</a>
                    <form action="{{ route('prescriptions.destroy', $prescription->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete   
                 this prescription?')" style="background: none; border: none; color: red; text-decoration: underline;">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">You have no prescriptions yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection


    


