<?php

class Strona {
    protected $zawartosc;
    protected $tytul = "Szlakiem najpiękniejszych polskich miast";
    protected $slowa_kluczowe = "miasta, Polska, najpiekniejsze, galeria";

    //interfejs klasy – metody modyfikujące fragmenty strony
    public function ustaw_zawartosc($nowa_zawartosc) {
        $this->zawartosc = $nowa_zawartosc;
    }

    function ustaw_tytul($nowy_tytul) {
        $this->tytul = $nowy_tytul;
    }

    public function ustaw_slowa_kluczowe($nowe_slowa) {
        $this->slowa_kluczowe = $nowe_slowa;
    }

    public function ustaw_style($url) {
        echo '<link rel="stylesheet" href="' . $url . '" type="text/css"/>';
    }

    //interfejs klasy – funkcje wyświetlające stronę
    public function wyswietl() {
        $this->wyswietl_naglowek();
        $this->wyswietl_zawartosc();
        $this->wyswietl_stopke();
    }

    public function wyswietl_tytul() {
        echo "<title>$this->tytul</title>";
    }

    public function wyswietl_slowa_kluczowe() {
        echo "<meta name=\"keywords\" contents=\"$this->slowa_kluczowe\">";
    }

    public function wyswietl_menu() {
        ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container px-5">
                    <a class="navbar-brand " href = "" id="index">Strona główna</a>
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
        <?php
    }

    public function wyswietl_naglowek() {
        ?>
        <!DOCTYPE html>
        <html lang="pl">
           <head>
               <meta charset="utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
               <meta name="description" content="" />
               <meta name="author" content="" />
               <!-- Favicon-->
               <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
               <!-- Bootstrap icons-->
               <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
               <!-- Core theme CSS (includes Bootstrap)-->
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
               
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
               

        <?php
               $this->ustaw_style('css/styles.css');
               $this->ustaw_style('css/lightbox.css');
               echo "<title>" . $this->tytul . "</title></head><body class='d-flex flex-column h-100'><main class='flex-shrink-0'>";
    }

            public function wyswietl_zawartosc() {
                $this->wyswietl_menu();
                echo "<div id='tresc'>";
                echo "<h1>" . $this->tytul . "</h1>";
                echo $this->zawartosc . "</div></main>";
            }

            public function wyswietl_stopke() {
                echo '<footer class="bg-dark py-4 mt-auto">
                        <div class="container">
                            <p class="m-0 text-center text-white">Copyright &copy; Jakub Fornal</p>
                        </div>
                      </footer>
                      <!-- Bootstrap core JS-->
                      
                      <script src="https://maps.google.com/maps/api/js?sensor=false" ></script>
                      <!-- Core theme JS-->';
                echo "<script src='js/skrypty.js'></script>";
                echo "<script src='js/lightbox.js'></script>";
                echo '</body></html>';
            }

        }
        