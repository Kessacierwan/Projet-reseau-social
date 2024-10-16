<?php

class PostRepository extends Db
{

    private static function request($request)
    {
        $result = self::getInstance()->query($request);
        self::disconnect();
        return $result;
    }


    public static function getPost()
    {
        return self::request("SELECT * from post")->fetchAll((PDO::FETCH_ASSOC));
    }

    public static function createPost(Post $post)
    {
        $title = $post->gettitle();
        $content = $post->getContent();
        $userId = $_SESSION["userId"];
        return self::request("INSERT INTO post (title, content, userId) VALUES ('$title', '$content', '$userId') ")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deletePost($id)
    {
        return self::request("DELETE from post WHERE id='$id' ")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function updatePost($title, $content){
return self::request("UPDATE post SET title='$title' AND content='$content' ")->fetchAll(PDO::FETCH_ASSOC);

    }
}
