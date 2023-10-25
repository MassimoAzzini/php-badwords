<?php 

$text = $_GET['text'] ?? "Testo non inserito";
$censoredWord = $_GET['censoredWord'] ?? 'Nessuna parola inserita';

$text_explode = explode(' ', $text);
$text_words = count($text_explode);

$text_replace = str_replace($censoredWord, '***', $text);
$text_replace_explode = explode(' ', $text_replace);
$text_replace_words = count($text_replace_explode);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

  <title>Form php</title>
</head>
<body>
  <div class="container">
    <div>
      <h3>TESTO INSERITO:</h3>
      <p><?php echo "$text" ?></p>
      <h3>PAROLE NEL TESTO:</h3>
      <p><?php echo "$text_words" ?></p>
    </div>

    <div>
    <h3>TESTO CENSURATO:</h3>
      <p><?php echo "$text_replace" ?></p>
      <h3>PAROLE NEL TESTO:</h3>
      <p><?php echo "$text_replace_words" ?></p>
    </div>


  </div>
</body>
</html>