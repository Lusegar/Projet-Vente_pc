<?php
    const title ="Votre site de PC Gamer";
    $_date = date("d/m/Y");
    $_style = "./css/main.css";
    $_copyright = date('Y');
    
    class Page{
        static $_css = "./css/main.css";
        public $_subtitle = "Votre article";
        static $_logo = "star.png";
        static $_img="./asset/pc.webp";

    }   
    $_new_page = new Page;    
?>