@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<div class="container">
    <div id="inicio" class="servicios">
        <h2>Servicios</h2>
            <div class="carrusel">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      @foreach($inicio as $item)
                      <div class="carousel-item {{$item->class}}">
                        <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" alt="{{$item->title}}">
                        <div id="contenidoCarrusel" class="carousel-caption d-none d-md-block">
                            <h5>{{$item->title}}</h5>
                            <p>{{$item->description}}</p>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
        <div class="servicios1">
          <h3>Nuestros Servicios</h3>
            <div>
            @foreach($servicios as $item)
            <div class="servicio">
              <div>
                <i class="fa-solid fa-building-user"></i>
              </div>
              <div>
                <img src="{{asset('imagen/'.$item->image)}}" alt="Img">
              </div>
              <h3>{{$item->title}}</h3>
              <p>{{$item->description}}</p>
            </div>
            @endforeach
          </div>
        </div>
        <div id="sobre" class="m-v">
            <div class="mision">
                <h3>Misión:</h3>
                <p>{{$Mision->name}}</p>
                <div>
                    <img src="{{asset('imagen/'.$Mision->image)}}" alt="Misión">
                </div>
            </div>
            <div class="vision">
                <div>
                    <img src="{{asset('imagen/'.$Vision->image)}}" alt="Visión">
                </div>
                <h3>Visión:</h3>
                <p>{{$Vision->name}}</p>
            </div>
        </div>
  </div>
@endsection