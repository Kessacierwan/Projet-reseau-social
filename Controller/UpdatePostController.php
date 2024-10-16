<?php
class UpdatePostController extends Controller{

    public function index(){
Post::updatePost($_POST["title"],$_POST["content"]);
        header('Location: /ProfileView');


    }
}


?>