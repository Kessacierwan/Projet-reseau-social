<?php
// CONNEXION OK // 
class Db
{

    private static $instance;
    protected static function getInstance()
    {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO("mysql:host=localhost;dbname=reseausocialtraining", "root", "");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "connexion a la database réussie";
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$instance;
    }

    protected static function disconnect()
    {
        self::$instance = null;
    }
}
