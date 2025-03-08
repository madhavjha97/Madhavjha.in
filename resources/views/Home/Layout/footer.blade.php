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
                        <p class="sub-widget-logo text-color-4">Over the years I have helped over 5k developers to learn the Web Development and its surrounding ecosystem of technologies. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="widget widget-menu style-2 home">
                    <h4 class="title-widget text-color-2">Contact</h4>
                    <p class="text-color-4">Mumbai, Maharashtra, India</p>
                    <p><a class="email " href="{{ $basicsetting->email }}">{{ $basicsetting->email }} </a>  </p>
                    <!-- <p><a class="phone " href="tel:0123456789">+99 (0) 101 0000 888 </a>  </p>                 -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="widget widget-menu style-3">
                    <h4 class="title-widget text-color-2 "> Accelerate your career.</h4>
                    <p class="text-color-4">Get the {{ now()->year }} Full Stack Web Developer Roadmap                            </p>
                    <div class="widget-subcribe home">
                        <div class="form-subcribe">
                            <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                                <input name="text" value="" class="text" type="text" placeholder="Email Id" required="">
                                <button id="submit" name="submit" type="submit" class="btn-1 btn-8">
                                    <span><i class="fal fa-long-arrow-right"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /#footer -->
