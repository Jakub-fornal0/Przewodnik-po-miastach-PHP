/* global fetch, Promise */

//Fetch API
document.addEventListener('DOMContentLoaded', () => {
    var p_index = document.getElementById('index');
    p_index.addEventListener("click", () => {
        console.log("Strona głowna.");
        pokazIndex();
    });
   
    var p_galeria = document.getElementById('gal');
    p_galeria.addEventListener("click", () => {
        console.log("Galeria.");
        pokazGaleria();
    });
    
    var p_odleglosci = document.getElementById('odleglosci');
    p_odleglosci.addEventListener("click", () => {
        console.log("Odleglosci.");
        pokazOdleglosci();
    });
    
    var p_formularz = document.getElementById('formularz');
    p_formularz.addEventListener("click", () => {
        console.log("Formularz.");
        pokazFormularz();
    });
    
    var p_rejestracja = document.getElementById('zarejestruj');
    p_rejestracja.addEventListener("click", () => {
        console.log("Rejestracja.");
        pokazRejestracje();
    });
    
    var p_logowanie = document.getElementById('zalogowanie');
    p_logowanie.addEventListener("click", () => {
        console.log("Logowanie.");
        pokazLogowanie();
    });
    
    var p_opinie = document.getElementById('twojeOpinie');
    p_opinie.addEventListener("click", () => {
        console.log("Opinie.");
        pokazTwojeOpinie();
    });

});


function pokazIndex() { 
    fetch("http://localhost/projekt_Jakub_Fornal/glowna.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}

function pokazGaleria() { 
    fetch("http://localhost/projekt_Jakub_Fornal/galeria.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}

function pokazOdleglosci() { 
    fetch("http://localhost/projekt_Jakub_Fornal/odleglosci.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}

function pokazFormularz() { 
    fetch("http://localhost/projekt_Jakub_Fornal/glownyFormularz.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}

function pokazRejestracje() { 
    fetch("http://localhost/projekt_Jakub_Fornal/formularzRejes.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}

function pokazLogowanie() { 
    fetch("http://localhost/projekt_Jakub_Fornal/logowanie.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}

function pokazTwojeOpinie() { 
    fetch("http://localhost/projekt_Jakub_Fornal/twojeOpinie.php")
            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject('Coś poszło nie tak!');
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById('tresc').innerHTML = data;
            })
            .catch((error) => {
                console.log(error);
            });
}
document.addEventListener("DOMContentLoaded", function() {
             //obsługa zdarzenia kliknięcia na b1:
             var but1 = document.getElementById("pokazkrakow");
             but1.addEventListener('click', function(){                
             fetch("dane/krakow.txt")
             .then( response => {return response.text();} )
             .then( dane => { document.getElementById("tresc").innerHTML = dane; });},false);

             var but1 = document.getElementById("pokazwroclaw");
             but1.addEventListener('click', function(){
             fetch("dane/wroclaw.txt")
             .then( response => {return response.text();} )
             .then( dane => { document.getElementById("tresc").innerHTML = dane; });},false);
 
              var but1 = document.getElementById("pokaztorun");
             but1.addEventListener('click', function(){
             fetch("dane/torun.txt")
             .then( response => {return response.text();} )
             .then( dane => { document.getElementById("tresc").innerHTML = dane; });},false);
 
              var but1 = document.getElementById("pokazlublin");
             but1.addEventListener('click', function(){
             fetch("dane/lublin.txt")
             .then( response => {return response.text();} )
             .then( dane => { document.getElementById("tresc").innerHTML = dane; });},false);
 
              var but1 = document.getElementById("pokazgdansk");
             but1.addEventListener('click', function(){
             fetch("dane/gdansk.txt")
             .then( response => {return response.text();} )
             .then( dane => { document.getElementById("tresc").innerHTML = dane; });},false);
});

            function showLocation(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var wspolrzedne = document.getElementById("geo");
                var wynik = latitude+", "+longitude;
                wspolrzedne.value = wynik;
                
                var szerKra = 50.0341;
                var dlKra = 19.5611;
                var obliczenia = Math.sqrt((szerKra-latitude)*(szerKra-latitude)+(dlKra-longitude)*(dlKra-longitude))*73;
                var wynikKrakow = obliczenia.toFixed(2)+" km";
                var odlKrakow = document.getElementById("odlkrakow");
                odlKrakow.value = wynikKrakow;
                
                var szerWro = 51.1;
                var dlWro = 17.0333;
                var obliczenia = Math.sqrt((szerWro-latitude)*(szerWro-latitude)+(dlWro-longitude)*(dlWro-longitude))*73;
                var wynikWroclaw = obliczenia.toFixed(2)+" km";
                var odlWroclaw = document.getElementById("odlwroclaw");
                odlWroclaw.value = wynikWroclaw;
                
                var szerTor = 53.02;
                var dlTor = 18.36;
                var obliczenia = Math.sqrt((szerTor-latitude)*(szerTor-latitude)+(dlTor-longitude)*(dlTor-longitude))*73;
                var wynikTorun = obliczenia.toFixed(2)+" km";
                var odlTorun = document.getElementById("odltorun");
                odlTorun.value = wynikTorun;
                
                var szerLub = 51.2475;
                var dlLub = 22.5728;
                var obliczenia = Math.sqrt((szerLub-latitude)*(szerLub-latitude)+(dlLub-longitude)*(dlLub-longitude))*73;
                var wynikLublin = obliczenia.toFixed(2)+" km";
                var odlLublin = document.getElementById("odllublin");
                odlLublin.value = wynikLublin;
                
                var szerGda = 54.35;
                var dlGda = 18.6667;
                var obliczenia = Math.sqrt((szerGda-latitude)*(szerGda-latitude)+(dlGda-longitude)*(dlGda-longitude))*73;
                var wynikGdansk = obliczenia.toFixed(2)+" km";
                var odlGdansk = document.getElementById("odlgdansk");
                odlGdansk.value = wynikGdansk;     
                
                var wspolrzedne = new google.maps.LatLng(latitude,longitude);
                var opcjeMapy = {
                 zoom: 10,
                 center: wspolrzedne,
                 mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var mapa = new
                 google.maps.Map(document.getElementById("mapka"),
                opcjeMapy);
            }
            
            function errorHandler(error) {
                var output = document.getElementById("geo");
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        output.innerHTML = "Użytkownik nie udostępnił danych.";
                        break;
                    case error.POSITION_UNAVAILABLE:
                        output.innerHTML = "Dane lokalizacyjne niedostępne.";
                        break;
                    case error.TIMEOUT:
                        output.innerHTML = "Przekroczono czas żądania.";
                        break;
                    case error.UNKNOWN_ERROR:
                        output.innerHTML = "Wystąpił nieznany błąd.";
                        break;
                }
            }
            
            function getLocation() {        
                if (navigator.geolocation) {
                    var options = {timeout: 60000};
                    navigator.geolocation.getCurrentPosition(
                    showLocation,
                    errorHandler,
                    options);
                } else { alert("Twoja przeglądarka nie wspiera geolokalizacji!");}
            }