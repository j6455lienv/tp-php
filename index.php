<!-- 
--Tp-php-index.html
--Auteur : Julien Venet
--Formateur : Yacine
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP-tp</title>
    <link rel="stylesheet" type="text/css" href="css/tp.css">
</head>

<body>
    <h1>PHP - TP</h1>
    <?php include 'php/tp1-tp2.php'; ?>

    <table>
        <tbody class="conteneur">
            <?php include 'php/tp3.php'; ?>
        </tbody>
    </table>

    <form name="nouvo" id="nouvo" action="nouvo.php" method="POST">

        <table border="0" cellspacing="0" cellpadding="0" id="formulair" align="center">

            <tr>
                <td>Tous les champs sont obligatoires.</td>
            </tr>

            <tr>
                <td height="10"></td>
            </tr>

            <tr>
                <td align="left">Pseudo : <input type="text" maxlength="20" size="20" name="pseudo" id="pseudo"></td>
            </tr>

            <tr>
                <td align="left">Password : <input type="password" maxlength="20" size="15" name="pass" id="pass"></td>
            </tr>

            <tr>
                <td align="left">Mail : <input type="text" maxlength="120" size="20" name="email" id="email"></td>
            </tr>

            <tr>
                <td height="10"></td>
            </tr>

            <tr>
                <td align="center"><input type="submit" value="Envoyer"></td>
            </tr>

        </table>

    </form>

</body>

</html>
