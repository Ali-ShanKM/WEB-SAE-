<?php

require_once 'IUserRepository.php';
require_once 'User.php';

class MariaDBUserRepository implements IUserRepository {

  public function __construct(private \PDO $dbConnexion) { }

  public function saveUser(User $user) : bool {
    $stmt = $this->dbConnexion->prepare(
      "INSERT INTO utilisateurs (email, nom, prenom, password) VALUES (:email, :nom, :prenom, :password)"
    );

    return $stmt->execute([
                            'email' => $user->getEmail(),
                            'nom' => $user->getNom(),
                            'prenom' => $user->getPrenom(),
                            //'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
                            'password' => $user->getPassword()
                          ]);
  }

  public function findUserByEmail(string $email) : ?User {
    $stmt = $this->dbConnexion->prepare(
      "SELECT * FROM utilisateurs WHERE email = :email"
    );
    $stmt->execute(['email' => $email]);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);

    if($result) {
      return new User($result['email'], $result['nom'], $result['prenom'], $result['password']);
    }
    return null;
  }
}