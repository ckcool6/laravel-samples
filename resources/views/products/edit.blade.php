<x-layout>
    <h1>edit product</h1>

    <x-errors />

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @method('PATCH')
        <x-products.form :product="$product" />
    </form>
</x-layout>
