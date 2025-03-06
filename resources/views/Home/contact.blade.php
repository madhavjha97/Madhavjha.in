@extends('Home.Layout.main')


@section('title', 'Contact Madhav Jha | Web Development Services')
@section('description', 'Get in touch with Madhav Jha for web development projects, consultations, and career guidance')

@section('content')
    <section class="tf-section2 flat-contact">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-info">
                        <h2>Get in Touch</h2>
                        <div class="info-box">
                            <i class="fa fa-envelope"></i>
                            <h4>Email</h4>
                            <p>contact@madhavjha.in</p>
                        </div>
                        <div class="info-box">
                            <i class="fa fa-map-marker"></i>
                            <h4>Location</h4>
                            <p>Patna, Bihar, India</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <form method="POST"  class="contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn-action btn-style">
                            <span>Send Message</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
