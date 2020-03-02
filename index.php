<?php 
  include('files.php');

  $files = new files();

  try {

    $path = 'texto.txt';
    $contentFile = $files->contentFile($path);

    if(empty($contentFile)) {
      echo "Arquivo $path sem conteúdo.";   
    } else {
      echo "Arquivo: $path Conteúdo: $contentFile";
    }

  } catch (\Throwable $th) {
    echo $th->getMessage();
  }
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>

<body>
  <h1>Início</h1>
</body>

</html>
