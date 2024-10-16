<?php

class AccueilController extends Controller
{
    public function index()
    {
        if (isset($_SESSION["connexion2"])) {
            require_once(__DIR__ . '/../views/Connexion.php');
        } 
        else if (isset($_SESSION["inscription2"])) {
            require_once(__DIR__ . '/../views/Inscription.php');
        } 
        else {
            require_once(__DIR__ . '/../views/Accueil.php');
        }
    }
}
    