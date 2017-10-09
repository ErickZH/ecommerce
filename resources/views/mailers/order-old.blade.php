<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>¡Hola!</h1>
        <p>Te enviamos los datos de tu compra realizada en Programacion JJE</p>

        <table>
            <thead>
                <th>Producto</th>
                <th>Costo</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->pricing}}</td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td>Total</td>
                <td>{{ $order->total }}</td>
            </tr>
        </table>
    </body>
</html>
