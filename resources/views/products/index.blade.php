<x-layout>

    <h1>
        products
    </h1>

    <a href="{{ route('products.create') }}">new product</a>
    @foreach ($products as $product)
        <h2><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>{{ $product->size }}</p>
    @endforeach

    {{ $products->links('vendor/pagination/simple-default') }}
</x-layout>
