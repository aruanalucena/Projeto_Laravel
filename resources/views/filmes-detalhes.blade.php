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
    


<div class="container">




<p>Nome do Filme:{{ $filme->title}}</p>
<p>Rating:{{ $filme->rating}}</p>
<p>Duracão:{{ $filme->lenth}}</p>

@isset($filme->genero)
<p>Gênero:{{$filme->genero->nameComRanking() }}</p>
@else
<p>Genero:Nenhum gênero Informado </p>

@endisset
{{$filme->atores }}


</div>
</body>
</html>






