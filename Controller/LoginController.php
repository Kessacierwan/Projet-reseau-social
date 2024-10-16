<?php
// OK
class LoginController extends Controller
{


    public function index()
    {
        if (isset($_POST["Connexion"])) {
        $user = new User (0,$_POST["nom"],$_POST["password"]);
        
             UserRepository::Connexion($user);
          
            if ($user){
                echo "connexion reussie";
               header('Location: /ProfileView');
            } else {
                "erreur de connexion";
            }
        }
        else {
                    require_once(__DIR__ . '/../views/Connexion.php');

        }
    }
}
