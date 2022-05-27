<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
unset($_SESSION["status"]);
echo ("<script LANGUAGE='javascript'>
        window.location.href='index.php';
        </script>");
