<?php

class UserManager {

    function loginForm() {
        ?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div id="formularz" class="text-center mb-5">
                        <h1 class="fw-bolder">Logowanie:</h1>
                    </div>
                    <form action="logowanie.php" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="login" name="login" type="text" />
                            <label for="login">Login</label>
                            <p id="login_error" style="color:red"></p>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="passwd" name="passwd" type="password" />
                            <label for="passwd">Hasło</label>
                            <p id="fpasswd_error" style="color:red"></p>
                        </div>
                        <br/>
                        <div class="text-center"> 
                            <br /><input class="btn btn-outline-success" type="submit" name="zal" value="Zaloguj" />
                            <input class="btn btn-outline-danger" type="reset" name="reset" value="Anuluj" />
                        </div> 
                    </form>    
<?php
    }
    function edytujFormularz(){
       ?>

                 <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <div class="bg-primary bg-gradient text-white rounded-3 mb-3"></i></div>
                            <h1 class="fw-bolder">Edytuj opinie:</h1>
                        </div>
                        
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form method="post" action="edytujOpinie.php">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="doEdy" name="doEdy" type="number" />
                                        <label for="doEdy">Podaj id opinii do edycji</label>
                                        <p id="doEdy_error" style="color:red"></p>
                                    </div>

                                    <div class="text-center">
                                        <br/><label for="miasto">Wybierz miasto, które odwiedziłeś:</label>
                                        <select size="1" name="miasto" id="miasto">
                                            <option value="Kraków" selected>Kraków</option>
                                            <option value="Wrocław">Wrocław</option>
                                            <option value="Toruń">Toruń</option>
                                            <option value="Lublin">Lublin</option>
                                            <option value="Gdańsk">Gdańsk</option>
                                        </select>
                                    </div>
                                                                      
                                    <div class="text-center">
                                        <br/><p class="text-center">Jak oceniasz swój pobyt w tym mieście:</p>
                                        <p class="btn btn-outline-primary"> 
                                          <input type="radio" name="ocena" id="zero" value="0" />0
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="jeden" value="1" />1
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="dwa" value="2" />2
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="trzy" value="3" />3
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="cztery" value="4" />4
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="pięć" value="5" />5
                                        </p>
                                        <p id="ocena_error" style="color:red"></p>
                                    </div>
                                    
                                    <div class="text-center"> 
                                        <br/><p class="text-center">Co oceniasz pozytywnie:</p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Nic" /> Nic 
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Zabytki" /> Zabytki
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Zieleń" /> Zieleń
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Ceny" /> Ceny
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Czystość" /> Czystość
                                        </p>
                                        <p id="pozytywne_error" style="color:red"></p>                                        
                                    </div>
                                    
                                    <div class="text-center">
                                        <br/><p class="text-center">Co oceniasz negatywnie:</p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Nic" /> Nic 
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Zabytki" /> Zabytki
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Zieleń" /> Zieleń
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Ceny" /> Ceny
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Czystość" /> Czystość
                                        </p> 
                                        <p id="negatywne_error" style="color:red"></p>                                         
                                    </div>

                                    
                                    <div class="text-center">
                                        <br /><label for="komentarz">Komentarz:</label>
                                        <textarea class="form-control" id="komentarz" name="komentarz" rows="3"></textarea>
                                        <p id="komentarz_error" style="color:red"></p> 
                                    </div>
                                    
                                    <div class="text-center"> 
                                        <br /><input class="btn btn-outline-success" type="submit" name="edy" id="edy" value="Edytuj" />
                                          <input class="btn btn-outline-danger" type="reset" value="Wyczyść" />
                                    </div> 
                                </form>                                     
                            </div>
                        </div>      
                    </div>

       <?php
    }
    
    
    function wyswFormularz(){
?>
           <section class="py-5">
                <div class="container px-5">
                    
                    <div id="wszystkieFormularze" class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <br/><h2 class="fw-bolder">Tutaj znajdziesz wszystkie opinie!</h2><br/>
                            <form method='post' action='glownyFormularz.php'>
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Zobacz wszystkie" />
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Kraków" />
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Wrocław" />
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Toruń" />
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Lublin" />
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Gdańsk" />
                                <input class="btn btn-primary" type="submit" name="wmiasto" value="Ukryj" /><br/><br/>
                            </form>
                            <?php
                                include_once("klasy/baza.php");
                                $bd = new Baza("localhost", "root", "", "uzytkownicy");
                                if(isset($_REQUEST["wmiasto"])){
                                    $akcja = $_REQUEST["wmiasto"];
                                    switch($akcja){
                                        case "Zobacz wszystkie": echo $bd->select2 ("select Imie,Nazwisko,miasto,pozytywnie,negatywnie,ocena,komentarz from opinie", ["Imie","Nazwisko","miasto","pozytywnie","negatywnie","ocena","komentarz"]); break;
                                        case "Kraków": echo $bd->select2 ("select Imie,Nazwisko,miasto,pozytywnie,negatywnie,ocena,komentarz from opinie where miasto='Kraków'", ["Imie","Nazwisko","miasto","pozytywnie","negatywnie","ocena","komentarz"]); break;
                                        case "Wrocław": echo $bd->select2 ("select Imie,Nazwisko,miasto,pozytywnie,negatywnie,ocena,komentarz from opinie where miasto='Wrocław'", ["Imie","Nazwisko","miasto","pozytywnie","negatywnie","ocena","komentarz"]); break;
                                        case "Toruń": echo $bd->select2 ("select Imie,Nazwisko,miasto,pozytywnie,negatywnie,ocena,komentarz from opinie where miasto='Toruń'", ["Imie","Nazwisko","miasto","pozytywnie","negatywnie","ocena","komentarz"]); break;
                                        case "Lublin": echo $bd->select2 ("select Imie,Nazwisko,miasto,pozytywnie,negatywnie,ocena,komentarz from opinie where miasto='Lublin'", ["Imie","Nazwisko","miasto","pozytywnie","negatywnie","ocena","komentarz"]); break;
                                        case "Gdańsk": echo $bd->select2 ("select Imie,Nazwisko,miasto,pozytywnie,negatywnie,ocena,komentarz from opinie where miasto='Gdańsk'", ["Imie","Nazwisko","miasto","pozytywnie","negatywnie","ocena","komentarz"]); break;
                                        case "Ukryj": echo " ";
                                    }
                                }   
                            ?>  
                            <br/><a href="opinie.php" class = navbar-brand" value="pokazopinie">Zobacz swoje opinie.</a>
                        </div>
                    </div> 
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Podziel się swoją opinią!</h1>
                            <p class="lead fw-normal text-muted mb-0">Opisz miasto, które odwiedziłeś</p>
                        </div>
                        
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form method="post" action="glownyFormularz.php">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="imie" name="imie" type="text" />
                                        <label for="imie">Imię</label>
                                        <p id="imie_error" style="color:red"></p>
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nazwisko" name="nazwisko" type="text" />
                                        <label for="nazwisko">Nazwisko</label>
                                        <p id="nazwisko_error" style="color:red"></p>
                                    </div>                                    
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="text" />
                                        <label for="email">Email</label>
                                        <p id="email_error" style="color:red"></p>
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="numertel" name="Numertel" type="tel" />
                                        <label for="numertel">Numer telefonu</label>
                                        <p id="numertel_error" style="color:red"></p>
                                    </div>

                                    <div class="text-center">
                                        <br/><label for="miasto">Wybierz miasto, które odwiedziłeś:</label>
                                        <select size="1" name="miasto" id="miasto">
                                            <option value="Kraków" selected>Kraków</option>
                                            <option value="Wrocław">Wrocław</option>
                                            <option value="Toruń">Toruń</option>
                                            <option value="Lublin">Lublin</option>
                                            <option value="Gdańsk">Gdańsk</option>
                                        </select>
                                    </div>
                                                                      
                                    <div class="text-center">
                                        <br/><p class="text-center">Jak oceniasz swój pobyt w tym mieście:</p>
                                        <p class="btn btn-outline-primary"> 
                                          <input type="radio" name="ocena" id="zero" value="0" />0
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="jeden" value="1" />1
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="dwa" value="2" />2
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="trzy" value="3" />3
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="cztery" value="4" />4
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input type="radio" name="ocena" id="pięć" value="5" />5
                                        </p>
                                        <p id="ocena_error" style="color:red"></p>
                                    </div>
                                    
                                    <div class="text-center"> 
                                        <br/><p class="text-center">Co oceniasz pozytywnie:</p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Nic" /> Nic 
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Zabytki" /> Zabytki
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Zieleń" /> Zieleń
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Ceny" /> Ceny
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="pozytywnie[]" type="checkbox" value="Czystość" /> Czystość
                                        </p>
                                        <p id="pozytywne_error" style="color:red"></p>                                        
                                    </div>
                                    
                                    <div class="text-center">
                                        <br/><p class="text-center">Co oceniasz negatywnie:</p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Nic" /> Nic 
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Zabytki" /> Zabytki
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Zieleń" /> Zieleń
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Ceny" /> Ceny
                                        </p>
                                        <p class="btn btn-outline-primary">
                                          <input name="negatywnie[]" type="checkbox" value="Czystość" /> Czystość
                                        </p> 
                                        <p id="negatywne_error" style="color:red"></p>                                         
                                    </div>

                                    
                                    <div class="text-center">
                                        <br /><label for="komentarz">Komentarz:</label>
                                        <textarea class="form-control" id="komentarz" name="komentarz" rows="3"></textarea>
                                        <p id="komentarz_error" style="color:red"></p> 
                                    </div>
                                    
                                    <div class="text-center"> 
                                        <br /><input class="btn btn-outline-success" type="submit" name="dod" id="dod" value="Dodaj" />
                                          <input class="btn btn-outline-danger" type="reset" value="Wyczyść" />
                                    </div> 
                                </form>                                     
                            </div>
                        </div>      
                    </div>
                      
                </div>
            </section>         
        <?php             
    }

