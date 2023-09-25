@extends('layouts.apps')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}}); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center">
    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('accueil.index')}}">Accueil</a></span> <span class="mr-2"><a href="blog.html">Formation</a></span> <span>Detail formation</span></p>
    <h1 class="mb-3 bread">Detail Formation</h1>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-section ftco-degree-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-8 ftco-animate">
    <h1 class="mb-3">{{$formation->nom}}</h1><p>
    <img src="{{ url('storage/' . $formation->photo) }}" alt class="img-fluid">
    </p>
    <p>
        {!!$formation->description !!}
    </p>
    </div>
    <div class="col-md-4 sidebar ftco-animate">
    <div class="sidebar-box">
    <form action="#" class="search-form">
    <div class="form-group">
    <span class="icon fa fa-search"></span>
    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
    </div>
    </form>
    </div>
    <div class="sidebar-box ftco-animate">
    <div class="categories">
    <h3>Categories</h3>
    <li><a href="#">Departments <span>(12)</span></a></li>
    <li><a href="#">Doctors <span>(22)</span></a></li>
    <li><a href="#">Medicine <span>(37)</span></a></li>
    <li><a href="#">Hospital <span>(42)</span></a></li>
    <li><a href="#">Cure <span>(14)</span></a></li>
    <li><a href="#">Health <span>(140)</span></a></li>
    </div>
    </div>
    <div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url({{asset('images/image_1.jpg')}});"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
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
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url({{asset('images/image_3.jpg')}});"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    </div>
    <div class="sidebar-box ftco-animate">
    <h3>Tag Cloud</h3>
    <div class="tagcloud">
    <a href="#" class="tag-cloud-link">medical</a>
    <a href="#" class="tag-cloud-link">cure</a>
    <a href="#" class="tag-cloud-link">remedy</a>
    <a href="#" class="tag-cloud-link">health</a>
    <a href="#" class="tag-cloud-link">workout</a>
    <a href="#" class="tag-cloud-link">medicine</a>
    <a href="#" class="tag-cloud-link">doctor</a>
    <a href="#" class="tag-cloud-link">medic</a>
    </div>
    </div>
    <div class="sidebar-box ftco-animate">
    <h3>Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection
