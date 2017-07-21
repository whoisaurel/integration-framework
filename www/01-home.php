<?php $class = 'page__home'; ?>
<?php include 'header.php'; ?>

    <section id="content" class="content">
        <div class="row">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-4">
                    <?php include 'blocks/article.php'; ?>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <aside class="sidebar" id="sidebar" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">

    </aside>

<?php include 'footer.php'; ?>