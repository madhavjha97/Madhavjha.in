@extends('Admin.layouts.admin')

@section('title', 'Basic Settings')
@section('heading', 'Settings Display')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">

            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">{{ $settings->title }}</h5>
                </div>
                <div class="card-body">
                    <p><strong>Mobile:</strong> {{ $settings->mobile ?? 'N/A' }}</p>
                    <p><strong>Email:</strong> {{ $settings->email ?? 'N/A' }}</p>
                    <p><strong>Social Link:</strong>
                        @if ($settings->social_link)
                            <a href="{{ $settings->social_link }}" target="_blank">View Link</a>
                        @else
                            N/A
                        @endif
                    </p>
                    <p><strong>About Me:</strong> {{ $settings->about_me ?? 'N/A' }}</p>
                    <p><strong>Total Experience:</strong> {{ $settings->total_exp ?? 'N/A' }}</p>
                    <p><strong>Current Company:</strong> {{ $settings->current_company ?? 'N/A' }}</p>

                    <p><strong>Logo:</strong></p>
                    @if ($settings->logo)
                        <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" class="img-thumbnail" width="100">
                    @else
                        <p>N/A</p>
                    @endif

                    <a href="{{ route('admin.settings.edit', $settings->id) }}" class="btn btn-primary btn-sm mt-2">Edit</a>
                </div>
            </div>

    </div>

@endsection
