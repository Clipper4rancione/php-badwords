<!DOCTYPE html>
<html lang="en">
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
    
    <div class="wrapper d-flex justify-content-center align-items-center">
        <div class="mc-container">
             <h1 class="text-center py-3">PHP Badwords</h1>
             <div class="container py-5">
                <div class="row py-3">
                    <div class="col-auto">
                        <label for="input" class="text-center">Scrivi una frase</label>
                        <input type="text" class="form-control" placeholder="Inserisci del testo..">
                    </div>
                    <div class="col-auto">
                        <label for="input" class="text-center">Parola da censurare</label>
                        <input type="text" class="form-control" placeholder="Inserisci la badword">
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="btn btn-success" type="submit" >Invia</div>
                    </div>
                    <div class="col-auto">
                        <div class="btn btn-danger">Clear</div>
                    </div>
                </div>
             </div>
        </div>
    </div>

</body>
</html>