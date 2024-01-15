
<!DOCTYPE html>
<html>
<head>
    <title>Inloggen op je auccount</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>

    <div class="signin-form">

        <form action="" method="post">

    <div class="form-header">
        <h2>Inloggen</h2>
        <p>Inloggen in Elderschans chatprogramma</p>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="naam@site.nl" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label>Paswoord</label>
        <input type="password" class="form-control" name="pass" placeholder="Paswoord" autocomplete="off" required>
    </div>

    <div class="small">Paswoord vergeten ? <a href="forgot_pass.php">Klik hier</a><br>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Inloggen</ button>
    </div>

        <?php include("signin_user.php"); ?>

        </form>

    div class="text-center small" style="color: #67428B;">Heb je geen account ? <a href=" signup.php">Maak een account</a>
    </div>
    </div>
</body>
</html>