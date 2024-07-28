<x-layout>
    <x-slot name="title">Register product</x-slot>
    <section class="d-flex justify-content-center p-4">
        <form class="" action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select name="category_id" id="category" class="form-select" aria-label="Default select example">
                  @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
          </div>          
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="HP-DESKFT103">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Product name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Hp pavilot...">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Hp pavilot-3GHz...">
              </div>
              <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="10">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price/u</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="10000">
              </div>
              <div class="mb-3">
                <label for="uri" class="form-label">Image of product</label>
                <input class="form-control" type="file" id="uri" name="uri">
              </div>              
              <div class="row">
                  <button class="btn btn-success">Register</button>                
              </div>
        </form>
    </section>
</x-layout>   