<?php

class Authentification {

  public function __construct(private IUserRepository $userRepository) { }

  /**
   * @throws \Exception
   */
  public function register(string $email, string $nom, string $prenom, string $password, string $repeat) : bool {
    if($password !== $repeat) {
      throw new \Exception("Les mots de passe ne correspondent pas");
    }
    if($this->userRepository->findUserByEmail($email)) {
      throw new \Exception("Cet e-mail est déjà utilisé");
    }

    $user = new User($email, $nom, $prenom, $password);

    return $this->userRepository->saveUser($user);
  }

  /**
   * @throws \Exception
   */
  public function authenticate(string $email, string $password) : true {
    $user = $this->userRepository->findUserByEmail($email);
    if(!$user) {
      throw new \Exception("E-mail invalide");
    } else if ($password !== $user->getPassword()) {
        throw new \Exception("Mot de passe invalide");
    }
    return true;
  }
}