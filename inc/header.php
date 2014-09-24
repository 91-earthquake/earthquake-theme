<header class="main">
	<a id="logo" href="<?php echo base_url();?>">
		<?php
			echo site_meta('logo');
		?>
	</a>
	<?php if(has_menu_items()): ?>
	<nav id="main" role="navigation">
		<ul>
			<?php while(menu_items()): ?>
			<li <?php echo (menu_active() ? 'class="nav-item active"' : 'class="nav-item"'); ?>>
				<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
					<?php echo menu_name(); ?>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</nav>
	<?php endif; ?>
</header>