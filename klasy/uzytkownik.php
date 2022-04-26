<?php

class Uzytkownik {
    protected $userName;
    protected $passwd;
    protected $fullName;
    protected $email;
    protected $date;
   
    function __construct($userName, $fullName, $email, $passwd) {
        $this->userName = $userName;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->passwd = password_hash($passwd, PASSWORD_DEFAULT);   
        $this->date = new DateTime();
    }
    
    
    Public function show() {
        echo $this->userName." ";
        //echo $this->passwd." ";
        echo $this->fullName." ";
        echo $this->email." ";
        echo $this->date->format('Y-m-d')." ";
        echo"<br/>";
    }
    
    public function getUserName() {
        return $this->userName;
    }

    public function getPasswd() {
        return $this->passwd;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDate(): DateTime {
        return $this->date;
    }

    public function setUserName($userName): void {
        $this->userName = $userName;
    }

    public function setPasswd($passwd): void {
        $this->passwd = $passwd;
    }

    public function setFullName($fullName): void {
        $this->fullName = $fullName;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setDate(DateTime $date): void {
        $this->date = $date;
    }

    function saveDB($bd){ 
        $bd->insert("INSERT INTO uzytkownicy VALUES (NULL,'".$this->userName."', '".$this->fullName."', '".$this->email."', '".$this->passwd."', '".$this->date->format('Y-m-d')."')");
    }
}