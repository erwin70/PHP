<!DOCTYPE html>
<html>
<head>
    <title>Maak nieuw auccount</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>

    <div class="signup-form">
        <form action="" method="post">
    <div class="form-header">
        <h2>Gebruiker aanmaken</h2>
        <p>Aanmelden bij Elderschans chatprogramma</p>
    </div>
    <div class="form-group">
        <label>Gebruikersnaam</label>
        <input type="text" class="form-control" name="user_name" placeholder="schrijf hier jouw naam" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label>Jouw Emailadres</label>
        <input type="email" class="form-control" name="user_email" placeholder="naam@site.nl" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label>Geslacht</label>
        <select class="form-control" name="user_gender" required>
            <option disabled="">Selecteer uw geslacht</option>
            <option>Man</option>
            <option>Vrouw</option>
            <option></option>
        </select>
    </div>
    <div class="form-group">
        <label>Land</label>
        <select class="form-control" name="user_country" required>
            <option disabled="">Selecteer uw land</option>
            <option>Nederland</option>
            <option>Belgie</option>
            <option>Hongarije</option>
            <option>Polen</option>
            <option>Iran</option>
            <option>Ander land</option>
        </select>
    </div>
    <div class="form-group">
        <label>Paswoord</label>
        <input type="password" class="form-control" name="user_pass" placeholder="Paswoord" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Aanmelden</ button>
    </div>
        <?php include("signup_user.php"); ?>
        </form>
    <div class="text-center small" style="color: #67428B;">Heb je al een account ? <a href=" signin.php">Meld je aan</a></div>
    </div>

</body>
</html>