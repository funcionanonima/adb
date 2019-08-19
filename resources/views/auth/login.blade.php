<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Ingresar</title>
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{asset('css/login.css')}}" rel="stylesheet">

        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }
    
          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>
      </head>

      <body class="text-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <img class="img-fluid mb-4" src="{{asset('images/adb1.png')}}" alt="">
            {{-- <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1> --}}
            <label for="inputEmail" class="sr-only">Dirección de Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo Electrónico" required="" autofocus="">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif            
            <label for="password" name="password" class="sr-only">Contraseña</label>
            <input type="password" id="password" name="password"class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required="">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif            
            <button class="btn btn-lg btn-dark btn-block" type="submit">Ingresar</button>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidó su contraseña?') }}
                </a>
            <p class="mt-5 mb-3 text-muted">© 2019</p>
        </form>
    
    
    </body>
</html>