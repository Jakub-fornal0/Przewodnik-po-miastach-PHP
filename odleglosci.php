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
    echo '<section class="py-5">
                                                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                                                    <div class="row gx-5 justify-content-center">
                                                        <div class="text-center mb-5">
                                                            <div class=" bg-primary bg-gradient text-white rounded-3 mb-3"></div>
                                                            <br/><h2 class="fw-bolder">Geolokacja</h2>
                                                            <p class="lead fw-normal text-muted mb-0">Jest to aplikacja, która na podstawie szerokości i długości geograficznej oblicza przybliżoną odległość do wymienionych miast (w linii prostej).</p>
                                                        </div>
                                                        <div class="col-lg-8 col-xl-6">
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                    <h5>Twoje współrzędne</h5>
                                                                    <input class="form-control text-center" id="geo" disabled type="text" />
                                                                 </div>
                                                            </div>
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                    <h5>Kraków</h5>
                                                                    <input class="form-control text-center" id="odlkrakow" disabled type="text" />
                                                                 </div>
                                                            </div>
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                    <h5>Wrocław</h5>
                                                                    <input class="form-control text-center" id="odlwroclaw" disabled type="text" />
                                                                 </div>
                                                            </div>
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                     <h5>Toruń</h5>
                                                                    <input class="form-control text-center" id="odltorun" disabled type="text" />
                                                                 </div>
                                                            </div>
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                    <h5>Lublin</h5>
                                                                    <input class="form-control text-center" id="odllublin" disabled type="text" />
                                                                 </div>
                                                            </div>
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                    <h5>Gdańsk</h5>
                                                                    <input class="form-control text-center" id="odlgdansk" disabled type="text" />
                                                                 </div>
                                                            </div>
                                                            <div class="text-center">
                                                                 <div class="form-floating mb-3">
                                                                    <button class="btn btn-primary" onclick="getLocation()" >Sprawdz działanie</button>
                                                                 </div>
                                                            </div>  

                                                           <div >
                                                                 <div id="mapka"></div>
                                                           </div>

                                                        </div>
                                                    </div>  
                                                </div>
                                            </section>';
}
                            
