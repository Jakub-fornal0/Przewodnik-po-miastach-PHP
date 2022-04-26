<?php
include_once 'klasy/baza.php';
include_once 'klasy/uzytkownik.php';
include_once 'klasy/UserManager.php';
$db = new Baza("localhost", "root", "", "uzytkownicy");
$um = new UserManager();

session_start();
$sessionId = session_id();
$userId = $um->getLoggedInUser($db, $sessionId);
if ($userId == -1) {
    header("location:logowanie.php");
} else {
    echo "Szlakiem najpiękniejszych polskich miast";
    echo '<section class="py-5" id="galeria">
                    <div class="container px-5 my-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">Galeria</h1>
                            <p class="lead fw-normal text-muted mb-0">Kraków</p>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/krakow/zdj1.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj1.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/krakow/zdj2.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj2.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/krakow/zdj3.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj3.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/krakow/zdj4.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj4.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/krakow/zdj5.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj5.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/krakow/zdj6.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj6.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/krakow/zdj7.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj7.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/krakow/zdj8.jpg" data-lightbox="galeria" data-title="Kraków">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/krakow/min/zdj8.jpg" alt="krakow"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container px-5 my-5">
                        <div class="text-center mb-5">
                            <p class="lead fw-normal text-muted mb-0">Wrocław</p>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/wroclaw/zdj1.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj1.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/wroclaw/zdj2.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj2.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/wroclaw/zdj3.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj3.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/wroclaw/zdj4.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj4.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/wroclaw/zdj5.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj5.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/wroclaw/zdj6.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj6.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/wroclaw/zdj7.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj7.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/wroclaw/zdj8.jpg" data-lightbox="galeria" data-title="Wrocław">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/wroclaw/min/zdj8.jpg" alt="wroclaw"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container px-5 my-5">
                        <div class="text-center mb-5">
                            <p class="lead fw-normal text-muted mb-0">Toruń</p>
                        </div>
                        <div class="row gx-5">
                           <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/torun/zdj1.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj1.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/torun/zdj2.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj2.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/torun/zdj3.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj3.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/torun/zdj4.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj4.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/torun/zdj5.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj5.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/torun/zdj6.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj6.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/torun/zdj7.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj7.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/torun/zdj8.jpg" data-lightbox="galeria" data-title="Toruń">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/torun/min/zdj8.jpg" alt="torun"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container px-5 my-5">
                        <div class="text-center mb-5">
                            <p class="lead fw-normal text-muted mb-0">Lublin</p>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/lublin/zdj1.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj1.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/lublin/zdj2.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj2.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/lublin/zdj3.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj3.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/lublin/zdj4.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj4.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/lublin/zdj5.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj5.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/lublin/zdj6.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj6.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/lublin/zdj7.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj7.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/lublin/zdj8.jpg" data-lightbox="galeria" data-title="Lublin">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/lublin/min/zdj8.jpg" alt="lublin"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container px-5 my-5">
                        <div class="text-center mb-5">
                            <p class="lead fw-normal text-muted mb-0">Gdańsk</p>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/gdansk/zdj1.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj1.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/gdansk/zdj2.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj2.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/gdansk/zdj3.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj3.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/gdansk/zdj4.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj4.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/gdansk/zdj5.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj5.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5">
                                    <a href="zdjecia/gdansk/zdj6.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj6.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative mb-5 mb-lg-0">
                                    <a href="zdjecia/gdansk/zdj7.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj7.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="position-relative">
                                    <a href="zdjecia/gdansk/zdj8.jpg" data-lightbox="galeria" data-title="Gdańsk">
                                        <img class="img-fluid rounded-3 mb-3" src="zdjecia/gdansk/min/zdj8.jpg" alt="gdansk"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
}

