@extends('layouts.app')
@section('content')
<h2>Delete Prescription</h2>

<p>Are you sure you want to delete this prescription?</p>

<form action="{{ route('prescriptions.destroy', $prescription) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Yes, Delete</button>
</form>

<a href="{{ route('prescriptions.index') }}" class="btn btn-secondary">Cancel</a>
@endsection
