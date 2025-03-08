@extends('Admin.layouts.admin')

@section('title', 'Update Basic Settings')
@section('heading', 'Update Basic Settings')

@section('content')

    <!-- Settings Form -->
    <form action="{{ route('pro-langs.update', $proLang->id) }}" method="POST">

    @method('PUT')
        @csrf
        <!-- Title -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"
                   value="{{ old('name', $proLang->name ?? '') }}" required>
        </div>

        <!-- Mobile -->
        <div class="form-group">
            <label for="description">Description	</label>
            <input type="text" name="description" id="description" class="form-control"
                   value="{{ old('description', $proLang->description ?? '') }}">
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
