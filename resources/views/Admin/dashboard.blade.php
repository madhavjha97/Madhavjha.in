@extends('Admin.layouts.admin')

@section('title', 'Admin DashBoard')
@section('heading', 'Dashboard')
@section('content')

    <!-- Button -->
{{--    <button class="btn btn-custom mb-4">Add New User</button>--}}

    <!-- Interactive Cards -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text">{{ \App\Models\User::count() }}</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Active Projects</h5>
                    <p class="card-text">45</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pending Tasks</h5>
                    <p class="card-text">12</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
@endsection
