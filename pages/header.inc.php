<?php
    class User{
        public $_style ="./css/main.css";
        public $_title ="Votre site de PC Gamer";
    }
    $_user = new User;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Achat et vente">
    <title> 
        <?= $_user ->_title;?>    
    </title> 
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="<?= $_user->_style ?>">
</head>