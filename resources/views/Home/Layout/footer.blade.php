<footer id="footer" class="clearfix home">
    <div class="themes-container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="widget widget-logo">
                    <div class="flat-box">
                        <div class="logo-footer style2" id="logo-footer">
                            <a href="index.html">
                                <h3><a href="https://roadmap.sh/javascript">{{ $basicsetting->title }}</a> </h3>
                            </a>
                        </div>
                        <p class="sub-widget-logo text-color-4">Passionate Full Stack Developer & Mentor, transforming ideas into scalable digital solutions. Crafting code, sharing knowledge, and building the future—one line at a time.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="widget widget-menu style-2 home">
                    <h4 class="title-widget text-color-2">Connect</h4>
                    <!-- Location -->
                    <p class="text-color-4"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra, India</p>
 g

                    <!-- Email -->
                    <p>
                        <i class="fas fa-envelope"></i>
                        <a class="email" href="mailto:{{ $basicsetting->email }}">{{ $basicsetting->email }}</a>
                    </p>

                    <!-- Phone (Uncomment and Add Number If Needed) -->
                    {{-- <p>
                        <i class="fas fa-phone"></i>
                        <a class="phone" href="tel:+911234567890">+91 12345 67890</a>
                    </p> --}}

                    <!-- Social Media Links -->
                    <p>
                        <a href="https://www.linkedin.com/in/yourprofile" target="_blank">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                    </p>
                    <p>
                        <a href="https://github.com/yourgithub" target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </p>

                    <p>
                        <a href="https://www.instagram.com/yourprofile" target="_blank">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </p>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="widget widget-menu style-3">
                    <h4 class="title-widget text-color-2 "> Connect me on WhatsApp</h4>
                    <p class="text-color-4">"If you have any suggestions, queries, or need guidance—whether it's about a project, career, or anything else—feel free to drop me a message on WhatsApp. Let's connect and collaborate!                   </p>
                    <div class="widget-subscribe home">
                        <a href="https://wa.me/yourwhatsappphonenumber" target="_blank" class="whatsapp-btn">
                            <i class="fab fa-whatsapp whatsapp-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /#footer -->

<style>
    .whatsapp-btn {
        display: inline-block;
        font-size: 50px;
        color: #25D366;
        transition: transform 0.3s ease-in-out;
    }

    .whatsapp-btn:hover {
        transform: scale(1.1);
        color: #128C7E;
    }

</style>
