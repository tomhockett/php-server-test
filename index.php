<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Php Test</title>
  <style>

    /* * {
      border: 2px solid red !important;
    } */

    body {
      background: #000;
      font-family: 'Lato', san-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      color: white;
      text-align: center;
    }

    h1, h2, h3, p {
      color: #FFF;
    }

    h1 {
      font-size: 200px;
      margin: 100px 0;
    }

    p {
      font-size: 100px;
      text-align: center;
      margin-top: 0;
    }

  </style>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>

  <div class="container">
    <?php
      echo "<h1>Hello World!</h1>";
      echo "<p>I am your php server!</p>"
    ?>
    <?php 
      echo "<h2>What do you wanna build? 👷🏼‍</h2>"
    ?>
  </div>

</body>
</html>