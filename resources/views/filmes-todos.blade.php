<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<div class=" container">

<h3>Lista de Filmes </h3><li class="list-group-itm">
    
 <a href="/filme/adicionar">  Novo Filme </a>

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