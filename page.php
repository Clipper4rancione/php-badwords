<!DOCTYPE html>
<html lang="en">
<?php 

    $frase = $_GET['frase'];
    $badword = $_GET['badword'];

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

    <title>PHP Badwords</title>
</head>
<body>
      <div class="container p-5">
        <ul>
            <li> 
                <h3>La tua frase: <span> <?php echo $frase ?></span></h3>
                <ul>
                    <li>
                        Numero Caratteri: <?php echo strlen($frase) ?> 
                    </li>
                </ul>
            </li>
            <li><h3>La parola che hai scelto di censurare: <?php echo $badword ?></h3></li>
            <li> 
                <h3>La tua frase censurata:
                        <?php
                            $censored_text = str_replace($badword, '***',$frase); 
                            echo $censored_text;
                        ?>
                </h3>
                <ul>
                    <li>Numero caratteri <?php echo strlen($censored_text) ?> </li>
                </ul>
            </li>
            
        </ul>
      </div>
</body>
</html>