    function login($db) {
        //funkcja sprawdza poprawność logowania
        //wynik - id użytkownika zalogowanego lub -1
        $args = [
            'login' => FILTER_SANITIZE_ADD_SLASHES,
            'passwd' => FILTER_SANITIZE_ADD_SLASHES
        ];
        //przefiltruj dane z GET (lub z POST) zgodnie z ustawionymi w $args filtrami:
        $dane = filter_input_array(INPUT_POST, $args);
        //sprawdź czy użytkownik o loginie istnieje w tabeli users
        //i czy podane hasło jest poprawne
        $login = $dane["login"];
        $passwd = $dane["passwd"];
        $userId = $db->selectUser($login, $passwd, "uzytkownicy");
        if ($userId >= 0) { 
            //Poprawne dane
            //rozpocznij sesję zalogowanego użytkownika
            //usuń wszystkie wpisy historyczne dla użytkownika o $userId
            //ustaw datę - format("Y-m-d H:i:s");
            //pobierz id sesji i dodaj wpis do tabeli logged_in_users
            session_start();
            $date = new DateTime(); 
            $current_date = $date->format('Y-m-d H:i:s');
            $zapytanie='delete from zalogowani_uzytkownicy where userId="'.$userId.'"';
            $db->delete($zapytanie);
            $zapytanie='insert into zalogowani_uzytkownicy values("'.session_id().'","'.$userId.'","'.$current_date.'")';
            $db->insert($zapytanie);
    
        }
        return $userId;
    }

