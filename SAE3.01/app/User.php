<?php
class User {
    public function __construct(private string $email, private string $nom, private string $prenom, private string $password) { }
    public function getEmail() : string { return $this->email; }
    public function getPassword() : string { return $this->password; }
    public function getNom() : string { return $this->nom; }
    public function getPrenom() : string { return $this->prenom; }
}