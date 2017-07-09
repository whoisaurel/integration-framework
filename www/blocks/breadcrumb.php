<div itemprop="breadcrumb">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">

        <?php for ($i = 0; $i < 3; $i++) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<?php // URL ?>">
                    <span itemprop="name">Books</span>
                    <img itemprop="image" src="<?php // URL img ?>" width="" height="" alt=""/>
                </a>
                <meta itemprop="position" content="<?php echo $i + 1 ?>"/>
            </li>
        <?php endfor ?>

    </ol>
</div>