<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Category</th>
              <th scope="col">Model</th>
              <th scope="col">Name</th>
              <th scope="col">Desc</th>
              <th scope="col">Stock</th>
              <th scope="col">Price/u</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $product)    
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>stop</td>
                    <td>{{ $product->model }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>