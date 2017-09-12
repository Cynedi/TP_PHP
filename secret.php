<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Site de la NASA</title>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet">
    </head>
    <body>

        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est definie et bon
    {
        ?>

        <span> BRAVO !! Vous trouverez ci dessous les codes d'accès  au serveur central de la NASA:<br/></span>
        <p id="code">HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-HEZJEJDND-NSDHDJDJD-DEHJDJDJKDJK-GDDSJJZ-ARSF-OEKE-EYYE-EACDSV-NDJEJ-BDDEG-OEPOLKD-</p>

        <?php
    }
    else // Si mot de passe incorrect:
    {
        echo '<p>HAHA Si vous ne travaillez pas à la NASA vous ne trouverez jamais !</p>';
    }
        ?>


    </body>
</html>
