@extends('Home.Layout.main')

@section('title', 'About - Freelance Developer')

@section('content')
    <section class="about-section">
        <div class="container">
            <div class="developer-profile">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/profile.jpg') }}"
                             class="profile-image"
                             alt="Developer Name">
                    </div>
                    <div class="col-md-8">
                        <h1 class="display-4">John Doe</h1>
                        <p class="lead">Full Stack Developer</p>
                        <div class="social-links">
                            <a href="#" class="btn btn-outline-dark">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-section mt-5">
                <h2>Technical Skills</h2>
                <div class="row">
                    @foreach(['Laravel', 'Vue.js', 'React', 'AWS'] as $skill)
                        <div class="col-md-3 skill-item">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fab fa-{{ strtolower($skill) }}"></i>
                                    {{ $skill }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="experience-section mt-5">
                <h2>Experience</h2>
                <div class="timeline">
{{--                    @foreach($experiences as $exp)--}}
{{--                        <div class="timeline-item">--}}
{{--                            <h5>{{ $exp['title'] }}</h5>--}}
{{--                            <p class="text-muted">{{ $exp['company'] }} • {{ $exp['duration'] }}</p>--}}
{{--                            <p>{{ $exp['description'] }}</p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>
            </div>
        </div>
    </section>
@endsection
