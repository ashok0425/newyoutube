
  <!-- Footer -->
  <footer class="custom-bg-primary custom-text-lightgray footer">
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-5 ">

                    <div class="footer-content">
                        <div class="footer-title">
                            <div class="img-wrap">
                                <a href="{{route('/')}}">
                                    <img src="{{asset('frontend/logoMain.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <p class="footer-contactifo custom-fs-16">
                            <a href="#"><i class="fas fa-home"></i></a>
                            Biratnagar,Nepal
                         <br>
                         <a href="#"><i class="fas fa-envelope"></i> </a>
                          bf@gmail.com
                        </p>
                        <ul class="footer-social d-flex">
                            <li>
                                <a href="{https://www.facebook.com/Bfm91.2?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 d-none d-md-block">
                    
                            
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bottom-footer custom-bg-dark-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="#">
                        @if (session()->has('language') && session()->get('language')==1)

                        About us

                        @else
                        हाम्रोबारे
                    @endif

                    </a> <a href="#">


                        @if (session()->has('language') && session()->get('language')==1)

                        Term & Conditions

                        @else
                        प्रयोगका शर्त
                    @endif
                    </a>
                    {{-- <a
                        href="/advertise-with-us/">विज्ञापन</a> <a href="/privacy-policy/">Privacy Policy</a> <a
                        href="/contact-us/">सम्पर्क</a> --}}
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <p>© {{date('Y')}} <a href="https://savyatamedia.com/">Bfm</a>
                        @if (session()->has('language') && session()->get('language')==1)

                        All right Reserved.

                        @else
                        सर्वाधिकार सुरक्षित
                    @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
