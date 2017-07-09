<h3 id="dropdown" class="h3">Dropdown</h3>
<div class="example">
    <div class="dropdown">
        <button onclick="myDropdown()" class="btn btn-medium btn-dropdown">Dropdown</button>
        <div id="myDropdown" class="dropdown__content">
            <?php for ($i = 0; $i < 4; ++$i): ?>
                <a href="#">Link <?php echo $i + 1; ?></a>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'dropdown-example.php'; ?></code></pre>
</div>