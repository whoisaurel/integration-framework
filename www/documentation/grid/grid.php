<h2 id="grid-float" class="h2">Grid system <span>with float</span></h2>
<h3 id="equal-width" class="h3">Equal-width</h3>
<div class="example">
    <div class="row">
        <?php for ($i = 0; $i < 2; ++$i): ?>
            <div class="col-6">
                <?php echo $i + 1; ?> of 2
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php for ($i = 0; $i < 3; ++$i): ?>
            <div class="col-4">
                <?php echo $i + 1; ?> of 3
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php for ($i = 0; $i < 4; ++$i): ?>
            <div class="col-3">
                <?php echo $i + 1; ?> of 4
            </div>
        <?php endfor; ?>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'equal-width.php'; ?></code></pre>
</div>
<div class="">
    <h3 id="setting-one-column-width" class="h3">Setting one column width</h3>
    <div class="example">
        <div class="row">
            <div class="col-3">
                1 of 3
            </div>
            <div class="col-3">
                2 of 3
            </div>
            <div class="col-6">
                3 of 3
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                1 of 3
            </div>
            <div class="col-4">
                2 of 3
            </div>
            <div class="col-6">
                3 of 3
            </div>
        </div>
    </div>
    <div class="highlight">
        <pre><code class="code xml"><?php include 'setting-one-column-width.php'; ?></code></pre>
    </div>
</div>

<h2 id="grid-flexbox" class="h2">Grid system <span>with flexbox (> ie10)</span></h2>
<h3 id="same-height" class="h3">Same height</h3>
<div class="example align">
    <div class="row">
        <div class="flex align-items-height">
            <?php for ($i = 0; $i < 4; ++$i): ?>
                <div class="col-3"><?php echo $i + 1; ?> of 4</div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'same-height.php'; ?></code></pre>
</div>
<h3 id="vertical-alignment" class="h3">Vertical alignment</h3>
<div class="example align">
    <div class="row">
        <div class="flex align-items-start">
            <?php for ($i = 0; $i < 3; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 3</div>
            <?php endfor; ?>
        </div>
        <div class="flex align-items-center">
            <?php for ($i = 0; $i < 3; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 3</div>
            <?php endfor; ?>
        </div>
        <div class="flex align-items-end">
            <?php for ($i = 0; $i < 3; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 3</div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'ventical-alignment.php'; ?></code></pre>
</div>

<h3 id="horizontal-alignment" class="h3">Horizontal alignment</h3>
<div class="example">
    <div class="row">
        <div class="flex justify-content-start">
            <?php for ($i = 0; $i < 2; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 2</div>
            <?php endfor; ?>
        </div>
        <div class="flex justify-content-center">
            <?php for ($i = 0; $i < 2; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 2</div>
            <?php endfor; ?>
        </div>
        <div class="flex justify-content-end">
            <?php for ($i = 0; $i < 2; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 2</div>
            <?php endfor; ?>
        </div>
        <div class="flex justify-content-around">
            <?php for ($i = 0; $i < 2; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 2</div>
            <?php endfor; ?>
        </div>
        <div class="flex justify-content-between">
            <?php for ($i = 0; $i < 2; ++$i): ?>
                <div class="col-4"><?php echo $i + 1; ?> of 2</div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'horizontal-alignment.php'; ?></code></pre>
</div>

<h3 id="alignment" class="h3">Alignment</h3>
<div class="example">
    <div class="media">
        <img class="d-flex align-self-start" src="assets/img/media.svg" width="64" height="64" alt="">
        <div class="media__body">
            <h5>Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.</p>
            <p>Donec sed odio dui.</p>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'media/start.php'; ?></code></pre>
</div>

<div class="example">
    <div class="media">
        <img class="d-flex align-self-center" src="assets/img/media.svg" width="64" height="64" alt="">
        <div class="media__body">
            <h5>Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.</p>
            <p>Donec sed odio dui.</p>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'media/center.php'; ?></code></pre>
</div>

<div class="example">
    <div class="media">
        <img class="d-flex align-self-end" src="assets/img/media.svg" width="64" height="64" alt="">
        <div class="media__body">
            <h5>Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.</p>
            <p>Donec sed odio dui.</p>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'media/end.php'; ?></code></pre>
</div>