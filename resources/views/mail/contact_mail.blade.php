{{-- <!DOCTYPE html>
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
</html> --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Richiesta di Candidatura</title>
  <style>
    /* Stili CSS */
    body {
      padding-top: 10px;
      font-family: Arial, sans-serif;
      background-color: #1A385A;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333333;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .ptesto {
      color: #555555;
      font-size: 13.5px;
      line-height: 1.5;
    }

    .pmessaggio {
      color: #555555;
      font-size: 16px;
      font-weight: 100;
    }

    .button {
      display: inline-block;
      background-color: #1A385A;
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      margin-top: 20px;
    }

    .button:hover {
      background-color: #ffc107;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Richiesta di candidatura</h1>
    <hr>
    <p class="ptesto">L'utente <strong>{{$name}}</strong> ha richiesto di diventare revisore,</p>
    <h2>Dati Dell'Utente</h2>
    <ul>
    <li>
         Nome: <strong>{{$name}}</strong>
    </li>
    <li>
        E-mail : <strong>{{$email}}</strong>
    </li>
    </ul>
    <h2>Messaggio:<h2>
    <p class="pmessaggio">{{$messaggio}}</p>
    <a class="button" href="{{route('make.revisor', compact('user'))}}">Approva Richiesta</a>
  </div>
</body>
</html>
