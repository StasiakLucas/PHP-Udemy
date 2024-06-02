<?php
  
?>

<!DOCTYPE HTML>
<html lang="pt-br">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Aprendendo PHP Vanilla</title>
  </head>
  
  <body class="bg-gray-100">

    <header class="bg-blue-500 text-white p-4">
      <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Aprendendo PHP Vanilla</h1> 
      </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4"></h2>
       <p><?= 'Hello my name is ' . $fullName ?></p>
        <p><?= var_dump($result); ?></p>
      </div>
    </div>
  </body>
</html>