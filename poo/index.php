<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:royalblue;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
     
    }

    label {
      font-size: 16px;
      color: white;
      margin-bottom: 8px;
      display: block;
    }

    input[type="text"],
    input[type="number"],
    input[type="double"],
    button[type="submit"]  {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 16px;
    }

    button[type="submit"] {
      background-color: mediumturquoise;
      color: white;
      border: none;
      cursor: pointer;
    }

  </style>
</head>

<body>

  <form method="post" action="produto.php">
    <label for=nome>Nome</label>
    <input type="text" id="nome" name="nome" value="">
    <br>
    <label for=marca>Marca</label>
    <input type="text" id="marca" name="marca" value="">
    <br>
    <label for=qtd>Quantidade</label>
    <input type="number" id="qtd" name="qtd" value="">
    <br>
    <label for=preco>Preço</label>
    <input type="double" id="preco" name="preco" value="">
    <br>
    <button type="submit">Ver</button>
  </form>

</body>

</html>