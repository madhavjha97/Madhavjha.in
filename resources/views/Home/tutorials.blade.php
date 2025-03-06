@extends('Home.Layout.main')

@section('title', 'Tutorial Page')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}"> <!-- Add code highlighting -->
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-9">
            <article class="tutorial-content">
                <h1>@yield('tutorial-title')</h1>
                <div class="example-box">
                    <h3>Example</h3>
                    <pre><code class="language-html">
                        <!-- Your code example here -->
                    </code></pre>
                    <div class="demo-output">
                        <!-- Live demo output -->
                    </div>
                </div>
            </article>
        </div>

        <!-- Right Sidebar -->
        <div class="col-md-3">
            <div class="sidebar-sticky">
                <div class="toc">
                    <h4>Table of Contents</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Section 1</a>
                            <ul class="sub-menu">
                                <li><a href="#subsection1-1">Subsection 1.1</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="try-it">
                    <button class="btn btn-primary">Try it Yourself »</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/prism.js') }}"></script>
@endpush
