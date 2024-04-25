@extends('layouts.apps')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/IMG_5444.jpg')}}); background-attachment:fixed;">
    <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Accueil</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Details Blog</span></p>
        <h1 class="mb-3 bread">Details Blog</h1>
        </div>
        </div>
    </div>
</div>
    <section class="ftco-section ftco-degree-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-8 ftco-animate">
    <h2 class="mb-3">{{$blog->titre}}</h2>
    <p>{!!$blog->message!!}<p>
    <div class="">
    <h3 class="mb-5" style="color:rgba(3, 3, 248, 0.849)">6 Commentaires</h3>
    <ul class="comment-list">
    <li class="comment">
    <div class="vcard bio">
    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>John Doe</h3>
    <div class="meta">June 27, 2018 at 2:21pm</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    </li>
    <li class="comment">
    <div class="vcard bio">
    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>John Doe</h3>
    <div class="meta">June 27, 2018 at 2:21pm</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    <ul class="children">
    <li class="comment">
    <div class="vcard bio">
    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>John Doe</h3>
    <div class="meta">June 27, 2018 at 2:21pm</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    <ul class="children">
    <li class="comment">
    <div class="vcard bio">
    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>John Doe</h3>
    <div class="meta">June 27, 2018 at 2:21pm</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    <ul class="children">
    <li class="comment">
    <div class="vcard bio">
    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>John Doe</h3>
    <div class="meta">June 27, 2018 at 2:21pm</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    </li>
    </ul>
    </li>
    </ul>
    </li>
    </ul>
    </li>
    <li class="comment">
    <div class="vcard bio">
    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>John Doe</h3>
    <div class="meta">June 27, 2018 at 2:21pm</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    </li>
    </ul>

    <div class="comment-form-wrap" >
    <h3 class="mb-5" style="color:rgba(3, 3, 248, 0.849)">Laisser un commentaire</h3>
    <form action="#" class="p-5" style="background-color: rgb(222, 222, 226)">
    <div class="form-group">
    <label for="name">Nom *</label>
    <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
    <label for="email">Email *</label>
    <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
    <label for="message">Message</label>
    <textarea name id="message" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
    </div>
    </form>
    </div>
    </div>
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
    <h3>Recent Blog</h3>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
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
    <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
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
    <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
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
    </div>
    </div>
    </div>
    </section>

@endsection
