<?php $class = 'page__documentation'; ?>
<?php include 'header.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<section id="content" class="content">
    <div class="wrapper">
        <div class="row">
            <div class="col-8">

                <?php include 'documentation/grid/grid.php'; ?>
                <?php include 'documentation/button/button.php'; ?>
                <?php include 'documentation/sizing/sizing.php'; ?>
                <?php include 'documentation/dropdown/dropdown.php'; ?>
                <?php include 'documentation/scroll/scroll.php'; ?>
                <?php include 'documentation/modal/modal.php'; ?>
                <?php include 'documentation/mixins/mixins.php'; ?>
                <?php include 'documentation/media-queries/media-queries.php'; ?>

            </div>

            <div class="col-4">
                <?php include 'documentation/documentation-menu.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>