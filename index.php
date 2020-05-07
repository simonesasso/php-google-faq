<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <?php require 'data.php'; ?>
  </head>
  <body>
    <nav>
      <div class="logo">
        <img src="logo.png" alt="img"><h3>Privacy e termini</h3>
      </div>
      <div class="nav-menu">
        <span class="nav-menu-item">Introduzione</span>
        <span class="nav-menu-item">Norme privacy</span>
        <span class="nav-menu-item">Termini di servizio</span>
        <span class="nav-menu-item">Tecnologie</span>
        <span class="nav-menu-item faq">Domande frequenti</span>
      </div>
    </nav>


    <div class="body-div">
     <?php

      // ciclo che stampa domande e risposte presenti nellarray
       foreach ($domande as  $domanda) {
        echo $domanda["domanda"] . "<br>";
        echo $domanda["risposta"] . "<br>";

       }

       // inserire nellurl domanda=n
       $reqfaq = $_GET["domanda"];
       // funzione che stampa la domanda richiesta tramite url
       function stampafaq($numq,$array)
       {

         echo "<hr><h2 class='url-q'>Domanda richiesta da url</h2>";
         echo $array[$numq]["domanda"];
         echo $array[$numq]["risposta"];

       }
       stampafaq($reqfaq,$domande);


      ?>
    </div>
    <?php
    // funzione che stampa finestra col numero di domande
    function numDomande($domande)
    {
      $num = count($domande);
      echo "<div id='finestra-faq'>"."<span id='close'>"."&Cross;"."</span>"."<div class='n-domande'>"."<h4>numero di domande= " . $num . "</h4>"."</div>" . "</div>";
    }
    numDomande($domande);
    ?>
    <script src="main.js" charset="utf-8"></script>
  </body>
</html>
