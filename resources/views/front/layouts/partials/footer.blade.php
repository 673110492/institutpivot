<!-- footer part here -->
<!-- footer part here -->
<footer class="footer_section bg-dark py-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="single_feature_footer">
                    <a href="index.html"><img src="{{asset('img/logo_pivo.jpg')}}" height="70" width="100" alt="#"></a>
                    <p class="text-white mt-2">Une vision moderne de la formation!</p>
                    <div class="footer_contact_info mt-3">
                        <a href="tel:+{{ isset(footer()->tel) ? footer()->tel : '+237 651673144'}}" class="text-white d-block mb-2"><i class="icon_phone mr-2"></i>{{ isset(footer()->tel) ? footer()->tel : "+237 651673144"}}</a>
                        <a href="mailto:{{ isset(footer()->email) ? footer()->email : 'donfack@gmail.com'}}" class="text-white d-block"><i class="icon_mail_alt mr-2"></i>{{ isset(footer()->email) ? footer()->email : "LE PIVOT@gmail.com"}}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="single_feature_footer footer_nav">
                    <h4 class="text-white">Catégories</h4>
                    <ul class="list-unstyled">
                        @foreach(type()->take(6) as $item)
                        <li><a href="{{route('cours.cat')}}" class="text-white">{{$item->nom}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="single_feature_footer footer_nav">
                    <h4 class="text-white">Cours Populaires</h4>
                    <ul class="list-unstyled">
                        @foreach(formation()->take(6) as $item)
                        <li><a href="{{route('cours.show',$item->id)}}" class="text-white">{{$item->nom}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
                <div class="single_feature_footer footer_nav">
                    <h4 class="text-white">Liens rapides</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{route('accueil.index')}}" class="text-white">Accueil</a></li>
                        <li><a href="{{route('propos.index')}}" class="text-white">À propos</a></li>
                        <li><a href="{{route('cours.index')}}" class="text-white">Formations</a></li>
                        <li><a href="{{route('contacter.index')}}" class="text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Section de copyright et réseaux sociaux -->
        <div class="row align-items-center mt-4">
            <div class="col-lg-6 col-sm-12">
                <p class="text-white">© Copyright 2023 fait par <a href="mailto:donfack@gmail.com" class="text-white font-weight-bold">LE PIVOT</a> Tous droits réservés.</p>
            </div>
            <div class="col-lg-6 col-sm-12 text-lg-right">
                <div class="social_icons">
                    <a href="https://www.facebook.com" class="text-white mr-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com" class="text-white mr-3" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" class="text-white mr-3" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com" class="text-white mr-3" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com" class="text-white" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <img src="{{asset('img/icon/shape_01.png')}}" alt="#" class="footer_sharp_1">
    <img src="{{asset('img/icon/about_shape_02.png')}}" alt="#" class="footer_sharp_2 custom-animation2">
    <img src="{{asset('img/icon/about_shape_03.png')}}" alt="#" class="footer_sharp_3 custom-animation3">
</footer>
<!-- footer part end -->

<!-- footer part end -->

<!-- jquery slim -->
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/popper.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}

<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
{{-- <script src="{{asset('assets/js/simplyCountdown.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/jquery.countTo.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/aos.js')}}"></script> --}}





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" integrity="sha384-5P3eu3fXr19n4I7Pp+fSo8bT4tWxhKuF+PA8XKt39nNH+8I6/1aYQq4K4Hapv+z6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-1FdoW/b8p2ptRgfJX0txQ5CqA6Q5J6lZ6b3X9P6d5p9P5aF+eH5I6aQp4b9lP5A6l" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/simplycountdown.js@1.0.0/dist/simplyCountdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countTo/1.2.0/jquery.countTo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/courses.js')}}"></script>
</body>

</html>
