
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Richiesta di Candidatura</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital@0;1&family=Rancho&display=swap" rel="stylesheet">
  <style>
    /* Stili CSS */
    body {
      padding-top: 10px;
      font-family: Arial, sans-serif;
      background-color: #1A385A;
      font-family: 'Amaranth', sans-serif;
      font-family: 'Rancho', cursive;
      font-size: 24px;
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
      font-size: 50px;
      margin-bottom: 20px !important;
      margin-top: 0px !important;
    }
    
    .ptesto {
      color: #555555;
      line-height: 1.5;
    }
    
    .pmessaggio {
      color: #555555;
      font-weight: 100;
      font-size: 20px;
    }
    
    .button {
      display: inline-block;
      background-color: #1A385A;
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      font-size: 20px;
      margin-top: 20px;
    }
    
    .button:hover {
      background-color: #ffc107;
    }
    
    .immagine-logo{
      width: 250px;
      text-align: center;
    }

    .margine-h2-custom{

      margin-bottom: 0px !important;

    }
    
  </style>
</head>
<body>
  <div class="container">
    <img class="immagine-logo" src="{{ $message->embed(public_path('media/nuovoLogoCopia.png')) }}" alt="Logo">
    <h1>Richiesta di candidatura</h1>
    <hr>
    <p class="ptesto">L'utente <strong>{{$name}}</strong> ha richiesto di diventare revisore,</p>
    <h2 class="margine-h2-custom">Dati Dell'Utente</h2>
    <ul>
      <li>
        Nome: <strong>{{$name}}</strong>
      </li>
      <li>
        E-mail : <strong>{{$email}}</strong>
      </li>
    </ul>
    <h2 class="margine-h2-custom">Messaggio:<h2>
      <p class="pmessaggio">{{$messaggio}}</p>
      <a class="button" href="{{route('make.revisor', compact('user'))}}">Approva Richiesta</a>
    </div>
  </body>
  </html>
  