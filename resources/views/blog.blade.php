@extends('layouts.apps')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/IMG_5430.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center">
    <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Accueil</a></span> <span>Blog</span></p>
    <h1 class="mb-3 bread">Blog</h1>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-section">
    <div class="container">
    <div class="row d-flex">
        @foreach ($blog as $item)
        @php
            $st = "background-image:url(name/$item->photo);";
        @endphp
    <div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch">
    <a href="{{route('actu.show',$item->id)}}" class="block-20" style="{{$st}}">
    </a>
    <div class="text p-4 d-block">
    <div class="meta mb-3">
    <div><a href="{{route('actu.show',$item->id)}}">{!! Str::limit($item->created_at, 10, '')  !!}</a></div>
    <div><a href="{{route('actu.show',$item->id)}}">{{$item->auteur}}</a></div>
    <div><a href="{{route('actu.show',$item->id)}}" class="meta-chat"><span class="icon-chat"></span>0</a></div>
    </div>
    <h3 class="heading mt-3"><a href="{{route('actu.show',$item->id)}}">{{$item->titre}}</a></h3>
    <p>{!! Str::limit($item->message, 120, '...')  !!}</p>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </section>
@endsection
