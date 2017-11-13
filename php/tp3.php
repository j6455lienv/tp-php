<!-- tp3 affichage d'un tableau avec foreach  -->
<h2>tp3 affichage d'un tableau avec foreach</h2>
<div class="tp3">
<?php
    //creation du tableau à deux dimension en réutilisant les ls bo 
    for ($operandeTable = 0 ; $operandeTable <=10; $operandeTable++) 
    {  
        for ($operande=0 ; $operande <=10 ; $operande++){
            $tab[$operandeTable][$operande] = $operande * $operandeTable;
        }
    }
    
//var_dump($tab);
 foreach ($tab as $v1) {
    ?> <tr> <?php
    foreach ($v1 as $v2) {
        echo '<td>' . $v2 . '</td>';
    }
    ?> </tr> <?php
}

?>
</div>