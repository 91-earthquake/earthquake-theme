<?php theme_include('header'); ?>
	<?php if(has_posts()): ?>
		<ul class="items">
			<?php posts(); ?>
			<li>
				<article class="post">
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
							<?php echo article_title(); ?>
						</a>
					</h1>

					<div>
						<?php echo article_markdown(); ?>
					</div>

					<footer>
						Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
					</footer>
				</article>
			</li>
			<br>
			<p style="color:#BDBDBD">Other posts:</p>
			<?php $i = 0; while(posts()): ?>
			<li>
				<article>
					<h2>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div>
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

<?php theme_include('footer'); ?>