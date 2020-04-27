<?php
    if(isset($_POST["set_article"])) {
        $articles = new Articles(
            $_POST["article_title"],
            $_POST["short_desc"],
            $_POST["article_text"],
        );

            $articles->SetArticle();
    }

    if(isset($_POST["update_article"])) {
        $articles = new Articles(
            $_POST["article_title"],
            $_POST["short_desc"],
            $_POST["article_text"],
            $_GET["articleID"]
        );

        $articles->UpdateArticle();
    }

    $articleController = new ArticleController;
    $articleData = $articleController->GetArticleByID();

?>

<div class="admin-content">
    <div class="content">
        <h1>Upload Article</h1>    

        <form method="POST">
            <h3>Title</h3>
            <input type="text" name="article_title" class="text-input"
            value="<?=isset($articleData["Title"]) ? $articleData["Title"] : ""?>"
            placeholder ="Title">

            <h3>Short Description</h3>
            <input type="text" name="short_desc" class="text-input"
            value="<?=isset($articleData["ShortDesc"]) ? $articleData["ShortDesc"] : ""?>">

            <h3>Article Text</h3>
            <style>
                .ck-editor__editable_inline {
                    min-height: 400px;
                }
            </style>
            <textarea name="article_text" rows="20" cols="60" id="body" 
            placeholder="Text"><?=isset($articleData["Content"]) ? $articleData["Content"] : ""?></textarea>

            <?php if(!isset($_GET["articleID"])): ?>
            <button name="set_article" class="btn btn-big">Upload</button>
            <?php else: ?>
            <button name="update_article" class="btn btn-big">Overwrite</button>
            <?php endif; ?>

        </form>

    </div>
</div>
