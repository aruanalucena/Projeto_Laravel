@extends ('layouts.app')

@section ('content')

<div class=" container">

<h2>Lista de Filmes </h2><li class="list-group-itm">
    
 <a href="/filme/adicionar"> + Novo Filme </a>

<ul>
@foreach($filmes as $filme)
    
    <li class = "list-group-item">
        <a href="/filmes/{{$filme->id}}">
        {{$filme->titleComRating()}}
        </a>

        <a href="/filme/editar/{{$filme->id}}" class="btn btn-primary btn-sm">Editar</a>
        <a href="/filme/excluir/{{$filme->id}}" class="btn btn-danger btn-sm">Excluir</a>
    </li>

@endforeach

{{$filmes->links()}}



</ul>
@endsection