    function logout($db) {
        session_start();
        //pobierz id bieżącej sesji (pamiętaj o session_start()
        //usuń sesję (łącznie z ciasteczkiem sesyjnym)
        //usuń wpis z id bieżącej sesji z tabeli logged_in_users
        $sessionId=session_id();
        $_SESSION=[];
        if (filter_input( INPUT_COOKIE,session_name() )) {
            setcookie(session_name(), '', time() - 42000, '/');
        }
        session_destroy();

        $zapytanie="delete from zalogowani_uzytkownicy where sessionId='".$sessionId."'";
        $db->delete($zapytanie);       
    }

    function getLoggedInUser($db, $sessionId) {
        //wynik $userId - znaleziono wpis z id sesji w tabeli logged_in_users
        //wynik -1 - nie ma wpisu dla tego id sesji w tabeli logged_in_users
        
        $userId = $db->temp($sessionId, "zalogowani_uzytkownicy");
        
        if($userId > 0)
        {
            return $userId;
        }else{ 
            return -1;
        }
    }
    
    function getUserInOpinion($db, $Id) {
        //wynik $userId - znaleziono wpis z id sesji w tabeli logged_in_users
        //wynik -1 - nie ma wpisu dla tego id sesji w tabeli logged_in_users
        
        $userId = $db->temp2($Id, "opinie");
        
        if($userId > 0)
        {
            return $userId;
        }else{ 
            return -1;
        }
    }

