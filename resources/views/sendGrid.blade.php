<!doctype html>
<html lang="es">
  <head>
    <title>¡Bienvenido a Gamerli!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3> Gamerli </h3>
                <p> ¡Bienvenido a Gamerli! </p>
                <p> Ya eres uno más dentro de la comunidad. </p>
                <p> Esperamos que estes agusto y podamos crecer juntos. </p>
                <br/>
                 <li>Nombre: {{ $user->name }}</li>
                 <li>User: {{ $user->email }}</li>
        
                <br/>
                <p> Atentamente,</p>
                <p> Equipo de Gamerli </p>
            </div>
        </div>
    </div>
  </body>
</html>