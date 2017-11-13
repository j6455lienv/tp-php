<?php

$cnx = mysqli_connect('localhost','root','','formation_php');

//var_dump($cnx);//commentaire

if(isset($cnx)){
    $req = mysqli_query($cnx, 'SELECT * FROM usert');
    //var_dump($req);
}

foreach ($req as $key => $value) {
        echo $value['login']. '<br>';
    }

