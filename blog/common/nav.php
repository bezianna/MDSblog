<header>
    <div class="logo">
        <h1 class="logo-text"><span>MDS</span>Blog</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    
    <nav>
        <ul class="nav">
            <li><a href="<?=Url::GetBaseUrl()?>">Home</a></li>
            <?php if(isset($_COOKIE["UserID"])): ?>
                <li><a href="<?=Url::GetBaseUrl()?>?page=profile">Profile</a></li>
            <?php endif; ?>        

            <?php if(!isset($_COOKIE["UserID"])): ?>
                <li><a href="<?=Url::GetBaseUrl()?>?page=login">Login</a></li>
            <?php endif; ?>

            <?php if(isset($_COOKIE["UserID"]) && $_COOKIE["RegType"] == 1): ?>
                <li><a href="<?=Url::GetBaseUrl()?>?page=article">New Article</a></li>
            <?php endif; ?>

            <?php if(isset($_COOKIE["UserID"]) && $_COOKIE["RegType"] == 1): ?>
                <li><a href="<?=Url::GetBaseUrl()?>?page=admin_articles">Articles Admin</a></li>
            <?php endif; ?>

            <?php if(!isset($_COOKIE["UserID"])): ?>
                <li><a href="<?=Url::GetBaseUrl()?>?page=registration">Registration</a></li>
            <?php endif; ?>

            <?php if(isset($_COOKIE["UserID"])): ?>
                <li><a href="<?=Url::GetBaseUrl()?>?logout=1">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>