    function edytujOpinie($db, $id){
          $um = new UserManager();
          $args = ['miasto' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
              
                 'ocena' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
              
                 'pozytywnie' => ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                     'flags' => FILTER_REQUIRE_ARRAY],
              
                'negatywnie' => ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                     'flags' => FILTER_REQUIRE_ARRAY],

             ];
             //przefiltruj dane z GET/POST zgodnie z ustawionymi w $args filtrami:
             $dane = filter_input_array(INPUT_POST, $args);
             //pokaż tablicę po przefiltrowaniu - sprawdź wyniki filtrowania:
             //var_dump($dane);
             //Sprawdź czy dane w tablicy $dane nie zawierają błędów walidacji:
             $errors = "";
             foreach ($dane as $key => $val) {
                 if ($val === false or $val === NULL) {
                     if($key === "ocena"){
                         $errors .= "Ocena - nie wybrano oceny.";
                         $errors .= "<br />";
                     }
                     if($key === "pozytywnie"){
                         $errors .= "Ocena pozytywna - przynajmniej jeden przycisk musi być zaznaczony.";
                         $errors .= "<br />";
                     }
                     if($key === "negatywnie"){
                         $errors .= "Ocena negatywna - przynajmniej jeden przycisk musi być zaznaczony.";
                         $errors .= "<br />";
                     }
                 }
             }
             if ($errors === "") {
                 $poz="";
                 $neg="";
                 
                 foreach ($dane as $key => $val) {
                  if($key === "pozytywnie"){
                      $poz .= join(",", $val)." ";
                  }
                 }
                 foreach ($dane as $key => $val) {
                  if($key === "negatywnie"){
                      $neg .= join(",", $val)." ";
                  }
                 }
                $kom = htmlspecialchars(trim($_REQUEST['komentarz']));                
                $db->update("UPDATE opinie SET miasto='".$_REQUEST['miasto']."', pozytywnie='".$poz."', negatywnie='".$neg."', ocena='".$_REQUEST['ocena']."', komentarz='".$kom."' WHERE Id='".$id."'");
                
                echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Pozytywnie edytowano opinie.</h1>
                            <br /><br />
                            <a href="opinie.php" class = navbar-brand" value="Powrót do formularza">Powrót</a>
                        </div>';
             }else{
                 echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Spróbuj ponownie. Nieprawidłowe dane:</h1>';
                 echo $errors;
                 echo '<br /><br />
                            <a href="opinie.php" class = navbar-brand" value="Powrót do formularza">Powrót</a>
                       </div>';
             }
      }
    
    function dodajdoBD($db){
          $um = new UserManager();
          $args = ['imie' => ['filter' => FILTER_VALIDATE_REGEXP,
                   'options' => ['regexp' => '/^[A-ZŁŚŻŃ][a-ząęćśżźó]{1,20}(\s[A-ZŁŚŻŃ][a-ząęćśżźó]{1,20})*$/']],
              
                  'nazwisko' => ['filter' => FILTER_VALIDATE_REGEXP,
                  'options' => ['regexp' => '/^[A-ZŁŚŻŃ][a-ząęćśżźó]{1,20}(-[A-ZŁŚŻŃ][a-ząęćśżźó]{1,20})*$/']],
              
                  'email' => ['filter' => FILTER_VALIDATE_REGEXP,
                    'options' => ['regexp' => '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/']],
              
                  'Numertel' => ['filter' => FILTER_VALIDATE_REGEXP,
                  'options' => ['regexp' => '/[0-9]{9}/']],

                 'miasto' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
              
                 'ocena' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
              
                 'pozytywnie' => ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                     'flags' => FILTER_REQUIRE_ARRAY],
              
                'negatywnie' => ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                     'flags' => FILTER_REQUIRE_ARRAY],

             ];
             //przefiltruj dane z GET/POST zgodnie z ustawionymi w $args filtrami:
             $dane = filter_input_array(INPUT_POST, $args);
             //pokaż tablicę po przefiltrowaniu - sprawdź wyniki filtrowania:
             //var_dump($dane);
             //Sprawdź czy dane w tablicy $dane nie zawierają błędów walidacji:
             $errors = "";
             foreach ($dane as $key => $val) {
                 if ($val === false or $val === NULL) {
                     if($key === "imie"){
                         $errors .= "Imię - powinno rozpoczynać się wielką literą, w przypadku dwóch imion rozdzielić je spacją.";
                         $errors .= "<br />";
                     }
                     if($key === "nazwisko"){
                         $errors .= "Nazwisko - powinno rozpoczynać się wielką literą, w przypadku dwóch nazwisk rozdzielić je myślnikiem.";
                         $errors .= "<br />";
                     }
                     if($key === "email"){
                         $errors .= "Email - przykład poprawnego adresu email: xxx@yyy.zzz.";
                         $errors .= "<br />";
                     }
                     if($key === "Numertel"){
                         $errors .= "Numer telefonu - numer musi składać się z 9 cyfr zapisanych bez odstępu.";
                         $errors .= "<br />";
                     }
                     if($key === "ocena"){
                         $errors .= "Ocena - nie wybrano oceny.";
                         $errors .= "<br />";
                     }
                     if($key === "pozytywnie"){
                         $errors .= "Ocena pozytywna - przynajmniej jeden przycisk musi być zaznaczony.";
                         $errors .= "<br />";
                     }
                     if($key === "negatywnie"){
                         $errors .= "Ocena negatywna - przynajmniej jeden przycisk musi być zaznaczony.";
                         $errors .= "<br />";
                     }
                 }
             }
             if ($errors === "") {
                 $poz="";
                 $neg="";
                 
                 foreach ($dane as $key => $val) {
                  if($key === "pozytywnie"){
                      $poz .= join(",", $val)." ";
                  }
                 }
                 foreach ($dane as $key => $val) {
                  if($key === "negatywnie"){
                      $neg .= join(",", $val)." ";
                  }
                 }
                $kom = htmlspecialchars(trim($_REQUEST['komentarz']));
                session_start();
                $sessionId = session_id();
                $userId = $um->getLoggedInUser($db, $sessionId);
                
                
                $db->insert("INSERT INTO opinie VALUES (NULL,'".$userId."', '".$_REQUEST['imie']."', '".$_REQUEST['nazwisko']."', '".$_REQUEST['email']."', '".$_REQUEST['Numertel']."', '".$_REQUEST['miasto']."', '".$poz."', '".$neg."', '".$_REQUEST['ocena']."', '".$kom."')");
                
                echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Pozytywnie dodano opinie.</h1>
                            <br /><br />
                            <a href="glownyFormularz.php" class = navbar-brand" value="Powrót do formularza">Powrót</a>
                        </div>';
             }else{
                 echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Spróbuj ponownie. Nieprawidłowe dane:</h1>';
                 echo $errors;
                 echo '<br /><br />
                            <a href="glownyFormularz.php" class = navbar-brand" value="Powrót do formularza">Powrót</a>
                       </div>';
             }
      }
      
      function usunietoOpinie(){
          echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Usunięto opinie.</h1>
                            <br /><br />
                            <a href="opinie.php" class = navbar-brand" value="Powrót do formularza">Powrót do opinii</a>
                        </div>';
      }
      
      function nieUsunietoOpinii(){
          echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Usuwanie opinii nie powiodło się.</h1>
                            <br /><br />
                            <a href="opinie.php" class = navbar-brand" value="Powrót do formularza">Powrót do opinii</a>
                        </div>';
      }
      
      function nieEdytowanoOpinii(){
          echo '<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div id="formularz" class="text-center mb-5">
                            <h1 class="fw-bolder">Edytowanie opinii nie powiodło się.</h1>
                            <br /><br />
                            <a href="opinie.php" class = navbar-brand" value="Powrót do formularza">Powrót do opinii</a>
                        </div>';
      }

}

