<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Szlakiem najpiękniejszych polskich miast</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/lightbox.js"></script>
        <script src="js/skrypty.js"></script>
        <link rel="stylesheet" href="css/lightbox.css" /> 
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container px-5">
                    <a class="navbar-brand " href = "index.php" id="index">Strona główna</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Miasta</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="index.php#krakow">Kraków</a></li>
                                    <li><a class="dropdown-item" href="index.php#wroclaw">Wrocław</a></li>
                                    <li><a class="dropdown-item" href="index.php#torun">Toruń</a></li>
                                    <li><a class="dropdown-item" href="index.php#lublin">Lublin</a></li>
                                    <li><a class="dropdown-item" href="index.php#gdansk">Gdańsk</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href = "#" id="gal">Galeria</a></li>
                            <li class="nav-item"><a class="nav-link" href = "#" id="odleglosci">Sprawdz odległość</a></li>
                            <li class="nav-item"><a class="nav-link" href = "#" id="formularz">Podziel się opinią!</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id='tresc'>
<?php   
      include_once("klasy/baza.php");
      $bd = new Baza("localhost", "root", "", "uzytkownicy");
      include_once 'klasy/UserManager.php';
      $um = new UserManager();
      session_start();
      $sessionId = session_id();
      $userId = $um->getLoggedInUser($bd, $sessionId);
      if ($userId == -1) {
            header("location:logowanie.php");
      }else{
        if (filter_input(INPUT_POST, "edy")) {
            $id = $_REQUEST['doEdy'];
            $userId = $um->getLoggedInUser($bd, $sessionId);
            $userIdOpinion = $um->getUserInOpinion($bd, $id);  
            if($userId === $userIdOpinion){
                $um->edytujOpinie($bd, $id);
            }else{
                $um->nieEdytowanoOpinii();
            }
          }
      }

?>
                
</div>
</main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
        








