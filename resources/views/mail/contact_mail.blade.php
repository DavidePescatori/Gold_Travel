<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    

    <h1>{{$name}} ha richiesto di lavorare con noi</h1>

    <h3>ecco il riepilogo dei suoi dati:</h3>

    <ul>
        <li>{{$name}}</li>
        <li>{{$email}}</li>
        <li>{{$messaggio}}</li>
    </ul>

    <p>Se vuoi renderlo revisore clicca qui:</p>

    <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>


</body>
</html>