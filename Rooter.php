<?php
// ICI OK // 
class Router
{
    public function start()
    {
        $uri = $_SERVER["REQUEST_URI"];
        if ($uri !== "/") {
            $controller = ucfirst(explode("/", $uri)[1]) ."Controller";
            if(class_exists($controller)){
                $controllerObject = new $controller();
                if(method_exists($controllerObject, "index")){
                    $controllerObject -> index();
                }else {
                    throw new Exception("pas de méthode index dans ce controller",1);
                }

            }else {
                throw new Exception("ce controller n'existe pas",1);
            }
            
        } else {
            $controllerObject = new AccueilController();
            $controllerObject->index();
        }
    }
}

?>