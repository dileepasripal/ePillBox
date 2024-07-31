<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\Patient;

class Prescription extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'prescriptions'; // Replace with your actual table name

    // Define the fillable fields (optional)
    protected $fillable = [
        'patient_id', 'medication_name', 'dosage', 'frequency', // Add other relevant fields
    ];

    // Define relationships with other models (optional)
    public function patient()
    {
        return $this->belongsTo(Patient::class); 
    }

    // Add any other model methods or attributes as needed
}
