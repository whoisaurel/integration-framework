<article class="article" itemid="<?php // URL blog ?>" itemscope itemprop="blogPost" itemtype="http://schema
.org/BlogPosting">
    <div class="article__header">
        <img src="<?php // Img ?>" itemprop="thumbnail" width="" height="" alt=""/>
    </div>
    <div class="article__content" itemprop="text">
        <h3 class="title h3" itemprop="name">
            <a href="<?php // URL blog ?>" title="<?php // Title blog ?>" rel="bookmark">Blog Post</a>
        </h3>
        <div class="article__meta">
            <time class="time" itemprop="datePublished" datetime="<?php // Date publication ?>">
                January 7, 2016
            </time>
            by
            <span class="author" itemprop="author" itemscope itemptype="http://schema.org/Person">
				<a href="<?php // URL site author ?>" itemprop="url" rel="author">
					<span itemprop="name">Author Name</span>
				</a>
			</span>
        </div>
        <p>This is a blog post.</p>
    </div>
    <div class="article__footer">
        <div class="article__meta">
            <span class="categories">
                Filed Under:
                <a href="<?php // URL category ?>" title="<?php // Category name ?>" rel="category">
                    Category 1
                </a>
            </span>
            <span class="tags">Tagged With:
                <a href="<?php // URL tags ?>" rel="tag">Tag 1</a>,
                <a href="<?php // URL tags ?>" rel="tag">Tag 2</a>
            </span>
        </div>
    </div>
</article>