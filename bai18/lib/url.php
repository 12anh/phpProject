<?php

    function redirect($url="?page=home.php")
    {
        if(!empty($url))
        header("Location:home.php");
    }
?>
