<?php

class UserRepository extends Db
{

    private static function request($request)
    {
        $result = self::getInstance()->query($request);
        self::disconnect();
        return $result;
    }

    public static function Inscription(User $user)  
    {
        if (isset($_POST["Envoyer"])) {
            if (isset($_POST["nom"], $_POST["password"])) {
                $nom = $_POST["nom"];
                // $prenom = $_POST["prenom"];
                $password = $_POST["password"];


                return self::request("INSERT INTO user (nom, MDP) VALUES('$nom','$password')")->fetchAll(PDO::FETCH_ASSOC);

            }
        }
    }

    public static function Connexion(User $user)
    {
        if (isset($_POST["Connexion"])) {
            $userName = $user->getNom();
            $userPassword = $user->getPassword();
    
            try {
                $stmt = self::request("SELECT * FROM user WHERE nom='$userName' AND MDP='$userPassword' ");
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if ($result) {
                    $userId=$result['Id'];
                    $_SESSION['username'] = $userName;
                    $_SESSION["userId"] = $userId;
                } else {
                    // Afficher un message d'erreur si l'utilisateur n'existe pas
                    echo "Erreur : utilisateur inexistant";
                }
    
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


          
        }
