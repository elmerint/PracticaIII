<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <div class="card-body">
    <h3 class="text-success text-center">
                @if(session('info'))
                    <div class="alert alert-success">
                    {{session('info')}}
                    </div>
                @endif
    </h3>
    <table class="table table-hover table-sm">
        <thead>
            <th>Articulo:</th>
            <th>Precio(USD):</th>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->nombre_venta}}</td>
                <td>{{$venta->precio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a href="/home"><button type="submit" class="btn btn-warning">Regresar a comprar</button></a>

    </div>
    </div>

</body>
</html>