@extends('layouts.apps')
@section('content')
@php
if(isset($contact)){
  $style = "background-image:url(name/$contact->photo); background-attachment:fixed;";
}
@endphp
@if(isset($contact))
    <div class="hero-wrap hero-wrap-2" style="{{$style}}">
@else
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/IMG_5430.jpg'); background-attachment:fixed;">
@endif
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center">
    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('accueil.index')}}">Accueil</a></span> <span>Contact</span></p>
    <h1 class="mb-3 bread">Contact</h1>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-section contact-section ftco-degree-bg">
            <div class="container bg-primary card" >
            <div class="row block-9">
            <div class="col-md-7 pr-md-5" style="background-color: rgb(222, 222, 226)">
                <h4 class="mb-4 card-header">Vous avez une question?</h4>
                <form method="POST" action="{{ route('message.store') }}" accept-charset="UTF-8"
                            class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" class="form-control" name="noms" placeholder="Votre nom complet">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Votre adresse email">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="sujet" placeholder="Sujet">
                </div>
                <div class="form-group">
                <textarea cols="30" rows="7" name="message" class="form-control" placeholder="Votre message"></textarea>
                </div>
                <div class="form-group">
                <input type="submit" value="Envoyer le Message" class="btn btn-primary py-3 px-5">
                </div>
                </form>
            </div>
            <div class="col-md-1 ml-5" style="background-color: rgb(255, 255, 255);color:white">
              nouscontacter
            </div>
            <div class="col-md-4  ml-5" style="background-color: rgb(222, 222, 226)">
                <h4 class="mb-4 block-9">Information de contact</h4>
                <div class="block-9" style="background-color: rgb(255, 255, 255); hight:2% ;">
                    hjyukuiiliu
                </div>
                <div class="block-9 bg-white">
                    dfhgkhj
                </div>
                <div class="block-9 bg-white">
                    dfhgkhj
                </div>
                <div class="block-9 bg-white">
                    dfhgkhj
                </div>

            </div>
            </div>
            </div>
            </section>

@endsection

