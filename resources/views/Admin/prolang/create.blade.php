@extends('Admin.layouts.admin')

@section('title', 'Add Programing Language')
@section('heading', 'Add Programing Language')

@section('content')

    <!-- Settings Form -->
    <form action="{{ route('pro-langs.store') }}" method="POST" >
        @csrf
        <!-- Title -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"
                   required>
        </div>

        <!-- Mobile -->
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                  >
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
