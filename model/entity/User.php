<?php 

class User {
    protected int $id;
    protected string $firstname;
    protected string $lastname; 
    protected string $email; 
    protected string $password;
    protected string $adress;
    protected string $city; 
    protected int $postal_code;


    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setAdress(string $adress) {
        $this->adress = $adress;
    }

    public function getAdress(){
        return $this->adress;
    }

    public function setCity(string $city) {
        $this->city = $city;
    }

    public function getCity(){
        return $this->city;
    } 

    public function setPostalCode(int $postal_code) {
        $this->postal_code = $postal_code;
    }

    public function getPostalCode(){
        return $this->postal_code;
    }
}