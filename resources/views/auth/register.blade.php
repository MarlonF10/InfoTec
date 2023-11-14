<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/estilos registro.css')}}">

</head>

<body>
<form method="POST" action="{{ route('register') }}">
      @csrf
  <div class="form">
  <h4>Inicio De Sesion</h4>
  <div class="login">

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

            
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="suggests">
      <a id="viewPassword">Mostrar contraseña</a>
    </div>       
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña"required autocomplete="new-password">


                               
              <button  type="submit">Iniciar sesion</button>
      
</div>
<div class="suggests">
  <div class="remember">
    <input type="checkbox" checked>
    <span>Recuerdame</span>
  </div>
<div class="forgot">
<a href="{{ route('password.request') }}">¿Perdiste tu contraseña?</a>


</div>
</div>
<input class='btn btn-primary' type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
</div>

</form>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="js/login.js"></script>
</body>

</html>