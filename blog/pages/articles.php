<?php  
    $articleController = new ArticleController();
    $articles = $articleController->PublicSearch();
?>

<div class="content">
    <h1>Articles</h1>
    <?php foreach($articles as $article): ?>
            <div class="article">
                <h3><?=$article["Title"]?></h3>
                <?=$article["ShortDesc"]?>
                    <br/>
                <a style="float:right;" href="<?=Url::GetBaseUrl()?>?page=public_article&articleID=<?=$article["ArticleID"]?>">Open</a>
            </div>
        <?php endforeach; ?>
</div>