<h2 id="mixins" class="h2">Mixins</h2>

<h3 id="mixin-bourbon" class="h3">Read bourbon doc for all mixin.</h3>
<a href="http://bourbon.io/docs/">Bourbon documentation</a>

<h3 id="mixin-transition" class="h3">Mixin transition</h3>
<div class="example">
    @include transition (all .2s ease-in-out);
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-transition.php'; ?></code></pre>
</div>

<h3 id="mixin-border-radius" class="h3">Mixin border radius</h3>
<div class="example">
    @include border-radius(50%);<br/>
    @include border-radius(10px 5px 5px 15px);<br/>
    @include border-radius(10px);
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-border-radius.php'; ?></code></pre>
</div>

<h3 id="mixin-box-shadow" class="h3">Mixin box shadow</h3>
<div class="example">
    @include box-shadow(0, 5px, 15px, 0, rgba(0, 0, 0, 0.2));
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-box-shadow.php'; ?></code></pre>
</div>

<h3 id="mixin-clearfix" class="h3">Mixin clearfix</h3>
<div class="example">
    @include clearfix;
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-clearfix.php'; ?></code></pre>
</div>

<h3 id="mixin-flex" class="h3">Mixin flex</h3>
<div class="example">
    @include flex;
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-flex.php'; ?></code></pre>
</div>

<h3 id="mixin-hover" class="h3">Mixin hover</h3>
<div class="example">
    @include hover{<br/>
    //code<br/>
    }
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-hover.php'; ?></code></pre>
</div>

<h3 id="mixin-key-frames" class="h3">Mixin key-frames</h3>
<div class="example">
    @include keyframes(view-up) {<br/>
    0% {<br/>
    @include transform (translate(0, 125px));<br/>
    }<br/>
    100% {<br/>
    @include transform (translate(0, 0));<br/>
    }<br/>
    }
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-key-frames.php'; ?></code></pre>
</div>

<h3 id="mixin-opacity" class="h3">Mixin opacity</h3>
<div class="example">
    @include opacity(0);<br/>
    @include opacity(.3);<br/>
    @include opacity(1);<br/>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-opacity.php'; ?></code></pre>
</div>

<h3 id="mixin-rotation" class="h3">Mixin rotation</h3>
<div class="example">
    @include rotate(0);<br/>
    @include rotate(45);<br/>
    @include rotate(-45);<br/>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-rotation.php'; ?></code></pre>
</div>

<h3 id="mixin-scale" class="h3">Mixin scale</h3>
<div class="example">
    @include scale(1);<br/>
    @include scale(1.5);<br/>
    @include scale(-2);<br/>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-scale.php'; ?></code></pre>
</div>

<h3 id="mixin-size" class="h3">Mixin size</h3>
<div class="example">
    @include size(26px, 22px);<br/>
    @include size(100%, 100%);<br/>
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-size.php'; ?></code></pre>
</div>

<h3 id="mixin-text-hide" class="h3">Mixin text-hide</h3>
<div class="example">
    @include text-hide;
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-text-hide.php'; ?></code></pre>
</div>

<h3 id="mixin-text-truncate" class="h3">Mixin text-truncate</h3>
<div class="example">
    @include text-truncate;
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-text-truncate.php'; ?></code></pre>
</div>

<h3 id="mixin-transform-origin" class="h3">Mixin transform-origin</h3>
<div class="example">
    @include transform-origin(20% 40%);
</div>
<div class="highlight">
    <pre><code class="code xml"><?php include 'mixin-transform-origin.php'; ?></code></pre>
</div>