    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    @foreach ($footer as $branch)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-sx-12">
                            <div class="footer-heading">
                                <h5 class="" style="font-weight:bold">{{ $branch->branch_name }}</h5>
                                <address>
                                    {{ $branch->address }}
                                </address>
                            </div>
                        </div>
                     @endforeach
                </div>
            </div>
            <div class="footer-buttom-main">
                <div class="container">
                    <div class="row footer-bottom">
                        <div class="col-lg-6">
                            <p>
                                &copy; <script type="text/javascript">
                                    document.write(new Date().getFullYear());
                                </script> All right reserved Innovation HUB
                            </p>
                        </div>
                        <div class="col-lg-6 text-right">
                            <ul class="footer-social-icon" style="margin-right:40px">
                                <li><a href="" data-toggle="codetooltip" title="Facebook" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" data-toggle="codetooltip" title="Twitter" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="" data-toggle="codetooltip" title="Linkedin" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>