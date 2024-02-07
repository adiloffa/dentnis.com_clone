@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Dashboard</h1>
            <div class="dashboard-content">
                @if(auth()->check())
                    <p>Welcome, <span>{{ auth()->user()->name }}!</span></p>
                    <span>Dentnis.com</span>
                @else
                    <p>Please log in to view this page.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
