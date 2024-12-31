<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('imagen/'.$empresa->logo)}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('seo')
  </head>
<body>
    <header id="volver">
        <nav>
        <div class="icono">
            <img src="{{asset('imagen/'.$empresa->logo)}}" alt="Icono">
        </div>
        <button id="BtnAbrir"><i class="fa-solid fa-caret-down"></i></button>
        <ul class="inicio">
          <button class="BtnCerrar"><i class="fa-solid fa-xmark"></i></button>
          <li> <a href="#inicio"><i class="fa-solid fa-house"></i> Inicio</a></li>
          <li><a href="#contacto"><i class="fa-solid fa-phone-volume"></i> Contactos</a></li>
          <li><a href="#sobre"><i class="fa-solid fa-users"></i> Sobre nosotros</a></li>
          <li><a href="#direccion"><i class="fa-solid fa-route"></i> Dirección</a></li>
        </ul>
        </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
        <div class="info-footer">
            <div class="redes">
                <h4>Siguenos en nuestras redes sociales:</h4>
                <ul>
                  @foreach($redes as $item)
                    <li><a target="_blank" href="{{$item->link}}"><i class="{{$item->icon}}"></i> {{$item->title}}</a></li>
                  @endforeach
                </ul>
                <div>
                  <a href="#volver"><button class="volver"><i class="fa-solid fa-caret-up"></i></button></a>
                </div>
            </div>
            <div id="contacto" class="contacto">
              <div class="contacto">
                <h4>Contactanos:</h4>
                <div>    
                <p><i class="fa-brands fa-whatsapp"></i><a target="_blank" href="#"> {{$empresa->numero}}<a></p>
                </div>
              </div>
              <div class="correo">
                <h4>Correo:</h4>
                <div>
                  <p><i class="fa-solid fa-envelope"></i><a target="_blank" href="#"> {{$empresa->correo}}<a></p>
                </div>
              </div>
              <div class="direccion">
                <h4>Dirección:</h4>
                <div>
                  <p><i class="fa-solid fa-location-dot"></i> {{$empresa->direccion}}</p>
                </div>
              </div>
              </div>
            <div id="direccion" class="geo">
                <h4><i class="fa-solid fa-map-location-dot"></i> Geolocalización:</h4>
                <div>
                    <iframe src="{{$empresa->georeferencia}}" width="250" height="250" style="border:1vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <a title="Login" href="/login"><i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
            </div>
        </div>
        <p class="derechos">Derechos de autor reservados. &copy 2024</p>
    </footer>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>