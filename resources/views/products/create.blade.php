<x-layout>
    <h1>new product</h1>

    <x-errors/>

    <form method="POST" action="{{ route('products.store') }}">
       <x-products.form/>
    </form>
</x-layout>
