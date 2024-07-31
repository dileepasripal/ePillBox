@extends('layouts.app')
@section('content')
<h2>Add New Prescription</h2>

<form action="{{ route('prescriptions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    </form>
@endsection
