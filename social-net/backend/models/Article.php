<?php

namespace app\backend\models;

use app\backend\controllers\AuthController;
use app\backend\services\Db;

class Article
{
    private $id;
    private $authorId;
    private $title;
    private $text;
    private $date;

    public function __construct($authorId = null, $title = null, $text = null)
    {
        $this->authorId = $authorId;
        $this->title = $title;
        $this->text = $text;
        $this->date = time();
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    public function setArticle()
    {
        (new Db())->getConn()->query("INSERT INTO articles (authorId, title, text, date) 
VALUES ('$this->authorId', '$this->title', '$this->text', '$this->date')");
    }

    public function getArticleByUserId($userId)
    {
        return (new Db())->getConn()->query("SELECT * FROM articles WHERE authorId = '$userId'")->fetch_object();
    }

    public static function getArrayArticlesByUserId($userId)
    {
        $articles = [];

        $user = User::getUserById($userId);

        $rows = (new Db())->getConn()->query("SELECT * FROM articles WHERE authorId = '$userId'")->fetch_all();

        foreach ($rows as $row) {
            $row[4] = date('d.m.y', $row[4]);
            $user = User::getUserById($row[1]);
            array_push($row, $user->login);
            array_push($articles, $row);
        }

        return $articles;
    }

    public static function delArticle($id)
    {
        (new Db())->getConn()->query("DELETE FROM articles WHERE id = '$id'");
    }

    public static function getAllArticles()
    {
        $articles = [];

        $rows = (new Db())->getConn()->query("SELECT * FROM articles")->fetch_all();

        foreach ($rows as $row) {
            $row[4] = date('d.m.y', $row[4]);
            $user = User::getUserById($row[1]);
            array_push($row, $user->login);
            array_push($articles, $row);
        }

        return $articles;
    }

    public static function delArticlesByUserId($userId)
    {
        (new Db())->getConn()->query("DELETE FROM articles WHERE authorId = '$userId'");
    }
}