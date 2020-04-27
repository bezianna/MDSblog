<?php  
    $articleController = new ArticleController();
    $articles = $articleController->PublicSearch();
?>

<div class="page-wrapper">
    <div class="content">
        <div class="main-content">
            <h1 class="recent-post-title">Recent Posts</h1>

            <!--blog post start-->
            <?php foreach($articles as $article): ?>
                <div class="post clearfix">
                    <div class="post-preview">
                    <h2><a href="<?=Url::GetBaseUrl()?>?page=public_article&articleID=<?=$article["ArticleID"]?>"><?=$article["Title"]?></a></h2>
                        <i class="far fa-user"><?=$article["UserName"]?></i>
                                &nbsp;
                        <i class="far calendar"><?=$article["CreationDate"]?></i>
                        <p class="preview-text">
                            <?=$article["ShortDesc"]?>                       
                        </p>       
                        <a href="<?=Url::GetBaseUrl()?>?page=public_article&articleID=<?=$article["ArticleID"]?>" class="btn read-more">Read More</a>                 
                    </div>
                </div>
            <?php endforeach; ?>
            <!--blog post end-->

        </div>
    </div>
</div>