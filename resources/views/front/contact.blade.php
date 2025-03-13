@extends('front.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Contact</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- Start contact us -->
    <div class="review_form contact_form section_padding">
        <div class="container">
            <h3 data-aos="fade-up" data-aos-duration="1200" class="text-primary">Contacter nous</h3>
<section class="event_list section_padding" style="background-color: #E3E3E3;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2">
                    <div class="single_event_list bg-white" data-aos="fade-up" data-aos-duration="1200">
                        <!-- <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="" class="img-fluid"> -->
                        <div class="event_list_content row">
                        <i class="icon_phone text-primary col-md-4" style="font-size:4em"></i><h5 class="col-md-8" style="margin:auto; font-size: 1.5em;"> <b><a href="tel:+{{isset($contact) ? $contact->tel : '+237 651541340'}}">{{isset($contact) ? $contact->tel : "651541340/651541340"}}</a></b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="single_event_list bg-white" data-aos="fade-up" data-aos-duration="1200">
                        <!-- <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="" class="img-fluid"> -->
                        <div class="event_list_content row">
                        <i class="icon_mail text-primary col-md-4" style="font-size:4em"></i><h5 class="col-md-8" style="margin:auto; font-size: 1.5em;"> <b><a href="mailto:{{isset($contact) ? $contact->email : 'pivot@gmail.com'}}">{{isset($contact) ? $contact->email : "gmail@gmail.com"}}</a></b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="single_event_list bg-white" data-aos="fade-up" data-aos-duration="1200">
                        <!-- <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="" class="img-fluid"> -->
                        <div class="event_list_content row">
                        <i class="icon_map text-primary col-md-4" style="font-size:4em"></i><h5 class="col-md-8" style="margin:auto;font-size: 1.5em;color:black;"> <b>{{isset($contact) ? $contact->adresse : "Dschang, Mobile immeuble CCA"}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="single_event_list bg-white" data-aos="fade-up" data-aos-duration="1200">
                        <!-- <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="" class="img-fluid"> -->
                        <div class="event_list_content row">
                        <i class="icon_globe text-primary col-md-4" style="font-size:4em"></i><h5 class="col-md-8" style="margin:auto;font-size: 1.5em;"> <b><a href="http://{{isset($contact) ? $contact->site : 'institutpivot.com'}}">{{isset($contact) ? $contact->site : "institutpivot.com"}}</a></b></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/icon/shape_06.png" alt="#" class="about_sharp_1 custom-animation">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
        <img src="img/icon/shape_04.png" alt="#" class="about_sharp_4 custom-animation4">
        <img src="img/icon/shape_05.png" alt="#" class="about_sharp_5 custom-animation5">
    </section>
            <h3 data-aos="fade-up" data-aos-duration="1200" class="mt-5 text-primary">Vous avez une question?</h3>
            <form  method="POST" action="{{ route('message.store') }}" accept-charset="UTF-8" class="form-horizontal container" enctype="multipart/form-data" data-aos="fade-up" style="background-color : #E3E3E3; padding-top:3%; padding-bottom:3%;" data-aos-duration="1600" method="post">
                            {{ csrf_field() }}
                            <div class="" >
                    <div class="">
                        <div class="form_single_item">
                            <input type="text" class="bg-white" name="noms" placeholder="Nom complet" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form_single_item">
                            <input type="email" class="bg-white" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form_single_item">
                            <input type="text" class="bg-white" name="sujet" placeholder="Sujet" required>
                        </div>
                    </div>
                    <div>
                        <div class="form_single_item">
                            <textarea name="message" class="bg-white" placeholder="Message" required></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn_3" value="Envoyer">
            </form>
        </div>
    </div>
    <img src="img/icon/shape_06.png" alt="#" class="about_sharp_1 custom-animation">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
        <img src="img/icon/shape_04.png" alt="#" class="about_sharp_4 custom-animation4">
        <img src="img/icon/shape_05.png" alt="#" class="about_sharp_5 custom-animation5">
@endsection
