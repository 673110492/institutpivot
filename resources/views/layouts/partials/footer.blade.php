<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url({{asset('images/IMG_5430.jpg')}}); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
    <div class="row mb-5">
    <div class="col-md-3">
    <div class="ftco-footer-widget mb-4">
    <h2><img class="navbar-brand" src="{{asset('images/3ia logo-01.png')}}" alt="" height="100px" width="240px">
    </h2>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
    </div>
    </div>
    <div class="col-md-4">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Recent Blog</h2>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url({{asset('images/image_1.jpg')}});"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url({{asset('images/image_2.jpg')}});"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-2">
    <div class="ftco-footer-widget mb-4 ml-md-4">
    <h2 class="ftco-heading-2">Liens du site</h2>
    <ul class="list-unstyled">
    <li><a href="{{route('accueil.index')}}" class="py-2 d-block">Accueil</a></li>
    <li><a href="{{route('propos.index')}}" class="py-2 d-block">A propos</a></li>
    <li><a href="{{route('cours.index')}}" class="py-2 d-block">Formation</a></li>
    <li><a href="#" class="py-2 d-block">Blog</a></li>
    <li><a href="{{route('contacter.index')}}" class="py-2 d-block">Contact</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md-3">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Vous avez une question?</h2>
    <div class="block-23 mb-3">
        {{-- @dd(footer()->adresse) --}}
    <ul>
    <li><span class="icon icon-map-marker"></span><span class="text">{{ isset(footer()->adresse) ? footer()->adresse : "Dschang, Foto"}}</span></li>
    <li><a href="tel:+{{ isset(footer()->tel) ? footer()->tel : "+237 651541340"}}"><span class="icon icon-phone"></span><span class="text">{{ isset(footer()->tel) ? footer()->tel : "+237 651541340"}}</span></a></li>
    <li><a href="mailto:{{ isset(footer()->email) ? footer()->email : "lucrecenanfack@gmail.com"}}"><span class="icon icon-envelope"></span><span class="text">{{ isset(footer()->email) ? footer()->email : "lucrecenanfack@gmail.com"}}</span></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
    <p>
    Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Tous les droits reservés | Ce site esT fait avec <i class="icon-heart" aria-hidden="true"></i> par <a href="3">la structure 3iA</a>
    </p>
    </div>
    </div>
    </div>
    </footer>
