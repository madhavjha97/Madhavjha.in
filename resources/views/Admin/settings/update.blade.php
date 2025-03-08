@extends('Admin.layouts.admin')

@section('title', 'Update Basic Settings')
@section('heading', 'Update Basic Settings')

@section('content')

    <!-- Settings Form -->
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control"
                   value="{{ old('title', $settings->title ?? '') }}" required>
        </div>

        <!-- Mobile -->
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control"
                   value="{{ old('mobile', $settings->mobile ?? '') }}">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                   value="{{ old('email', $settings->email ?? '') }}">
        </div>

        <!-- Social Link -->
        <div class="form-group">
            <label for="social_link">Social Link</label>
            <input type="text" name="social_link" id="social_link" class="form-control"
                   value="{{ old('social_link', $settings->social_link ?? '') }}">
        </div>

        <!-- About Me -->
        <div class="form-group">
            <label for="about_me">About Me</label>
            <textarea name="about_me" id="about_me" class="form-control" rows="4">
                {{ old('about_me', $settings->about_me ?? '') }}
            </textarea>
        </div>

        <!-- Logo -->
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo" class="form-control-file">
            @if (!empty($settings->logo))
                <br><img src="{{ asset('storage/' . $settings->logo) }}" width="100">
            @endif
        </div>

        <!-- Total Experience -->
        <div class="form-group">
            <label for="total_exp">Total Experience (Years)</label>
            <input type="number" name="total_exp" id="total_exp" class="form-control"
                   value="{{ old('total_exp', $settings->total_exp ?? '') }}">
        </div>

        <!-- Current Company -->
        <div class="form-group">
            <label for="current_company">Current Company</label>
            <input type="text" name="current_company" id="current_company" class="form-control"
                   value="{{ old('current_company', $settings->current_company ?? '') }}">
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </div>
    </form>
@endsection
