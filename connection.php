<?php

    $con=mysqli_connect('localhost','root','','bd annuaire téléphonique pour les établissements');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>