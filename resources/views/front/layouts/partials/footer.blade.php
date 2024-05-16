<!-- footer part here -->
<footer class="footer_section bg-dark">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_footer">
                    <a href="index.html"><img src="{{asset('img/3ia logo-01.png')}}" height="70" width="200" alt="#"></a>
                    <p  style="color : white">Une vision moderne de la formation!</p>
                    <div class="footer_contact_info" >
                    <a href="tel:+{{ isset(footer()->tel) ? footer()->tel : '+237 659218936'}}"><i class="icon_phone"></i>{{ isset(footer()->tel) ? footer()->tel : "+237 659218936"}}</a>
                    <a href="mailto:{{ isset(footer()->email) ? footer()->email : 'lucrecenanfack@gmail.com'}}"><i class="icon_mail_alt"></i>{{ isset(footer()->email) ? footer()->email : "3ia@institut3ia.com"}}</a>
    
                        <!-- <a href="tel:+237651541340"  style="color : white"><i class="icon_phone"></i>+237 652 541 340</a>
                        <a href="mailto:3ia@institut3ia.com"  style="color : white"><i class="icon_mail_alt"></i>3ia@institut3ia.com</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_footer footer_nav">
                    <h4  style="color : white">Cours Populaires</h4>
                    <ul >
                        @foreach(formation()->take(6) as $item)
                        <li><a href="course-details.html"  style="color : white">{{$item->nom}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="single_feature_footer footer_nav">
                    <h4  style="color : white">Liens rapide</h4>
                    <ul>
                        <li><a href="{{route('accueil.index')}}" class="text-white">Acceuil</a></li>
                        <li><a href="{{route('propos.index')}}" class="text-white">A propos</a></li>
                        <li><a href="{{route('cours.index')}}" class="text-white">Formation</a></li>
                        <li><a href="{{route('contacter.index')}}" class="text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright_part">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p  style="color : white">© Copyright 2023 fait par <a href="mailto:lucrecenanfack@gmail.com">3iA</a> Tous droits réservés.</p>
                        </div>
                        <div class="col-lg-6">
                             <div class="social_icon">
                                <a href="#" style="font-weight: bold;"><i class="social text-primary"></i>f</a>
                                <a href="#"><i class="social_youtube text-danger"></i></a>
                                <a href="#"><i class="social_linkedin text-primary"></i></a>
                                <a href="mailto:lucrecenanfack@gmail.com">Me</a>
                                <a href="#"><i class="social_skype text-primary"></i></a>
                                <a href="#"><i class="social_instagram"></i></a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('img/icon/shape_01.png')}}" alt="#" class="footer_sharp_1">
    <img src="{{asset('img/icon/about_shape_02.png')}}" alt="#" class="footer_sharp_2 custom-animation2">
    <img src="{{asset('img/icon/about_shape_03.png')}}" alt="#" class="footer_sharp_3 custom-animation3">
</footer>
<!-- footer part end -->

<!-- jquery slim -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- nice select -->
<script src="{{asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel js -->
<script src="{{asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
<!-- magnify popup js -->
<script src="{{asset('vendors/magnify_popup/jquery.magnific-popup.js')}}"></script>
<!-- simplyCountdown js -->
<script src="{{asset('vendors/countdown/js/simplyCountdown.min.js')}}"></script>
<!-- counter js -->
<script src="{{asset('vendors/counter/jquery.countTo.js')}}"></script>
<!-- aos js -->
<script src="{{asset('vendors/aos/aos.js')}}"></script>
<!-- custom js -->
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/courses.js')}}"></script>
</body>

</html>
