<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="indexfont/fonts/material-icon/css/material-design-iconic-font.min.css">
    
	<link href="<?php echo RUTA;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="indexfont/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" action="test.php">
                <h2>Test de Orientación Vocacional</h2>
                <div class="form-group-1">
                    <input type="text" name="nombre" id="name" placeholder="Apellidos y Nombres" required />
                    <input type="email" name="correo" id="email" placeholder="Correo Electrónico" required />
                    <input type="text" name="distrito" id="distrito" placeholder="Distrito" required />
                    <input type="number" name="telefono" id="phone_number" placeholder="Teléfono" required />
                    
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Género</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="gridRadios1" value="M" required>
                            <label class="form-check-label" for="gridRadios1">
                                Masculino
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="F" required>
                            <label class="form-check-label" for="gridRadios2">
                                Femenino
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Ingresar al Test" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="indexfont/vendor/jquery/jquery.min.js"></script>
    <script src="indexfont/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>