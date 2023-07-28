<?php

// Les classes PHP doivent vivrent dans les "namespace", ce qui évite les collisions de nommage
namespace SoundCloudApp\Providers;

use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\DBAL\Connection;

/*
    UserProviderInterface est un fichier fourni par Symfony
    qui définit de manière très stricte les fonctions que cette
    classe doit comporter, afin d'être compatible avec
    la fonctionnalité d'authentication Symfony.
*/
class UserProvider implements UserProviderInterface
{
    private $conn;

    public function __construct(Connection $conn)
    {
        // Une référence à $app['db'], notre connexion BDD
        $this->conn = $conn;
    }

    // Cette fonction charge un utilisateur depuis la BDD
    private function loadUser($username)
    {
        $query = $this->conn->createQueryBuilder()
        ->select('*')
        ->from('users')
        ->where('username = :username')
        ->setParameter(':username', $username)
        ->execute();

        return $query->fetch();
    }

    // Cette fonction vérifie si l'utilisateur existe en BDD
    public function usernameExists($username)
    {
        $loadedUser = $this->loadUser($username);

        if (false === $loadedUser) {
            return false;
        }

        return true;
    }

    // Cette fonction crée un nouvel utilisateur en BDD
    public function register($username, $password)
    {
        $query = $this->conn->createQueryBuilder()
        ->insert('users')
        ->values(
            array(
                'username' => ':username',
                'password' => ':password',
                'roles' => ':ROLE_USER'
            )
        )
        ->setParameters(array(
            ':username' => strtolower($username),
            ':password' => $password,
            ':ROLE_USER' => 'ROLE_USER',
        ));

        try {
            $query->execute();
        } catch (AuthenticationException $e) {
            echo sprintf('Error creating user "%s"', $username);
        }

        $user = $this->loadUserByUsername($username);

        return $user;
    }

    /*
        Cette fonction est une des fonctions obligatoires de l'interface,
        elle doit retourner une instance User qui conforme au UserInterface de Symfony.

        Nous nous occupons de comment préparer cette instance. Une fois que nous
        le return, Silex s'occupe automatiquement de la stocker en session,
        de gérer les droits de sécurité, etc. C'est pratique !
    */
    public function loadUserByUsername($username)
    {
        // On utilise notre propre fonction privée.
        $loadedUser = $this->loadUser($username);

        if (false === $loadedUser) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        $enabled = true;
        $userNonExpired = true;
        $credentialsNonExpired = true;
        $userNonLocked = true;

        // On crée un nouvel utilisateur
        $user = new User(
            $loadedUser['username'],
            $loadedUser['password'],
            explode(',', $loadedUser['roles']),
            $enabled,
            $userNonExpired,
            $credentialsNonExpired,
            $userNonLocked
        );

        return $user;
    }

    // Cette fonction est une autre fonction obligatoire de l'interface.
    // Suivons l'exemple dans les docs en-ligne ou bien en local dans
    // le dossier /vendor pour comprendre ce qu'il faut retourner.
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    // Cette fonction est une autre fonction obligatoire de l'interface.
    // Suivons l'exemple dans les docs en-ligne ou bien en local dans
    // le dossier /vendor pour comprendre ce qu'il faut retourner.
    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }

}
