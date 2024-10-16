<?php


class ProfileViewController extends Controller
{
    public function index()
    {

        if (!isset($_SESSION["username"])) {
            header('Location: /login');

        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST["envoyerPost"])){
          $post = new Post(0, $_POST['title'], $_POST['content'], $_SESSION['userId']);
            Post::createPost($post);
header('location: /ProfileView');
            }


            // if (isset())

  
        }

        //tableau des post // 
       
            $postDb = post::getPost();
            $posts = [];
            foreach ($postDb as $post) {
                $objectPost = new Post($post["id"], $post["title"], $post["content"], $post["userId"]);
                array_push($posts, $objectPost);
            }

     

        require_once(__DIR__ . '/../views/ProfileView.php');
    }
}
