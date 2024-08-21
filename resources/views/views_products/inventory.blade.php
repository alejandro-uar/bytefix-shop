<x-layout>
    <x-slot name="title">Inventory</x-slot>
    <section class="p-2">
        <div class="">
            <a href="{{ route('admin.print')}}" class="btn btn-danger">Print</a>
        </div>
        <div>
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
                    @foreach ($products as $product)    
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
        </div>
    </section>    
</x-layout>
