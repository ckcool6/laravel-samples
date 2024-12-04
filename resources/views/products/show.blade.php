<x-layout>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    <a href="{{ route('products.edit', $product) }}">edit</a>

    <form method="POST" action="{{route('products.destroy',$product)}}">
        @csrf
        @method('DELETE')

        <button>delete</button>
    </form>

    <br/>
    <br/>
    <a href="{{route('products.index')}}">home</a>

</x-layout>
