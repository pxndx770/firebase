<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>


</head>
<body>
<h1 id="titulo"></h1>
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDJZPfGdPIgp-KY6AoHCqYXM_U2lJ1H6b0",
    authDomain: "carma-web-75ffe.firebaseapp.com",
    databaseURL: "https://carma-web-75ffe.firebaseio.com",
    projectId: "carma-web-75ffe",
    storageBucket: "carma-web-75ffe.appspot.com",
    messagingSenderId: "482589007080",
    appId: "1:482589007080:web:a188a5f70bb16c31"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  var titulo = document.getElementById('titulo');
  var juegos = firebase.database().ref().child('title');
  juegos.on('value', snap => titulo.innerText=snap.val());
</script>

<?php
    /*
    $json='[{"description":"Vive el mayor conflicto de la humanidad con gracias a este regreso de la saga a sus orígenes con una representación inédita de la 2ª Guerra Mundial. Ponte al frente de la patrulla y llévala a la victoria con nuevas formas de cambiar el campo de batalla a tu antojo. Forma tu propia compañía con vehículos, armas y soldados personalizados y vive un viaje épico en Vientos de guerra.","gender":"ACCIÓN, AVENTURA, SHOOTER.","img":"asdsa","price":99999,"title":"BATTLEFIELD V"},{"description":"En el videojuego se te encarga de organizar y recolectar fuerzas para la inquisición, que se encarga de combatir las fuerzas oscuras. Al comenzar la aventura eliges entre tres clases de personajes, cada uno ofrece múltiples árboles de habilidades para especializarte y elegir tu estilo de juego.","gender":"JUEGO DE ROL.","img":"asdasd","price":99999,"title":"DRAGON AGE: INQUISITOR"}]';
    $array = json_decode($json);
    //print_r($array);
    foreach($array as $obj){
        $title = $obj->title;
        $description = $obj->description;
        $gender = $obj->gender;
        echo $title."</br>";
        echo $description."</br>";
        echo $gender."</br>"."</br>"."</br>";
      }
    */
    
?>
</body>
</html>

