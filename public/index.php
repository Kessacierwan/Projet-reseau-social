<?php
session_start();

//rooter //
require_once("../Rooter.php");
//DB//
require_once("../Db.php");

//repository//
require_once("../repository/UserRepository.php");
require_once("../repository/PostRepository.php");

//Controllers // 
require_once("../Controller/Controller.php");
require_once("../Controller/AccueilController.php");
require_once("../Controller/RegisterController.php");
require_once("../Controller/LoginController.php");
require_once("../Controller/ProfileViewController.php");
require_once("../Controller/DeletePostController.php");
require_once("../Controller/UpdatePostController.php");
//models// 
require_once("../models/User.php");
require_once("../models/Post.php");




try {
    $app = new Router();
    $app->start();
} catch (PDOException $e) {
    die($e->getMessage());
}
