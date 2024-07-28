<x-layout>
    <x-slot name="title">Register category</x-slot>
    <section class="d-flex justify-content-center p-4">
        <form class="" action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id of category</label>
                <input type="integer" class="form-control" id="id" name="id">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Category name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>            
              <div class="row">
                  <button class="btn btn-success">Register</button>                
              </div>
        </form>
    </section>
</x-layout>   