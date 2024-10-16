<?php

class RegisterController extends Controller
{
    public function index()
    {
        if (isset($_POST["Envoyer"])) {
            if (isset($_POST["nom"], $_POST["password"])) {
                $user = new User(0,$_POST["nom"], password_hash($_POST["password"],PASSWORD_DEFAULT));
                UserRepository::Inscription($user);
                require("../views/Connexion.php");
            }
        }else {
                    require_once("../views/Inscription.php");

        }
    }
}
