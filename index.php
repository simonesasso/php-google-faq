<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
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

    </div>
    <div class="body-div">
     <?php
      $domande = [
        [
          "domanda" => "<h2>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h2>",
          "risposta" => "<p>La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa.
          La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di
          rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi,
          i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>"
        ],
        [
          "domanda" => "<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>",
          "risposta" => "<p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere
          Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e
           ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro.
           Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica
           in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo</p>"
        ],
        [
          "domanda" => "<h2>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h2>",
          "risposta" => "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web.
          I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di
          ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi
          contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre,
          se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni
          su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che
          Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google.
          In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere
          ulteriori informazioni</p>"
        ],
        [
          "domanda" => "<h2>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h2>",
          "risposta" => "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web.
          I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di
          ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi
          contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre,
          se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni
          su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che
          Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google.
          In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere
          ulteriori informazioni</p>"
        ]
      ];

       foreach ($domande as  $domanda) {
        echo $domanda["domanda"] . "<br>";
        echo $domanda["risposta"] . "<br>";

       }
      ?>
    </div>

  </body>
</html>
