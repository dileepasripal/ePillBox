@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @auth
                        @if(Auth::user()->role == 1)
                            <script>window.location.href = "{{ route('admin') }}";</script>
                            {{-- Admin specific content --}}
                        @elseif(Auth::user()->role == 2)
                            <script>window.location.href = "{{ route('patient') }}";</script>
                            {{-- Patient specific content --}}
                        @elseif(Auth::user()->role == 3)
                            <script>window.location.href = "{{ route('doctor') }}";</script>
                            {{-- Doctor specific content --}}
                        @elseif(Auth::user()->role == 4)
                            <script>window.location.href = "{{ route('pharmacist') }}";</script>
                            {{-- Pharmacist specific content --}} 
                        @endif
                    @else
                        {{-- Content for guest users --}}
                        {{ __('Please login to access the dashboard.') }} 
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

