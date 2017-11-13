    <!--tp1 - afficher la table * de 7 -->
    <h2>tp1 - afficher la table * de 7</h2>
    
<?php
    
    $valeurTable = 7;//initiation de la variable valeur de la table 
    
    for ($operande = 0 ; $operande <=10 ; $operande++){ //initation de la valeur operande qui incrementera à chaque tour de boucle
        $result = $operande * $valeurTable; //resultat de l'operation mise dans $result
        echo "$operande * $valeurTable = $result" . "<br/>"; //affichage du resultat à chaque tour de boucle
    }
?>
    <!--tp2 - afficher toutes les tables de * de 1 a 10-->
    <h2>tp2 - afficher toutes les tables de * de 1 a 10</h2>
    <div class="tp2">
<?php
    $tableau = [];

    for ($operandeTable = 0 ; $operandeTable <=10; $operandeTable++) 
    { 
        
        echo ("<div class='table'><h3>Table de $operandeTable</h3>");
        for ($operande=0 ; $operande <=10 ; $operande++){
            $result = $operande * $operandeTable;
            echo "<p>$operande * $operandeTable = $result</p>";
            
        }
        echo "</div>";
    }
?>
    </div>