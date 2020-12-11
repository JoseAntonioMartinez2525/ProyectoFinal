<?php

    session_start();
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Movies Website</title>
    <link rel="stylesheet" type="text/css" href="../home/css/style.css">

    <!--icono para la pestaña-->
    <link rel="shortcut icon" href="../home/img/film.png">

    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" ></script>

</head>
<body>
<!--nav-->
    <nav>
    <!--logo-->
    <a class="logo" href="#">   
        <img src="../home/img/logo.png">
    </a>
    <!--menu-->
    <ul class="menu">
        <li><a href="<?=BASE_PATH?>in/">Home</a></li>
        <li><a href="<?=BASE_PATH?>graf/">Dash</a></li>
        <li><a href="<?=BASE_PATH?>film/">Movies</a></li>
        <li><a href="<?=BASE_PATH?>users/">Clients</a></li>
        <li><a href="<?=BASE_PATH?>cat/">Categories</a></li>
    </ul>
    <!--search-->
    <div class="search">
        <input type="text" placeholder="Find your movie">
        <i class="fas fa-search"></i>
    </div>
    <dic class="user">
        <a href="../log/">
        <i style="float: right;cursor: pointer;" title="Cerrar sesión" class="fas fa-power-off"></i></a>
        
    </div>
    </nav>
<section id="main">
<!--showcase-->
<!--heading-->
<h1 class="showcase-heading">Showcase</h1>
    <!--carusel-->
    <div class="content-all">
        <div class="content-carrousel">

         <a href="https://www.youtube.com/watch?v=DdI97_W2a6Q&has_verified=1">
            <figure>
                <img src="../home/img/s2.jpg">
                
            </figure>
        </a>
           
                <figure>
        <a href="https://www.youtube.com/watch?v=3hrSSB7CxRc"> 
                    <img src="../home/img/s3.png"></a>

                </figure>

                <figure>
                   <a href="https://www.youtube.com/watch?v=vOkbX3HtZcE">   
                    <img src="../home/img/s4.jpg">
</a>
                </figure>
            
                <figure>
            <a href="https://www.youtube.com/watch?v=k6jm3RcsWP8">
                    <img src="../home/img/s5.jpg">
</a>
                </figure>
            
                <figure>
                   <a href="https://www.youtube.com/watch?v=RfAY0Il9SI4&t=1187s">   
                    <img src="../home/img/s-6.jpg">
</a>
                </figure>
           
                <figure>
                   <a href="https://www.youtube.com/watch?v=mnbPgdvNykw">   
                    <img src="../home/img/s-7.jpg">
</a>
                </figure>
           
                <figure>
                   <a href="https://www.youtube.com/watch?v=rVvHYD46i3I">   
                    <img src="../home/img/s-8.jpg">
</a>
                </figure>
           
                <figure>
                   <a href="https://www.youtube.com/watch?v=0OIFPXDWHGs">   
                    <img src="../home/img/s-9.jpg">
</a>
                </figure>
          
                <figure>
                    <a href="https://www.youtube.com/watch?v=XLonBRMrnlY">
                    <img src="../home/img/s-10.jpg">
</a>
                </figure>
        </div>
    </div>

</section>


</body>
</html>