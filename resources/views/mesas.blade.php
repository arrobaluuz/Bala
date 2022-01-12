<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis XV años | Valeria </title>
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--css-->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"> 
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/img/rose.ico')}}">
    <!--materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
        <div class="headerdos">
            <p class="Rouge-text mis-xvdos">Mis XV años</p>
            <img src="{{asset('assets/img/valeria.png')}}">
        </div>
        <div class="mesas-div">
            <div class="info">
                <div id="personas">
                    <h4>Pases: {{$consultar->personas}}</h4>
                </div>
                <div id="mesa">
                    <h4>Mesa: {{$consultar->mesa}}</h4>
                </div>            
            </div>
            <div class="acomodo">
                <img  class="mesas-div-web" src="{{asset('assets/img/mesas.jpeg')}}">
                <img  class="mesas-div-movil" src="{{asset('assets/img/mesas-movil.jpeg')}}">
            </div>
        </div>
    
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
