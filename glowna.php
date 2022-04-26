<?php

$tytul = "Szlakiem najpiękniejszych polskich miast";
$zawartosc = '<header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">';
                        
                            include_once 'klasy/baza.php';
                            include_once 'klasy/uzytkownik.php';
                            include_once 'klasy/UserManager.php';
                            $db = new Baza("localhost", "root", "", "uzytkownicy");
                            $um = new UserManager();

                            session_start();
                            $sessionId=session_id();
                            $userId = $um->getLoggedInUser($db, $sessionId);
                            if($userId == -1){
                               $zawartosc .= '<div id="log" class="bg-dark py-4">
                                                <button type="button" class="btn btn-outline-primary" id = "zalogowanie" value="Zaloguj się">Zaloguj się</button>
                                                <button type="button" class="btn btn-outline-primary" id = "zarejestruj" value="Zarejestruj się">Zarejestruj się</button>
                                              </div>'; 
                            }else{
                                $zawartosc .= "<h5 class='text-white mb-2' >Jesteś zalogowany jako:";
                                $zawartosc .= $db->select("select fullName from uzytkownicy where id='".$userId."'",["fullName"]);
                                $zawartosc .= "</h5>";
                                $zawartosc .= '<div id="wylo" class="bg-dark py-4">
                                                <form method="post" action="logowanie.php">
                                                    <input class="btn btn-outline-primary" type="submit" name="wyl" value="Wyloguj" />
                                                </form>
                                                </div>'; 
                            }
                            
             $zawartosc .= '<div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Poznaj najpiękniejsze miasta w Polsce!</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Tutaj znajdziesz miejsca, które warto zobaczyć.</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <div id="przykladowaKaruzela2" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="zdjecia/krakowglowna3.jpg" alt="Pierwszy slajd">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="zdjecia/wroclawglowna3.jpg" alt="Drugi slajd">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="zdjecia/torunglowna3.jpg" alt="Trzeci slajd">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="zdjecia/lublinglowna3.jpg" alt="Trzeci slajd">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="zdjecia/gdanskglowna3.jpg" alt="Trzeci slajd">
                                </div>  
                              </div>
                              <a class="carousel-control-prev" href="#przykladowaKaruzela2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              </a>
                              <a class="carousel-control-next" href="#przykladowaKaruzela2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- About section one-->
            <section id="krakow" class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="zdjecia/krakowglowna.jpg" alt="krakow" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Kraków</h2>
                            <p class="lead fw-normal text-muted mb-0">Miasto położone jest w południowej Polsce, nad królową polskich rzek, Wisłą. Jest drugim pod względem liczby ludności oraz powierzchni miastem w kraju. Atrakcyjne położenie na zbiegu kilku zróżnicowanych krain geograficznych, m.in. słynnej Wyżyny Krakowsko-Częstochowskiej, sprawia, że Kraków to doskonała baza wypadowa w jedne z najbardziej urokliwych zakątków Polski. Kraków jest jednym z najstarszych miast Polski, zaś najstarszym ośrodkiem osadniczym był ten na Wawelu - był to jeden z grodów plemiennych Wiślan.</p>
                            <a id="pokazkrakow" href="#tresc" class="btn btn-primary float-end">Czytaj dalej.</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section id="wroclaw" class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="zdjecia/wroclawglowna.jpg" alt="wroclaw" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Wrocław</h2>
                            <p class="lead fw-normal text-muted mb-0">Wrocław, stolica Dolnego Śląska, jest jednym z najstarszych i najpiękniejszych miast w Polsce. Położony u podnóża Sudetów, nad rzeką Odrą , poprzecinany jej licznymi dopływami i kanałami, jest wyjątkowym miastem 12 wysp i ponad stu mostów. Bogata i burzliwa historia miasta wpisana jest w jego mury. Czasy wczesnego średniowiecza przypomina Ostrów Tumski, na którym zachował się w doskonałym stanie jeden z najpiękniejszych w Europie zespołów architektury sakralnej. Inny zabytek z tego okresu wrocławski Ratusz zaliczany jest do najwspanialszych budowli gotyckich w Europie Środkowej.</p>
                            <a id="pokazwroclaw"  href="#tresc" class="btn btn-primary float-end">Czytaj dalej.</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- About section three-->
            <section id="torun" class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="zdjecia/torunglowna.jpg" alt="torun" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Toruń</h2>
                            <p class="lead fw-normal text-muted mb-0">Toruń to miasto o ciekawym położeniu geograficznym. Znajdujące się w województwie kujawsko-pomorskim, prawobrzeżną częścią leży na Pomorzu, lewobrzeżną natomiast na Kujawach. Jako jedno z najstarszych miast polskich, w 1997 roku toruński zespół staromiejski został wpisany na Listę Światowego Dziedzictwa Kulturowego UNESCO. Obecnie Toruń nastawiony jest przede wszystkim na turystykę. Do głównych atrakcji miasta należy z pewnością Rynek Staromiejski, którego obszar został ustanowiony w latach 1252-1259. W jego centrum znajduje się wielokrotnie przebudowywany gotycki Ratusz, pochodzący z czasów ok. XIII wieku. </p>
                            <a id="pokaztorun" href="#tresc" class="btn btn-primary float-end">Czytaj dalej.</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section four-->
            <section id="lublin" class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="zdjecia/lublinglowna.jpg" alt="lublin" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Lublin</h2>
                            <p class="lead fw-normal text-muted mb-0">Lublin nazywany stolicą wschodniej Polski jest największym i najprężniej rozwijającym się miastem po prawej stronie Wisły. Jako stolica województwa lubelskiego pełni rolę administracyjnego, gospodarczego i kulturalnego centrum regionu. Bogata, siedmiowiekowa historia Lublina oraz położenie w wielokulturowym tyglu stanowią o jego szczególnych walorach. To zaczarowane miejsce przyciągające unikalnym klimatem, bogatą architekturą i licznymi zabytkami. Odbywają się tu renomowane międzynarodowe wydarzenia artystyczne, festiwale teatralne, muzyczne i prezentujące sztukę współczesną.</p>
                            <a id="pokazlublin" href="#tresc" class="btn btn-primary float-end">Czytaj dalej.</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section five-->
            <section id="gdansk" class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="zdjecia/gdanskglowna.jpg" alt="gdansk" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Gdańsk</h2>
                            <p class="lead fw-normal text-muted mb-0">Gdańsk to historyczny, tysiącletni ośrodek hanzeatycki, będący stolicą Pomorza Wschodniego, położony w województwie pomorskim, nad Zatoką Gdańską. Wraz z Gdynią i Sopotem tworzy niezwykle atrakcyjne dla turystów Trójmiasto. Gdańsk urzeka przepiękną, zachwycającą architekturą i niecodzienną atmosferą. Od zawsze budził podziw i zachwyt gości, głównie ze względu na jego bogactwo. Dlatego Gdańsk licznie i chętnie odwiedzany jest przez turystów z całej Europy i nie tylko, a ułatwiają to dogodne połączenia powietrzne, lądowe i morskie nawet z najodleglejszymi zakątkami globu.  </p>
                            <a id="pokazgdansk" href="#tresc" class="btn btn-primary float-end">Czytaj dalej.</a>
                        </div>
                    </div>
                </div>
            </section>';


