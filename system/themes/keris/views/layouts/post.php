<!DOCTYPE html>
<html lang="en">
<head>
	<?php get_partial('metadata'); ?>
</head>
<body>
	<?php get_partial('header'); ?>

	<div class="container">		
		<div class="row">
			<div class="col-md-9">

				<article class="the-content">
					<h1><?php echo $post['title']; ?></h1>

					<span class="date"><i class="glyphicon glyphicon-calendar"></i> <?php echo date("d F Y", strtotime($post['date'])); ?></span>
					<span class="cat">
						<i class="glyphicon glyphicon-tags"></i> 
						<?php foreach ($post['labels'] as $post_label): ?>
							<span><?php echo anchor(POST_TERM.'/label/'.$post_label, $post_label); ?></span>
						<?php endforeach; ?>
					</span>

					<div class="content">
						<?php echo $post['content']; ?>
					</div>
				</article>

				<article>
					<?php get_snippet('disqus'); ?>
				</article>

			</div>
			<div class="col-md-3">
				<?php get_partial('post_sidebar'); ?>
			</div>
		</div>
	</div>

	<?php get_partial('footer'); ?>
</body>
</html>