<nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color: red">
    <div class="container">
    <img class="navbar-brand" src="{{asset('images/3ia logo-01.png')}}" alt="" height="100px" width="240px">
    {{-- <a class="navbar-brand" href="index-2.html"><i class="flaticon-university"></i>Genius <br><small>University</small></a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="{{route('accueil.index')}}" class="nav-link">Accueil</a></li>
    <li class="nav-item"><a href="{{route('propos.index')}}" class="nav-link">A propos</a></li>
    <li class="nav-item"><a href="{{route('cours.index')}}" class="nav-link">Formations</a></li>
    {{-- <li class="nav-item"><a href="teacher.html" class="nav-link">Formateurs</a></li> --}}
    {{-- <li class="nav-item"><a href="event.html" class="nav-link">Evènements</a></li> --}}
    {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
    <li class="nav-item"><a href="{{route('contacter.index')}}" class="nav-link">Contact</a></li>
    <li class="nav-item cta"><a href="{{route('contacter.index')}}" class="nav-link"><span>Appliquer maintenant!</span></a></li>
    </ul>
    </div>
    </div>
    </nav>
