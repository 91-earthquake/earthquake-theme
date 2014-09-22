<?php theme_include('header'); ?>
	<div id="content">
		<h1><?php echo article_title(); ?></h1>
		<article>
			<?php echo article_markdown(); ?>
		</article>

		<section>
			<p>This article is my <?php echo numeral(total_articles()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
		</section>
	</section>

	<?php if(comments_open()): ?>
	<section class="comments">
		<?php if(has_comments()): ?>
		<ul class="commentlist">
			<?php $i = 0; while(comments()): $i++; ?>
			<li class="comment" id="comment-<?php echo comment_id(); ?>">
				<div class="wrap">
					<h2><?php echo comment_name(); ?></h2>
					<time><?php echo relative_time(comment_time()); ?></time>

					<div class="content">
						<?php echo comment_text(); ?>
					</div>

					<span class="counter"><?php echo $i; ?></span>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>

		<form method="POST" action="<?php echo comment_form_url();?>#comment">
			<table>
				<tr>
					<td></td>
					<td>
						<?php echo comment_form_notifications(); ?>
					</td>
				</tr>
				<tr>
					<td><label for="name">Your name:</label></td>
					<td><?php echo comment_form_input_name('class="input"'); ?></td>
				</tr>
				<tr>
					<td><label for="email">Your email address:</label></td>
					<td><?php echo comment_form_input_email('class="input"'); ?></td>
				</tr>
				<tr>
					<td><label for="text">Your comment:</label></td>
					<td><?php echo comment_form_input_text('class="input"'); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo comment_form_button('Submit'); ?></td>
				</tr>
			</table>
		</form>

	</div>
	<?php endif; ?>

<?php theme_include('footer'); ?>