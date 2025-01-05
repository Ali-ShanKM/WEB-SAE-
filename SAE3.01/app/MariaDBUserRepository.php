<?php

require_once 'IUserRepository.php';
require_once 'User.php';

class MariaDBUserRepository implements IUserRepository {

  public function __construct(private \PDO $dbConnexion) { }

  public function saveUser(User $user) : bool {
    $stmt = $this->dbConnexion->prepare(
      "INSERT INTO utilisateur (email, password) VALUES (:email, :password)"
    );

    return $stmt->execute([
                            'email' => $user->getEmail(),
                            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
                          ]);
  }

  public function findUserByEmail(string $email) : ?User {
    $stmt = $this->dbConnexion->prepare(
      "SELECT * FROM utilisateur WHERE email = :email"
    );
    $stmt->execute(['email' => $email]);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);

    if($result) {
      return new User($result['email'], $result['password']);
    }
    return null;
  }
}