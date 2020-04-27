<?php 

    class ArticleController extends Conn {
        public function GetArticleByID() {
            $row = [];

            if(isset($_GET["articleID"]) && is_numeric($_GET["articleID"])) {
                $stmt = $this->conn->prepare("SELECT articles.*, login.UserName 
                FROM articles
                INNER JOIN login
                ON articles.UserID = login.UserID
                WHERE ArticleID = ?");
                $stmt->execute([$_GET["articleID"]]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }

            return $row;
        }

        public function Search() {
            $stmt = $this->conn->prepare("SELECT articles.*,
            login.UserName, login.Email
            FROM articles
            INNER JOIN login
            ON articles.UserID = login.UserID
            WHERE articles.UserID = ?
            ORDER BY CreationDate DESC");
            $stmt->execute([$_COOKIE["UserID"]]);

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }

        public function PublicSearch() {
            $stmt = $this->conn->query("SELECT articles.*,
                login.UserName, login.Email
                FROM articles
                INNER JOIN login
                ON articles.UserID = login.UserID ORDER BY CreationDate DESC"
            );

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }

        public function GetCommentsByArticleID() {
            $row = [];

            if(isset($_GET["articleID"]) && is_numeric($_GET["articleID"])) {
                $stmt = $this->conn->prepare("SELECT comments.*, login.UserName
                FROM comments
                INNER JOIN login
                ON comments.UserID = login.UserID
                AND comments.ArticleID = ? ORDER BY CommentDate DESC");

                $stmt->execute([$_GET["articleID"]]);
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $row;
        }
    }
?>