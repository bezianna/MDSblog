<?php

    $articleController = new ArticleController;
    $article = $articleController->GetArticleByID();    

    if(isset($_POST["send_comment"]) && isset($_GET["articleID"])) {
        $articles = new Articles();
        $articles->comment($_POST["comment"], $_GET["articleID"]);
    }

    $comments = $articleController->GetCommentsByArticleID();
?>

<div class="content clearfix">

    <div class="main-content single">

        <div class="post-content">

            <?php if(isset($_GET["articleID"]) && is_numeric($_GET["articleID"])): ?>
                <h1><?=isset($article["Title"]) ? $article["Title"] : ""?></h1>

                <strong>
                    <?=isset($article["ShortDesc"]) ? $article["ShortDesc"] : ""?>
                </strong>

                <p>
                    <?=isset($article["Content"]) ? $article["Content"] : ""?>

                        <br/>
                    <strong>
                        Author:  <?=isset($article["UserName"]) ? $article["UserName"] : ""?>
                            <br/>
                    </strong>
                    <strong>
                        Date:  <?=isset($article["CreationDate"]) ? $article["CreationDate"] : ""?>
                            <br/>
                    </strong> 
                    <strong>       
                        Last modified:  <?=isset($article["LastModified"]) ? $article["LastModified"] : ""?>
                    </strong>    
                </p>

                <p>
                    <?php if(isset($_COOKIE["UserID"])): ?>
                    <h3>Write a comment!</h3>
                    <form method="POST">
                        <textarea cols="40" rows="10" name="comment" class="text-input" placeholder="Write a comment here!"></textarea>
                            <br/>
                        <button name="send_comment" class="btn">Send</button>
                    </form>
                    <?php else: ?>
                    <h3 style="color:red;">You must sign in to comment!</h3>
                    <?php endif; ?>
                </p>

                <p>
                    <h3>Comments</h3>

                    <?php foreach($comments as $comment): ?>
                        <div class="comment">
                            <h3><?=$comment["UserName"]?> Respond:</h3>
                            <p>
                                <?=$comment["CommentText"]?>
                            </p>

                            <strong> <small>Date: <?=$comment["CommentDate"]?></small> </strong>
                        </div>
                    <?php endforeach; ?>
                </p>

            <?php else: ?>
                <h1>This article identification is incorrect!</h1>
            <?php endif; ?>
        </div>
    </div>

</div>
