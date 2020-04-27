<?php

    $articleController = new ArticleController();
    $articles = $articleController->Search();

    $display = isset($_POST["delete_article"]) ? "block" : "none";

    if(isset($_POST["article_delete"])) {
        $articleHandler = new Articles();
        try {
            if($articleHandler->DeleteArticle($_POST["article_id"])) {
                echo "<h3>Successfully deleted!</h3>";
            }
        } catch (Exception $ex) {
            echo "<h3>{$ex->getMessage()}</h3>";
        }
    }
?>

<div class="admin-content">

    <form method="POST" style="display:<?=$display?>;">
        <h3>Are you sure, that you want to delete this article?</h3>

        <button name="article_delete" class="btn delete-btn">Yes</button>
        <button class="btn">No</button>

        <input type="hidden" name="article_id" value="<?=$_POST['article_id']?>">

    </form>

    <div class="content">
        <table>

        <thead>
            <th>Delete</th>
            <th>Title</th>
            <th>Author</th>
            <th>Open</th>
        </thead>
        <tbody>
            <?php foreach($articles as $article): ?>
                <tr>
                    <td>
                        <form method="POST">
                            <button class="btn delete-btn" name="delete_article">Delete</button>

                            <input type="hidden" name="article_id" value="<?=$article["ArticleID"]?>">
                        </form>
                    </td>
                    <td>
                        <h3><?=$article["Title"]?></h3>
                    </td>

                    <td>
                        <h3><?=$article["UserName"]?></h3>
                    </td>
                    
                    <td>
                        <a style="float:right;" href="<?=Url::GetBaseUrl()?>?page=article&articleID=<?=$article["ArticleID"]?>">Open</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>