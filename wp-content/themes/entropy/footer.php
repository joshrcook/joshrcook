	<footer>
		<div class="container">
			<ul>
				<li><?php previous_posts_link('&larr; Previous Page', 0) ?></li>
				<li><?php next_posts_link('Next Page &rarr;', 0); ?></li>
			</ul>
			<p><a href="<?php get_permalink(get_page_by_title('Contact')); ?>">Contact Me.</a><br />
                            &copy; <?php the_time('Y') ?>. All Rights Reserved. <a href="http://timothy-long.com/entropy">Entropy Wordpress Theme</a> by <a href="http://timothy-long.com">Timothy Long</a></p>
		</div>
	</footer>
</body>
</html>