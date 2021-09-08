<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Web Security Opdracht</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
<img src="images/logo.png" alt="Gilievno Logo">
<h1>Veiligheid staat voorop!</h1>
<h2>Gebruikersdashboard</h2>
<form action="login.php" method="POST">
    <?php if (isset($_GET["login"]) && $_GET['login'] == "") { ?>
        <div class="notice error">Er ging iets fout, probeer nogmaals.</div>
    <?php } else if ($_GET["login"] === "0") { ?>
        <div class="notice error">Login bestaat niet.</div>
    <?php } else if ($_GET["login"] === "1") { ?>
        <div class="notice success">Je bent ingelogd!</div>
    <?php } ?>
    <fieldset>
        <div class="input">
            <label for="username">Gebruikersnaam</label>
            <input id="username" name="username" type="text">
        </div>
        <div class="input">
            <label for="password">Wachtwoord</label>
            <input id="password" name="password" type="text">
        </div>
    </fieldset>
    <input type="submit" value="Inloggen">
</form>
</body>
</html>
