<x-layout>
    <x-slot name="title">Keyboards</x-slot>
    <section class="row">
        <div class="col-3 p-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{route('index')}}" style="text-decoration: none">All category</a></li>
                <li class="list-group-item"><a href="{{route('laptos')}}" style="text-decoration: none">Laptos</a></li>
                <li class="list-group-item"><a href="{{route('mouses')}}" style="text-decoration: none">Mouses</a></li>
                <li class="list-group-item"><a href="{{route('keyboards')}}" style="text-decoration: none">Keyboards</a></li>
            </ul>
        </div>
        <div class="col-9 d-flex flex-wrap gap-3 p-2">
            @forelse ($products as $product)    
                    <x-card title="{{ $product->name }}" des="{{ $product->description }}" uri="{{ $product->uri }}" />
            @empty
                    <span>Not product registerd</span>
            @endforelse
        </div>
    </section>
</x-layout>