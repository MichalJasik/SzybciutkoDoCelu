<?php
    session_start();
    $_SESSION["login"]="";
    $_SESSION["zalogowany"]= "";
    session_unset();
    session_destroy();
    header("location: index.html");
?>