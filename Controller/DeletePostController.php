<?php
class DeletePostController extends Controller
{

    public function index()
    {
Post::deletePost($_POST['delete']);
header('Location: /ProfileView');
}
}

?>