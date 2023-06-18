@extends('web.layout')
@section('content')
<x-web.blog.post.index :post='$posts'>
    <h2>Listado de publicaciones</h2>
    @slot('header')
        <h2 class="font-semibold text xl text-gray-800 leading-tight">
            Listado Principal de Publicaciones -- slot
            @endslot
        </h2>
    @endslot
    @slot('footer')
        <footer>
            Pie de pagina
        </footer>
    @endslot
</x-web.blog.post.index>

@endsection