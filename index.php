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

    <div class="tp3">
        <table>
            <tbody class="conteneur">
                <?php include 'php/tp3.php'; ?>
            </tbody>
        </table>
    </div>

    <div class="tp4">
        <h2>tp4- formulaire de contact</h2>
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <label for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
                <label for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
                <label for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
            </div>
            <input id="submit_button" type="submit" value="Send email" />
        </form>
    </div>
</body>

</html>