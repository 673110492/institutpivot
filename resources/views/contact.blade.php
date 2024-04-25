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
                <form ethod="POST" action="{{ route('message.store') }}" accept-charset="UTF-8"
                            class="form-horizontal" enctype="multipart/form-data"m>
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
              nouscontacte
            </div>
            <div class="col-md-4  ml-5" style="background-color: rgb(222, 222, 226)">
                <h4 class="mb-4 block-9">Information de contact</h4>
                <div class="form-group" style="margin-bottom: 61px">
                    <div class="d-flex align-self-stretch ftco-animate">
                        <div class="text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-map-marker" style="font-size: 3.5em; color:rgb(4, 76, 92);"></span><span style="width:295px;background-color:white;padding : 10px ;margint-top : 10px;color:rgb(0, 162, 255);font-size:1.2em;margin-left :10px;text-decoration:bold">{{isset($contact) ? $contact->adresse : "Dschang, Marché Foto"}}</span></div>
                        <div class="media-body px-3"></div>
                        </div>
                        </div>
                </div>
                <div class="form-group" style="margin-bottom: 61px">
                    <div class="d-flex align-self-stretch ftco-animate">
                        <div class="text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone" style="font-size: 3.5em; color:rgb(4, 76, 92);"></span><span style="width:290px;background-color:white;padding : 10px ;margint-top : 10px;color:rgb(0, 162, 255);font-size:1.2em;margin-left :5px;text-decoration:bold"><a href="tel:+{{isset($contact) ? $contact->tel : "+237 651541340"}}">{{isset($contact) ? $contact->tel : "651541340 / 651541340"}}</a></span></div>
                        <div class="media-body px-3"></div>
                        </div>
                        </div>
                </div>
                <div class="form-group" style="margin-bottom: 61px">
                    <div class="d-flex align-self-stretch ftco-animate">
                        <div class="text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-envelope" style="font-size: 3em; color:rgb(4, 76, 92);"></span><span style="width:287px;background-color:white;padding : 10px ;margint-top : 10px;color:rgb(0, 162, 255);font-size:1.2em;margin-left :5px;text-decoration:bold"><a href="mailto:{{isset($contact) ? $contact->email : "institut3ia@gmail.com"}}">{{isset($contact) ? $contact->email : "institut3ia@gmail.com"}}</a></span></div>
                        <div class="media-body px-3"></div>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <div class="d-flex align-self-stretch ftco-animate">
                        <div class="text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-quote-left" style="font-size: 3.5em; color:rgb(4, 76, 92);"></span><span style="width:286px;background-color:white;padding : 10px ;margint-top : 10px;color:rgb(0, 162, 255);font-size:1.2em;margin-left :5px;text-decoration:bold ;"><a href="http://{{isset($contact) ? $contact->site : "institut3ia.com"}}">{{isset($contact) ? $contact->site : "institut3ia.com"}}</a></span></div>
                        </div>
                        </div>
                </div>

            </div>
            </div>
            </div>
            </section>

@endsection

