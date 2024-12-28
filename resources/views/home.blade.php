<x-layout>

    <h1>home</h1>
    <br/>
    <a href="{{ route('products.index') }}">products</a>

   
    <br/>
    <br/>
    <br/>

    <x-card>
        <x-slot:title>
            标题
        </x-slot>
            内容
    </x-card>

</x-layout>
