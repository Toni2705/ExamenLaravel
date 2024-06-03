<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <body>

    <h1>Bienvenido/a {{$usuario}}</h1>
            <table>
                <tr>
                    <th>Nom de la posible parella</th>
                    <th>Edat</th>
                    <th>Color</th>
                    <th>Nom del seu humá</th>
                    <th>Telefon del seu humá</th>
                    <th>Fotos</th>
                </tr>
                @for($i = 0; $i < count($mascotas); $i++)
                
                    <tr>
                        <td>{{ $mascotas[$i]->nombre }}</td>
                        <td>{{ $mascotas[$i]->edad }}</td>
                        <td>{{ $mascotas[$i]->color }}</td>
                        <td>{{ $mascotas[$i]->nombreHumano }}</td>
                        <td>{{ $mascotas[$i]->telefono }}</td>
                        <td><a href="{{ route('paginaFoto', ['nick' => $mascotas[$i]->nick]) }}">Ver foto</a><td>
                    </tr>
                @endfor
            
        <a href="{{ route('logout') }}">Cerrar sesión</a>
            </table>     
        
    </body>
</html>