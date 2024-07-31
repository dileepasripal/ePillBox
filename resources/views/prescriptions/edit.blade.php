@extends('layouts.app')
@section('content')
<h2>Edit Prescription</h2>

<form action="{{ route('prescriptions.update', $prescription) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    </form>
@endsection

